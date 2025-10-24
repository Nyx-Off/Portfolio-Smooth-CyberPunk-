# Structure du Projet

## 📁 Organisation des fichiers

```
portfolio/
│
├── index.php                    # Page principale HTML
├── .htaccess                    # Configuration Apache
├── README.md                    # Documentation complète
├── STRUCTURE.md                 # Ce fichier - Documentation de la structure
│
├── css/
│   ├── style.css               # Point d'entrée (importe les modules)
│   └── modules/                # Modules CSS séparés
│       ├── variables.css       # Variables CSS (couleurs, spacing, etc.)
│       ├── reset.css           # Reset & styles de base
│       ├── backgrounds.css     # Grille et gradients
│       ├── layout.css          # Container et layout général
│       ├── navigation.css      # Menu et navbar
│       ├── buttons.css         # Styles des boutons
│       ├── hero.css            # Section d'accueil
│       ├── about.css           # Section à propos
│       ├── skills.css          # Section compétences
│       ├── projects.css        # Section projets
│       ├── diplomas.css        # Section formation
│       ├── contact.css         # Section contact
│       ├── footer.css          # Pied de page
│       ├── animations.css      # Animations et keyframes
│       └── responsive.css      # Media queries
│
├── js/
│   ├── main.js                 # Point d'entrée (importe les modules)
│   └── modules/                # Modules JavaScript séparés
│       ├── navigation.js       # Gestion du menu et navigation
│       ├── scroll-animations.js # Animations au scroll
│       ├── boot-sequence.js    # Séquence de démarrage
│       ├── easter-egg.js       # Terminal secret (Ctrl+Shift+K)
│       └── contact-form.js     # Formulaire de contact
│
└── api/
    └── contact.php             # Backend PHP pour le formulaire
```

## 🎨 Organisation CSS

Le CSS est maintenant organisé en **15 modules séparés** pour une meilleure maintenabilité :

### style.css (Point d'entrée)
- **Rôle** : Importe tous les modules CSS
- **Format** : Utilise `@import url('modules/...')`
- **Ordre** : Base → Layout → Components → Sections → Effects → Responsive

### Modules de base
1. **variables.css** - Variables CSS (couleurs, fonts, spacing, transitions, radius)
2. **reset.css** - Reset CSS et styles de base (*, html, body)
3. **backgrounds.css** - Effets de fond (grille cyberpunk, gradients)

### Modules de layout
4. **layout.css** - Container et structure (section-header, section-title, etc.)
5. **navigation.css** - Menu, navbar, logo, liens de navigation
6. **buttons.css** - Tous les styles de boutons (primary, secondary, arrows)

### Modules de sections
7. **hero.css** - Section d'accueil (title, code-block, scroll-indicator)
8. **about.css** - Section à propos (stats, profile-frame, corners)
9. **skills.css** - Compétences (skill-bars, categories, progress)
10. **projects.css** - Projets (cards, overlays, tags)
11. **diplomas.css** - Formation (diploma-cards, badges, icons)
12. **contact.css** - Contact (form, social-links, inputs)
13. **footer.css** - Pied de page

### Modules d'effets
14. **animations.css** - Toutes les animations (fadeInUp, glitch, scrollbar)
15. **responsive.css** - Media queries (968px, 768px, 480px)

## 🎯 Modules JavaScript

### main.js
- **Rôle** : Point d'entrée principal
- **Importe** : Tous les modules
- **Initialise** : Toutes les fonctionnalités au chargement

### navigation.js
- Menu mobile responsive
- Smooth scroll entre sections
- Highlight de la section active
- Effets au scroll de la navbar

### scroll-animations.js
- Animations fade-in au scroll
- Barres de compétences animées
- Compteur de statistiques
- Effet parallaxe sur le hero

### boot-sequence.js
- **Déclenché** : Au chargement de la page (window.load)
- **Affiche** : Séquence de démarrage style terminal
- **Durée** : ~4.5 secondes
- **Animation** : Lignes de code qui apparaissent progressivement
- **⚠️ Note** : Correction du sursaut d'animation en désactivant les transitions du body pendant l'animation

### easter-egg.js
- **Déclenché** : Ctrl+Shift+K
- **Affiche** : Terminal secret avec commandes
- **Message** : Console avec indice
- **Contenu** : Compétences cybersécurité + citation

### contact-form.js
- Validation en temps réel
- Envoi du formulaire (simulé ou réel)
- Notifications visuelles
- Gestion des erreurs

## 🎨 Organisation CSS

Le fichier `style.css` est organisé en sections claires :

1. **Variables CSS** - Couleurs, fonts, spacing
2. **Reset & Base** - Styles de base
3. **Background Effects** - Grille et gradients
4. **Container** - Conteneur principal
5. **Navigation** - Menu et navbar
6. **Buttons** - Styles des boutons
7. **Hero Section** - Section d'accueil
8. **About Section** - Section à propos
9. **Skills Section** - Compétences
10. **Projects Section** - Projets
11. **Diplomas Section** - Formation
12. **Contact Section** - Contact
13. **Footer** - Pied de page
14. **Animations** - Keyframes
15. **Responsive** - Media queries

## 🔧 Modifications et personnalisation

### Modifier les couleurs
Éditer `css/modules/variables.css` :
```css
:root {
    --color-green: #00ff88;
    --color-purple: #a855f7;
    /* ... */
}
```

### Modifier le style d'une section
Chaque section a son propre fichier CSS :
- Hero → `css/modules/hero.css`
- About → `css/modules/about.css`
- Skills → `css/modules/skills.css`
- Projects → `css/modules/projects.css`
- Diplomas → `css/modules/diplomas.css`
- Contact → `css/modules/contact.css`

### Ajouter un nouveau module CSS
1. Créer le fichier dans `css/modules/mon-module.css`
2. L'importer dans `css/style.css` :
```css
@import url('modules/mon-module.css');
```

### Modifier les animations
Éditer `css/modules/animations.css`

### Modifier le responsive
Éditer `css/modules/responsive.css`

### Modifier le contenu
Éditer `index.php` - le HTML est bien commenté

### Modifier la séquence de boot
Éditer `js/modules/boot-sequence.js` :
```javascript
const bootLines = [
    { text: '> Votre texte', delay: 0, color: '#00ff88' },
    // ...
];
```

### Modifier l'easter egg
Éditer `js/modules/easter-egg.js` :
```javascript
const commands = [
    { text: 'root@NyxOff.cybert:~# votre commande', delay: 0 },
    // ...
];
```

### Modifier le formulaire
- **Frontend** : `js/modules/contact-form.js`
- **Backend** : `api/contact.php`

## 🚀 Utilisation des modules ES6

Les fichiers JavaScript utilisent les modules ES6 :
```javascript
// main.js
import { initNavigation } from './modules/navigation.js';
import { initBootSequence } from './modules/boot-sequence.js';
// ...
```

**Important** : Le script est chargé avec `type="module"` dans `index.php`

## ⚙️ Corrections apportées

### Problème du sursaut d'animation
**Symptôme** : L'animation de boot sequence sursautait à la fin

**Cause** : Conflit entre l'animation de fadeOut de l'overlay et la transition opacity du body

**Solution** :
1. Désactivation des transitions du body pendant la séquence
2. Utilisation de `requestAnimationFrame` pour réactiver les transitions
3. Suppression de l'élément après la fin complète de l'animation

```javascript
// Dans boot-sequence.js
document.body.style.transition = 'none';  // Désactiver
// ... animation ...
requestAnimationFrame(() => {
    document.body.style.transition = 'opacity 0.5s ease';  // Réactiver
});
```

## 📝 Notes techniques

- **ES6 Modules** : Utilisés pour une meilleure organisation
- **Async/Await** : Pas utilisé (pas nécessaire pour ce projet)
- **jQuery** : Non utilisé (vanilla JS uniquement)
- **Frameworks** : Aucun framework JS (projet vanilla)
- **Compatibilité** : Navigateurs modernes (ES6+ requis)

## 🔒 Sécurité

- **PHP** : Validation et sanitization dans `api/contact.php`
- **Rate limiting** : Protection contre le spam
- **XSS Protection** : Headers dans `.htaccess`
- **CSRF** : À implémenter si nécessaire

## 📦 Déploiement

1. Uploader tous les fichiers sur le serveur
2. S'assurer que PHP 7.4+ est installé
3. Vérifier que les modules ES6 sont supportés
4. Configurer l'email dans `api/contact.php`
5. Tester toutes les fonctionnalités

---
