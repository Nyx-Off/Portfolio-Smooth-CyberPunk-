<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Cybersécurité-Punk</title>
    <meta name="description" content="Portfolio de Nom Prenom ">
    <meta name="keywords" content="cybersécurité, pentest, sécurité informatique, SIEM, SOC">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Background Grid Effect -->
    <div class="grid-background"></div>
    <div class="gradient-overlay"></div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <span class="logo-bracket">&lt;</span>
                <span class="logo-text">PORTFOLIO</span>
                <span class="logo-bracket">/&gt;</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link active">Accueil</a></li>
                <li><a href="#about" class="nav-link">À propos</a></li>
                <li><a href="#skills" class="nav-link">Compétences</a></li>
                <li><a href="#projects" class="nav-link">Projets</a></li>
                <li><a href="#diplomas" class="nav-link">Formation</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="glitch-wrapper">
                    <h1 class="hero-title glitch" data-text="MAXIME GILLE">Prenom Nom</h1>
                </div>
                <h2 class="hero-subtitle">Étudiant en Cybersécurité</h2>
                <p class="hero-description">
                    Passionné par la sécurité informatique et la gestion de projets
                </p>
                <div class="hero-cta">
                    <a href="#projects" class="btn btn-primary">
                        <span>Voir mes projets</span>
                        <span class="btn-arrow">→</span>
                    </a>
                    <a href="#contact" class="btn btn-secondary">
                        <span>Me contacter</span>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="code-block">
                    <div class="code-line"><span class="purple">const</span> student = {</div>
                    <div class="code-line">  name: <span class="green">"Prenom Nom"</span>,</div>
                    <div class="code-line">  domain: <span class="green">"Cybersécurité"</span>,</div>
                    <div class="code-line">  school: <span class="green">"ecole"</span>,</div>
                    <div class="code-line">  passion: <span class="green">"Sécurité & Innovation"</span></div>
                    <div class="code-line">};</div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <span class="section-number">01</span>
                <h2 class="section-title">À propos</h2>
                <div class="section-line"></div>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p class="about-intro">
                        Étudiant en Mastère E3IN (Cybersécurité) à ECOLE, je me spécialise 
                        dans la sécurité offensive et défensive, la gestion de projets et l'analyse 
                        de menaces.
                    </p>
                    <p>
                        Mon parcours combine formation technique approfondie et expérience pratique à 
                        travers divers projets et alternances. Je suis particulièrement intéressé par 
                        l'analyse de sécurité, le pentesting, et la gestion d'incidents de sécurité.
                    </p>
                    <p>
                        Actuellement, je développe mes compétences en SIEM/SOC et en réponse aux 
                        incidents, tout en gérant mon propre infrastructure de virtualisation avec 
                        Proxmox.
                    </p>
                    <div class="about-stats">
                        <div class="stat-item">
                            <span class="stat-number">Bac+5</span>
                            <span class="stat-label">Mastère Cybersécurité</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">6+</span>
                            <span class="stat-label">Projets réalisés</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Diplômes obtenus</span>
                        </div>
                    </div>
                </div>
                <div class="about-visual">
                    <div class="profile-frame">
                        <div class="frame-corner tl"></div>
                        <div class="frame-corner tr"></div>
                        <div class="frame-corner bl"></div>
                        <div class="frame-corner br"></div>
                        <div class="profile-placeholder">
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="100" cy="70" r="35" fill="#00ff88" opacity="0.1"/>
                                <circle cx="100" cy="70" r="30" fill="none" stroke="#00ff88" stroke-width="2"/>
                                <path d="M 60 130 Q 100 110 140 130" fill="none" stroke="#00ff88" stroke-width="2"/>
                                <path d="M 50 150 Q 100 130 150 150" fill="none" stroke="#00ff88" stroke-width="2"/>
                                <circle cx="100" cy="100" r="60" fill="none" stroke="#a855f7" stroke-width="1" opacity="0.3"/>
                                <text x="100" y="185" font-family="monospace" font-size="12" fill="#00ff88" text-anchor="middle">root@maxime</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <div class="section-header">
                <span class="section-number">02</span>
                <h2 class="section-title">Compétences</h2>
                <div class="section-line"></div>
            </div>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3 class="category-title">Sécurité Offensive</h3>
                    <div class="skill-list">
                        <div class="skill-item">
                            <span class="skill-name">Pentest / Red Team</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Metasploit / Burp Suite</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="80"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Nmap / Wireshark</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Analyse de Vulnérabilités</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="85"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skill-category">
                    <h3 class="category-title">Sécurité Défensive</h3>
                    <div class="skill-list">
                        <div class="skill-item">
                            <span class="skill-name">Analyse de Menaces</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">SIEM / SOC</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="75"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Réponse aux Incidents</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="95"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Exabeam / Crowdstrike</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="70"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skill-category">
                    <h3 class="category-title">Outils & Tech</h3>
                    <div class="skill-list">
                        <div class="skill-item">
                            <span class="skill-name">Gestion de Projet</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="60"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Bash / PowerShell</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="85"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">C / HTML</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="75"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Proxmox / VPN</span>
                            <div class="skill-bar">
                                <div class="skill-progress" data-progress="90"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="margin-top: var(--spacing-lg); background: rgba(17, 17, 17, 0.6); border: 1px solid rgba(0, 255, 136, 0.2); border-radius: var(--radius-md); padding: var(--spacing-md);">
                <h3 style="color: var(--color-purple); font-family: var(--font-heading); font-size: 1.3rem; margin-bottom: var(--spacing-sm);">
                    Technologies & Outils
                </h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: var(--spacing-sm); color: var(--color-text-secondary);">
                    <div>
                        <strong style="color: var(--color-green);">SIEM/SOC:</strong><br>
                        Exabeam, Crowdstrike, Tehtris
                    </div>
                    <div>
                        <strong style="color: var(--color-green);">Pentest:</strong><br>
                        Metasploit, Burp Suite, Nmap
                    </div>
                    <div>
                        <strong style="color: var(--color-green);">Analyse:</strong><br>
                        Wireshark, TCPdump, Cyberwatch
                    </div>
                    <div>
                        <strong style="color: var(--color-green);">Infrastructure:</strong><br>
                        Proxmox, Nextcloud, VPN
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <div class="section-header">
                <span class="section-number">03</span>
                <h2 class="section-title">Projets</h2>
                <div class="section-line"></div>
            </div>
            <div class="projects-grid">
                <article class="project-card">
                    <div class="project-image">
                        <div class="project-placeholder">
                            <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                                <rect width="400" height="300" fill="#0a0a0a"/>
                                <circle cx="200" cy="120" r="60" stroke="#00ff88" stroke-width="2" fill="none"/>
                                <circle cx="200" cy="120" r="45" stroke="#a855f7" stroke-width="2" fill="none"/>
                                <path d="M 200 60 L 200 180 M 140 120 L 260 120" stroke="#00ff88" stroke-width="2"/>
                                <text x="200" y="240" font-family="monospace" font-size="24" fill="#a855f7" text-anchor="middle">MoneyKiiz</text>
                            </svg>
                        </div>
                        <div class="project-overlay">
                            <span class="btn-view">Chef de projet →</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Project 1</h3>
                        <p class="project-description">
                            Gestion du projet de V2 de l'application Android & iOS NOM_APP. 
                            Gamification du projet, ajout d'un chatbot interne & analyse de sécurité + Analyse RGAA.
                        </p>
                        <div class="project-tags">
                            <span class="tag">Chef de projet</span>
                            <span class="tag">Analyse sécurité</span>
                            <span class="tag">iOS & Android</span>
                            <span class="tag">RGAA</span>
                        </div>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-image">
                        <div class="project-placeholder">
                            <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                                <rect width="400" height="300" fill="#0a0a0a"/>
                                <rect x="100" y="80" width="200" height="140" stroke="#a855f7" stroke-width="2" fill="none"/>
                                <circle cx="150" cy="130" r="20" fill="#00ff88" opacity="0.3"/>
                                <circle cx="250" cy="130" r="20" fill="#a855f7" opacity="0.3"/>
                                <text x="200" y="260" font-family="monospace" font-size="20" fill="#00ff88" text-anchor="middle">Global Game Jam</text>
                            </svg>
                        </div>
                        <div class="project-overlay">
                            <span class="btn-view">Organisation →</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Projet 2</h3>
                        <p class="project-description">
                            Participation à l'organisation des événements Projet 2 de VILLE pour les années 2024, 2025 et 2026. 
                            Responsable réseau de l'événement.
                        </p>
                        <div class="project-tags">
                            <span class="tag">Gestion réseau</span>
                            <span class="tag">Événementiel</span>
                            <span class="tag">Infrastructure</span>
                        </div>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-image">
                        <div class="project-placeholder">
                            <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                                <rect width="400" height="300" fill="#0a0a0a"/>
                                <rect x="150" y="100" width="100" height="100" stroke="#00ff88" stroke-width="2" fill="none"/>
                                <circle cx="200" cy="150" r="30" stroke="#a855f7" stroke-width="2" fill="none"/>
                                <path d="M 200 135 L 200 165 M 185 150 L 215 150" stroke="#a855f7" stroke-width="3"/>
                                <text x="200" y="260" font-family="monospace" font-size="18" fill="#a855f7" text-anchor="middle">KeePass V2</text>
                            </svg>
                        </div>
                        <div class="project-overlay">
                            <span class="btn-view">Sécurité →</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Projet 3</h3>
                        <p class="project-description">
                            Remplacement de KeePass dans l'infrastructure Icade au profit d'un nouvel outil 
                            plus performant et répondant aux nouvelles exigences techniques de l'entreprise.
                        </p>
                        <div class="project-tags">
                            <span class="tag">Gestion de projet</span>
                            <span class="tag">Secrets</span>
                            <span class="tag">Appel d'offres</span>
                        </div>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-image">
                        <div class="project-placeholder">
                            <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                                <rect width="400" height="300" fill="#0a0a0a"/>
                                <rect x="80" y="80" width="80" height="60" stroke="#00ff88" stroke-width="2" fill="none"/>
                                <rect x="180" y="100" width="80" height="60" stroke="#00ff88" stroke-width="2" fill="none"/>
                                <rect x="280" y="120" width="80" height="60" stroke="#00ff88" stroke-width="2" fill="none"/>
                                <line x1="160" y1="110" x2="180" y2="130" stroke="#a855f7" stroke-width="2"/>
                                <line x1="260" y1="130" x2="280" y2="150" stroke="#a855f7" stroke-width="2"/>
                                <text x="200" y="250" font-family="monospace" font-size="18" fill="#00ff88" text-anchor="middle">Proxmox Homelab</text>
                            </svg>
                        </div>
                        <div class="project-overlay">
                            <span class="btn-view">Infrastructure →</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Projet 4</h3>
                        <p class="project-description">
                            Gestion d'un petit parc informatique personnel avec notamment un Proxmox qui 
                            virtualise Nextcloud, VPN, Serveur Web et Serveur Gaming.
                        </p>
                        <div class="project-tags">
                            <span class="tag">Proxmox</span>
                            <span class="tag">Nextcloud</span>
                            <span class="tag">VPN</span>
                            <span class="tag">Certificats</span>
                        </div>
                    </div>
                </article>

                <article class="project-card">
                    <div class="project-image">
                        <div class="project-placeholder">
                            <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg">
                                <rect width="400" height="300" fill="#0a0a0a"/>
                                <rect x="120" y="90" width="160" height="120" stroke="#a855f7" stroke-width="2" fill="none"/>
                                <text x="200" y="140" font-family="monospace" font-size="40" fill="#00ff88" text-anchor="middle">&lt;/&gt;</text>
                                <text x="200" y="180" font-family="monospace" font-size="16" fill="#a855f7" text-anchor="middle">C Language</text>
                                <text x="200" y="250" font-family="monospace" font-size="18" fill="#00ff88" text-anchor="middle">My_Teams</text>
                            </svg>
                        </div>
                        <div class="project-overlay">
                            <span class="btn-view">Code →</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Projet 5</h3>
                        <p class="project-description">
                            Création en C de scripts reproduisant l'outil Microsoft Teams. 
                            Projet académique incluant communication client-serveur et gestion de protocoles.
                        </p>
                        <div class="project-tags">
                            <span class="tag">C</span>
                            <span class="tag">Shell</span>
                            <span class="tag">Réseau</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Diplomas Section -->
    <section id="diplomas" class="diplomas">
        <div class="container">
            <div class="section-header">
                <span class="section-number">04</span>
                <h2 class="section-title">Formation</h2>
                <div class="section-line"></div>
            </div>
            <div class="diplomas-grid">
                <div class="diploma-card">
                    <div class="diploma-icon">🎓</div>
                    <h3 class="diploma-title">Mastère E3IN - Cybersécurité</h3>
                    <p class="diploma-school">ECOLE</p>
                    <p class="diploma-level">Bac +5 - RNCP39425</p>
                    <div class="diploma-status">
                        <span class="status-badge">En cours</span>
                    </div>
                </div>

                <div class="diploma-card">
                    <div class="diploma-icon">📚</div>
                    <h3 class="diploma-title">Licence Informatique Générale</h3>
                    <p class="diploma-school">CNAM</p>
                    <p class="diploma-level">Bac +3</p>
                    <div class="diploma-status">
                        <span class="status-badge completed">Obtenu</span>
                    </div>
                </div>

                <div class="diploma-card">
                    <div class="diploma-icon">🎯</div>
                    <h3 class="diploma-title">Bachelor E3IN</h3>
                    <p class="diploma-school">ECOLE</p>
                    <p class="diploma-level">Bac +3</p>
                    <div class="diploma-status">
                        <span class="status-badge completed">Obtenu</span>
                    </div>
                </div>

                <div class="diploma-card">
                    <div class="diploma-icon">💼</div>
                    <h3 class="diploma-title">BTS SIO SISR</h3>
                    <p class="diploma-school">ECOLE</p>
                    <p class="diploma-level">Bac +2</p>
                    <div class="diploma-status">
                        <span class="status-badge completed">Obtenu</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <span class="section-number">05</span>
                <h2 class="section-title">Contact</h2>
                <div class="section-line"></div>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3 class="contact-heading">Discutons de vos projets</h3>
                    <p class="contact-text">
                        Vous avez un projet en sécurité informatique ou besoin d'un regard expert ? 
                        N'hésitez pas à me contacter. Je serais ravi de discuter de vos besoins.
                    </p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <span class="contact-icon">📧</span>
                            <div>
                                <span class="contact-label">Email</span>
                                <a href="mailto:email@gmail.com" class="contact-value">EMAIL</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">🌐</span>
                            <div>
                                <span class="contact-label">Site Web</span>
                                <a href="https://bensalemdev.fr" target="_blank" class="contact-value">Site</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <span class="contact-icon">📍</span>
                            <div>
                                <span class="contact-label">Localisation</span>
                                <span class="contact-value">Île-de-France</span>
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="https://github.com/Nyx-Off" class="social-link" target="_blank" aria-label="GitHub">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/a_changer/" class="social-link" target="_blank" aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Sujet</label>
                        <input type="text" id="subject" name="subject" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" class="form-input" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-submit">
                        <span>Envoyer</span>
                        <span class="btn-arrow">→</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2025 NyxOff. Tous droits réservés.</p>
                <p class="footer-tagline">Développé avec <span class="heart">❤️</span> et <span class="code">&lt;code/&gt;</span></p>
                <p style="margin-top: 0.5rem; font-size: 0.85rem;">
                    <span style="color: var(--color-green);">●</span> root@mNyxOff.dev ~ System Online
                </p>
            </div>
        </div>
    </footer>

    <script src="js/main.js" type="module"></script>
</body>
</html>
