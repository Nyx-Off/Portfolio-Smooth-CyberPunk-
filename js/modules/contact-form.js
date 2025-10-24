/**
 * Contact Form Module
 * Gère le formulaire de contact, validation et envoi
 */

export function initContactForm() {
    const form = document.getElementById('contactForm');
    
    if (!form) return;
    
    initFormValidation(form);
    initFormSubmit(form);
}

function initFormValidation(form) {
    const inputs = form.querySelectorAll('.form-input');
    
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value.trim() === '') {
                this.style.borderColor = 'rgba(255, 0, 85, 0.5)';
            } else {
                this.style.borderColor = 'rgba(0, 255, 136, 0.2)';
            }
        });
        
        input.addEventListener('focus', function() {
            this.style.borderColor = 'var(--color-green)';
        });
    });
}

function initFormSubmit(form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(form);
        const data = {
            name: formData.get('name'),
            email: formData.get('email'),
            subject: formData.get('subject'),
            message: formData.get('message')
        };
        
        // Validate
        if (!validateForm(data)) {
            showNotification('Veuillez remplir tous les champs correctement.', 'error');
            return;
        }
        
        // Show loading state
        const submitBtn = form.querySelector('.btn-submit');
        const originalText = submitBtn.querySelector('span').textContent;
        submitBtn.querySelector('span').textContent = 'Envoi en cours...';
        submitBtn.disabled = true;
        
        // Simulate sending (replace with actual API call)
        setTimeout(() => {
            showNotification('Message envoyé avec succès !', 'success');
            form.reset();
            submitBtn.querySelector('span').textContent = originalText;
            submitBtn.disabled = false;
        }, 1500);
        
        // In production, you would send the data to your backend:
        /*
        fetch('api/contact.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showNotification('Message envoyé avec succès !', 'success');
                form.reset();
            } else {
                showNotification('Erreur lors de l\'envoi. Réessayez.', 'error');
            }
        })
        .catch(error => {
            showNotification('Erreur lors de l\'envoi. Réessayez.', 'error');
        })
        .finally(() => {
            submitBtn.querySelector('span').textContent = originalText;
            submitBtn.disabled = false;
        });
        */
    });
}

function validateForm(data) {
    // Check if all fields are filled
    if (!data.name || !data.email || !data.subject || !data.message) {
        return false;
    }
    
    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(data.email)) {
        return false;
    }
    
    // Check minimum length
    if (data.message.length < 10) {
        return false;
    }
    
    return true;
}

function showNotification(message, type = 'info') {
    // Remove existing notification if any
    const existingNotification = document.querySelector('.notification');
    if (existingNotification) {
        existingNotification.remove();
    }
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    
    // Add styles
    Object.assign(notification.style, {
        position: 'fixed',
        top: '100px',
        right: '20px',
        padding: '1rem 1.5rem',
        backgroundColor: type === 'success' ? 'rgba(0, 255, 136, 0.1)' : 'rgba(255, 0, 85, 0.1)',
        border: type === 'success' ? '1px solid rgba(0, 255, 136, 0.3)' : '1px solid rgba(255, 0, 85, 0.3)',
        borderRadius: '8px',
        color: type === 'success' ? '#00ff88' : '#ff0055',
        zIndex: '10000',
        backdropFilter: 'blur(10px)',
        animation: 'slideInRight 0.3s ease',
        maxWidth: '300px'
    });
    
    document.body.appendChild(notification);
    
    // Add animation styles if not already present
    if (!document.getElementById('notification-animations')) {
        const style = document.createElement('style');
        style.id = 'notification-animations';
        style.textContent = `
            @keyframes slideInRight {
                from {
                    transform: translateX(400px);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            @keyframes slideOutRight {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(400px);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    }
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 5000);
}
