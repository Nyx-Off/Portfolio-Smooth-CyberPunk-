<?php
/**
 * API Contact Handler
 * Gère l'envoi des messages du formulaire de contact
 */

// Configuration
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle OPTIONS request for CORS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée']);
    exit();
}

// ===================================
// CONFIGURATION
// ===================================
define('RECIPIENT_EMAIL', 'met ton email'); // Email ( met le tien )
define('SMTP_FROM', 'noreply@email.fr'); // Email d'expédition ( met le tien )
define('RATE_LIMIT_TIME', 60); // seconds
define('RATE_LIMIT_MAX', 3); // max requests per time period

// ===================================
// RATE LIMITING
// ===================================
function checkRateLimit() {
    session_start();
    
    $now = time();
    $key = 'contact_form_submissions';
    
    if (!isset($_SESSION[$key])) {
        $_SESSION[$key] = [];
    }
    
    // Remove old submissions
    $_SESSION[$key] = array_filter($_SESSION[$key], function($timestamp) use ($now) {
        return ($now - $timestamp) < RATE_LIMIT_TIME;
    });
    
    // Check if limit exceeded
    if (count($_SESSION[$key]) >= RATE_LIMIT_MAX) {
        return false;
    }
    
    // Add current submission
    $_SESSION[$key][] = $now;
    return true;
}

// ===================================
// INPUT VALIDATION
// ===================================
function validateInput($data) {
    $errors = [];
    
    // Validate name
    if (empty($data['name']) || strlen($data['name']) < 2) {
        $errors[] = 'Le nom doit contenir au moins 2 caractères';
    }
    
    // Validate email
    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email invalide';
    }
    
    // Validate subject
    if (empty($data['subject']) || strlen($data['subject']) < 3) {
        $errors[] = 'Le sujet doit contenir au moins 3 caractères';
    }
    
    // Validate message
    if (empty($data['message']) || strlen($data['message']) < 10) {
        $errors[] = 'Le message doit contenir au moins 10 caractères';
    }
    
    return $errors;
}

// ===================================
// SANITIZE INPUT
// ===================================
function sanitizeInput($data) {
    return [
        'name' => htmlspecialchars(strip_tags(trim($data['name'])), ENT_QUOTES, 'UTF-8'),
        'email' => filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL),
        'subject' => htmlspecialchars(strip_tags(trim($data['subject'])), ENT_QUOTES, 'UTF-8'),
        'message' => htmlspecialchars(strip_tags(trim($data['message'])), ENT_QUOTES, 'UTF-8')
    ];
}

// ===================================
// SEND EMAIL
// ===================================
function sendEmail($data) {
    $to = RECIPIENT_EMAIL;
    $subject = '[Portfolio Contact] ' . $data['subject'];
    
    // Create email body
    $body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #00ff88, #a855f7); padding: 20px; text-align: center; color: white; }
            .content { background: #f9f9f9; padding: 20px; margin: 20px 0; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #555; }
            .value { color: #333; margin-top: 5px; }
            .footer { text-align: center; color: #999; font-size: 12px; padding: 20px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Nouveau message depuis votre portfolio</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Nom:</div>
                    <div class='value'>{$data['name']}</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'>{$data['email']}</div>
                </div>
                <div class='field'>
                    <div class='label'>Sujet:</div>
                    <div class='value'>{$data['subject']}</div>
                </div>
                <div class='field'>
                    <div class='label'>Message:</div>
                    <div class='value'>" . nl2br($data['message']) . "</div>
                </div>
            </div>
            <div class='footer'>
                <p>Ce message a été envoyé depuis le formulaire de contact de votre portfolio.</p>
                <p>Date: " . date('d/m/Y H:i:s') . "</p>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Email headers
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . SMTP_FROM,
        'Reply-To: ' . $data['email'],
        'X-Mailer: PHP/' . phpversion()
    ];
    
    // Send email
    return mail($to, $subject, $body, implode("\r\n", $headers));
}

// ===================================
// SAVE TO DATABASE (OPTIONAL)
// ===================================
function saveToDatabase($data) {
    // Si tu veux sauvegarder les messages dans une base de données
    // Décommentez et configurez cette fonction
    
    /*
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=portfolio', 'username', 'password');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare("
            INSERT INTO contact_messages (name, email, subject, message, created_at) 
            VALUES (:name, :email, :subject, :message, NOW())
        ");
        
        $stmt->execute([
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'message' => $data['message']
        ]);
        
        return true;
    } catch (PDOException $e) {
        error_log('Database error: ' . $e->getMessage());
        return false;
    }
    */
    
    return true;
}

// ===================================
// LOG MESSAGE (FALLBACK)
// ===================================
function logMessage($data) {
    $logFile = __DIR__ . '/../logs/contact.log';
    $logDir = dirname($logFile);
    
    if (!file_exists($logDir)) {
        mkdir($logDir, 0755, true);
    }
    
    $logEntry = sprintf(
        "[%s] Name: %s | Email: %s | Subject: %s | Message: %s\n",
        date('Y-m-d H:i:s'),
        $data['name'],
        $data['email'],
        $data['subject'],
        substr($data['message'], 0, 100) . '...'
    );
    
    file_put_contents($logFile, $logEntry, FILE_APPEND);
}

// ===================================
// MAIN LOGIC
// ===================================
try {
    // Check rate limit
    if (!checkRateLimit()) {
        http_response_code(429);
        echo json_encode([
            'success' => false,
            'message' => 'Trop de requêtes. Veuillez réessayer dans quelques instants.'
        ]);
        exit();
    }
    
    // Get JSON input
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    if (!$data) {
        throw new Exception('Données invalides');
    }
    
    // Validate input
    $errors = validateInput($data);
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Erreurs de validation',
            'errors' => $errors
        ]);
        exit();
    }
    
    // Sanitize input
    $cleanData = sanitizeInput($data);
    
    // Send email
    $emailSent = sendEmail($cleanData);
    
    // Save to database (optional)
    // $saved = saveToDatabase($cleanData);
    
    // Log message as fallback
    logMessage($cleanData);
    
    if ($emailSent) {
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => 'Message envoyé avec succès !'
        ]);
    } else {
        throw new Exception('Erreur lors de l\'envoi de l\'email');
    }
    
} catch (Exception $e) {
    error_log('Contact form error: ' . $e->getMessage());
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Une erreur est survenue. Veuillez réessayer plus tard.'
    ]);
}
?>
