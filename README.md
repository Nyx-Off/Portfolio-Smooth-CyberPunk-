# Portfolio Cyberpunk -  🚀

Portfolio moderne en cybersécurité avec thème cyberpunk professionnel - Noir avec touches de vert néon et violet.

## 🎨 Caractéristiques

- **Design Cyberpunk** : Thème noir avec accents vert néon (#00ff88) et violet (#a855f7)
- **Responsive** : S'adapte à tous les écrans (mobile, tablette, desktop)
- **Smooth** : Animations fluides et professionnelles
- **Performant** : Code optimisé et léger
- **Moderne** : Technologies web actuelles


## 🚀 Installation

### 1. Prérequis

- Serveur web (Apache, Nginx) avec PHP 7.4+
- Ou simplement un serveur local (XAMPP, WAMP, MAMP)

### 2. Installation basique

1. Téléchargez tous les fichiers
2. Placez-les dans votre dossier web (htdocs, www, etc.)
3. Accédez au site via votre navigateur

### 3. Configuration du formulaire de contact

Le formulaire a configuré avec ton email.

Pour activer l'envoi AJAX dans `js/main.js`, décommentez les lignes 148-169.

## 📋 Sections du portfolio

### 🏠 Accueil
- Titre avec effet glitch
- Code block animé
- Call-to-action vers projets et contact

### 👤 À propos
- Présentation de l'étudiant en cybersécurité
- Statistiques (Bac+5, 6+ projets, 4 diplômes)
- Frame design cyberpunk

### 📧 Contact
- Email
- GitHub
- LinkedIn
- Site 

## ⚙️ Personnalisation

### Modifier les couleurs

Dans `css/style.css`, variables CSS (ligne 10-15) :

```css
:root {
    --color-bg: #0a0a0a;              /* Fond principal */
    --color-green: #00ff88;           /* Vert néon */
    --color-purple: #a855f7;          /* Violet */
    --color-text: #e0e0e0;            /* Texte principal */
}
```

### Modifier le contenu

Éditez `index.php` pour personnaliser :

- Informations personnelles
- Compétences et niveaux
- Projets et descriptions
- Diplômes et formations

## 🎯 Fonctionnalités

### Navigation
- Menu responsive avec toggle mobile
- Smooth scroll entre les sections
- Highlight de la section active
- Navbar avec effet au scroll

### Animations
- Fade in au scroll
- Barres de compétences animées
- Compteurs de statistiques
- Effet parallaxe subtil
- Effet glitch sur le titre (au hover)
- Transitions fluides partout

### Formulaire de contact
- Validation en temps réel
- Envoi par email (via PHP)
- Rate limiting (protection spam)
- Notifications visuelles
- Logs des messages

## 📱 Responsive

Le design s'adapte parfaitement sur :
- **Desktop** : 1200px et plus
- **Tablette** : 768px - 1199px  
- **Mobile** : moins de 768px

## 🎨 Palette de couleurs

| Couleur | Hex | Usage |
|---------|-----|-------|
| Noir | `#0a0a0a` | Fond principal |
| Noir secondaire | `#111111` | Éléments secondaires |
| Vert néon | `#00ff88` | Accents principaux |
| Violet | `#a855f7` | Accents secondaires |
| Gris clair | `#e0e0e0` | Texte principal |
| Gris | `#999999` | Texte secondaire |

## 🌐 Mise en production

### Checklist

- [x] Email a configuré
- [ ] Activer HTTPS
- [ ] Optimiser les images (si ajoutées)
- [ ] Tester sur différents navigateurs
- [ ] Tester la version mobile
- [ ] Configurer un système de cache
- [ ] Ajouter Google Analytics (optionnel)

### Serveur recommandé

assurez-vous que :
- PHP 7.4+ est installé
- La fonction `mail()` est configurée
- Le fichier `.htaccess` est activé (mod_rewrite)
- Les permissions sont correctes sur le dossier `logs/`

## 🔧 Technologies utilisées

- **Frontend** : HTML5, CSS3 (Variables CSS), JavaScript ES6+
- **Backend** : PHP 7.4+
- **Fonts** : Orbitron (titres), Rajdhani (texte)
- **Animations** : CSS Transitions & Keyframes, Intersection Observer API
- **Icons** : Emojis et SVG inline

## 🐛 Dépannage

### Le formulaire ne s'envoie pas

1. Vérifiez que PHP est installé et activé
2. Vérifiez les logs dans `logs/contact.log`
3. Assurez-vous que la fonction `mail()` de PHP est configurée
4. Testez avec un service SMTP externe

### Les animations ne fonctionnent pas

1. Vérifiez que JavaScript est activé
2. Ouvrez la console du navigateur (F12)
3. Assurez-vous que `main.js` est bien chargé


## 📝 Licence

Ce portfolio est est sous licence MIT.

---

**Nyx-Off** ~ System Online ● Développé avec ❤️
