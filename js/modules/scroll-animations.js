/**
 * Scroll Animations Module
 * Gère les animations au scroll, barres de compétences, stats
 */

export function initScrollAnimations() {
    initFadeInAnimations();
    initSkillBars();
    initStatsCounter();
    initParallax();
}

function initFadeInAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements
    const animatedElements = document.querySelectorAll(
        '.section-header, .about-text, .about-visual, .skill-category, .project-card, .contact-content > *, .diploma-card'
    );
    
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        observer.observe(el);
    });
}

function initSkillBars() {
    const skillBars = document.querySelectorAll('.skill-progress');
    
    const observerOptions = {
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const progress = entry.target.getAttribute('data-progress');
                entry.target.style.width = progress + '%';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    skillBars.forEach(bar => observer.observe(bar));
}

function initStatsCounter() {
    const stats = document.querySelectorAll('.stat-number');
    
    const observerOptions = {
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const text = target.textContent;
                
                // Only animate if it contains numbers
                if (/\d/.test(text)) {
                    const finalValue = parseInt(text.replace(/\D/g, ''));
                    const suffix = text.replace(/\d/g, '');
                    let currentValue = 0;
                    const increment = Math.ceil(finalValue / 50);
                    
                    const counter = setInterval(() => {
                        currentValue += increment;
                        if (currentValue >= finalValue) {
                            target.textContent = finalValue + suffix;
                            clearInterval(counter);
                        } else {
                            target.textContent = currentValue + suffix;
                        }
                    }, 30);
                }
                
                observer.unobserve(target);
            }
        });
    }, observerOptions);
    
    stats.forEach(stat => observer.observe(stat));
}

function initParallax() {
    const heroContent = document.querySelector('.hero-content');
    const heroVisual = document.querySelector('.hero-visual');
    
    if (!heroContent || !heroVisual) return;
    
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const rate = scrolled * 0.3;
        
        if (scrolled <= window.innerHeight) {
            heroContent.style.transform = `translateY(${rate}px)`;
            heroVisual.style.transform = `translateY(${rate * 0.5}px)`;
        }
    });
}
