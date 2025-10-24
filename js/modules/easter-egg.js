/**
 * Easter Egg Module
 * Terminal secret activé avec Ctrl+Shift+K
 */

export function initEasterEgg() {
    document.addEventListener('keydown', function(e) {
        if (e.ctrlKey && e.shiftKey && e.key === 'K') {
            e.preventDefault();
            showSecretTerminal();
        }
    });
    
    // Console message
    console.log('%c👨‍💻 Portfolio Cyberpunk - Prenom Nom', 'color: #00ff88; font-size: 20px; font-weight: bold;');
    console.log('%cÉtudiant en Cybersécurité - ESIEE-IT', 'color: #a855f7; font-size: 14px;');
    console.log('%cPssst... Essaye Ctrl+Shift+K 🔓', 'color: #00ff88; font-size: 12px; font-style: italic;');
}

function showSecretTerminal() {
    // Create overlay
    const overlay = document.createElement('div');
    overlay.id = 'secret-terminal';
    overlay.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        z-index: 99999;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    `;
    
    // Create terminal
    const terminal = document.createElement('div');
    terminal.style.cssText = `
        background: #0a0a0a;
        border: 2px solid #00ff88;
        border-radius: 8px;
        padding: 30px;
        max-width: 700px;
        width: 90%;
        box-shadow: 0 0 50px rgba(0, 255, 136, 0.5);
        font-family: 'Courier New', monospace;
    `;
    
    const commands = [
        { text: 'root@NyxOff.cybert:~# whoami', delay: 0 },
        { text: '> Nom Prenom  - Cybersecurity Student', delay: 300, color: '#00ff88' },
        { text: '', delay: 500 },
        { text: 'root@NyxOff.cybert:~# cat /etc/skills.conf', delay: 700 },
        { text: '> Pentest: ENABLED ✓', delay: 1000, color: '#00ff88' },
        { text: '> Red Team: ENABLED ✓', delay: 1200, color: '#00ff88' },
        { text: '> Blue Team: ENABLED ✓', delay: 1400, color: '#00ff88' },
        { text: '> SIEM/SOC: ENABLED ✓', delay: 1600, color: '#00ff88' },
        { text: '', delay: 1800 },
        { text: 'root@NyxOff.cybert:~# sudo access --grant=admin', delay: 2000 },
        { text: '> ACCESS GRANTED 🔓', delay: 2300, color: '#a855f7' },
        { text: '> You found the secret terminal!', delay: 2600, color: '#a855f7' },
        { text: '', delay: 2800 },
        { text: '> "Stay curious, stay secure" - Prenom', delay: 3000, color: '#00ff88', italic: true },
        { text: '', delay: 3200 },
        { text: '[Cliquez n\'importe où pour fermer]', delay: 3500, color: '#666', size: '12px' }
    ];
    
    terminal.innerHTML = '<div id="terminal-content"></div>';
    overlay.appendChild(terminal);
    document.body.appendChild(overlay);
    
    // Fade in
    requestAnimationFrame(() => {
        overlay.style.opacity = '1';
    });
    
    const content = terminal.querySelector('#terminal-content');
    
    // Animate commands
    commands.forEach(cmd => {
        setTimeout(() => {
            const line = document.createElement('div');
            line.textContent = cmd.text;
            line.style.cssText = `
                color: ${cmd.color || '#e0e0e0'};
                margin: 8px 0;
                font-size: ${cmd.size || '14px'};
                ${cmd.italic ? 'font-style: italic;' : ''}
                opacity: 0;
                animation: typeIn 0.3s ease forwards;
            `;
            content.appendChild(line);
        }, cmd.delay);
    });
    
    // Close on click
    overlay.addEventListener('click', function() {
        overlay.style.opacity = '0';
        setTimeout(() => overlay.remove(), 300);
    });
}

// Add CSS animations for easter egg
const easterEggStyles = document.createElement('style');
easterEggStyles.id = 'easter-egg-styles';
easterEggStyles.textContent = `
    @keyframes typeIn {
        from { opacity: 0; transform: translateY(-5px); }
        to { opacity: 1; transform: translateY(0); }
    }
`;
document.head.appendChild(easterEggStyles);
