/**
 * Boot Sequence Module
 * Affiche une séquence de démarrage au chargement de la page
 */

export function initBootSequence() {
    window.addEventListener('load', function() {
        showBootSequence();
    });
}

function showBootSequence() {
    // Create boot overlay
    const bootOverlay = document.createElement('div');
    bootOverlay.id = 'boot-sequence';
    bootOverlay.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #0a0a0a;
        z-index: 100000;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Courier New', monospace;
        opacity: 1;
    `;
    
    const terminal = document.createElement('div');
    terminal.style.cssText = `
        max-width: 800px;
        width: 90%;
        padding: 40px;
    `;
    
    bootOverlay.appendChild(terminal);
    document.body.appendChild(bootOverlay);
    
    // Désactiver temporairement les transitions du body
    document.body.style.transition = 'none';
    document.body.style.opacity = '1';
    
    const bootLines = [
        { text: '> Initializing system...', delay: 0, color: '#00ff88' },
        { text: '> Loading portfolio.exe', delay: 300, color: '#e0e0e0' },
        { text: '> Checking security protocols...', delay: 600, color: '#e0e0e0' },
        { text: '> [OK] Firewall: ACTIVE', delay: 900, color: '#00ff88' },
        { text: '> [OK] Encryption: 256-bit', delay: 1200, color: '#00ff88' },
        { text: '> [OK] Authentification: PASSED', delay: 1500, color: '#00ff88' },
        { text: '> Loading modules:', delay: 1800, color: '#a855f7' },
        { text: '  ├── [✓] pentesting.module', delay: 2000, color: '#e0e0e0' },
        { text: '  ├── [✓] siem.module', delay: 2200, color: '#e0e0e0' },
        { text: '  ├── [✓] incident-response.module', delay: 2400, color: '#e0e0e0' },
        { text: '  └── [✓] project-management.module', delay: 2600, color: '#e0e0e0' },
        { text: '', delay: 2800 },
        { text: '> Connecting to maximegille.ovh...', delay: 3000, color: '#a855f7' },
        { text: '> Connection established ✓', delay: 3300, color: '#00ff88' },
        { text: '', delay: 3500 },
        { text: '> Welcome, Visitor!', delay: 3700, color: '#00ff88', bold: true, size: '18px' },
        { text: '> System ready. Launching portfolio...', delay: 4000, color: '#a855f7' }
    ];
    
    bootLines.forEach(line => {
        setTimeout(() => {
            const p = document.createElement('p');
            p.textContent = line.text;
            p.style.cssText = `
                margin: 8px 0;
                color: ${line.color};
                font-size: ${line.size || '14px'};
                ${line.bold ? 'font-weight: bold;' : ''}
                opacity: 0;
                animation: fadeInLine 0.3s ease forwards;
            `;
            terminal.appendChild(p);
        }, line.delay);
    });
    
    // Remove overlay after boot sequence
    setTimeout(() => {
        // Fade out proprement
        bootOverlay.style.transition = 'opacity 0.5s ease';
        bootOverlay.style.opacity = '0';
        
        setTimeout(() => {
            // Retirer l'élément du DOM
            bootOverlay.remove();
            
            // Réactiver les transitions du body après un délai
            requestAnimationFrame(() => {
                document.body.style.transition = 'opacity 0.5s ease';
            });
        }, 500);
    }, 4500);
}

// Add CSS animations for boot sequence
const bootStyles = document.createElement('style');
bootStyles.id = 'boot-sequence-styles';
bootStyles.textContent = `
    @keyframes fadeInLine {
        from { opacity: 0; transform: translateX(-10px); }
        to { opacity: 1; transform: translateX(0); }
    }
`;
document.head.appendChild(bootStyles);
