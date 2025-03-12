# Portfolio Website Template

Eine moderne, responsive Portfolio-Website mit animierten Übergängen und einem cyberpunk-inspirierten Design.

## 🚀 Features

- Responsive Design für alle Geräte
- Moderne Animationen und Übergänge
- Interaktive Skill-Cards
- Projekt-Showcase mit Hover-Effekten
- Kontaktformular
- Dunkles Theme mit Neon-Akzenten

## 📋 Anpassungsanleitung

### 1. Persönliche Informationen

Folgende Dateien müssen angepasst werden:

#### `index.php`:
- **Zeile 4**: Ihren Namen in `<h1 class="glitch">`
- **Zeile 5**: Ihre Berufsbezeichnung
- **Zeile 14-16**: Ihre Social Media Links
- **Zeile 25-27**: Ihren "Über mich" Text
- **Zeile 31-43**: Ihre Statistiken (Jahre, Projekte, Kunden)
- **Zeile 52-90**: Ihre Skills und Fortschrittsbalken
- **Zeile 97-130**: Ihre Projekte

#### `header.php`:
- **Zeile 5**: Ihren Namen als Titel
- **Zeile 15**: Ihren Namen im Logo

#### `footer.php`:
- **Zeile 4**: Ihre Kontakt-Email
- **Zeile 14**: Ihre Social Media Links
- **Zeile 19**: Ihren Copyright-Text

### 2. Farbschema

In `css/style.css`:
```css
:root {
    --primary: #00ff88;    /* Hauptfarbe */
    --secondary: #00a1ff;  /* Akzentfarbe */
    --background: #0a0a0a; /* Hintergrundfarbe */
    --text: #ffffff;       /* Textfarbe */
}
```

### 3. Bilder

1. Ersetzen Sie die Projektbilder im `img/` Ordner:
   - `project1.jpg`
   - `project2.jpg`
   - `project3.jpg`

### 4. Schriftarten

Die Website verwendet:
- **'Orbitron'** für Überschriften
- **'Inter'** für normalen Text

Um andere Google Fonts zu verwenden, ändern Sie den Link in `header.php`.

## 📱 Mobile Navigation

Die mobile Navigation wird automatisch unter **768px Bildschirmbreite** aktiviert.
Sie können die Breakpoints in der `style.css` unter den Media Queries anpassen.

## 🛠 Installation

1. Kopieren Sie alle Dateien in Ihr Web-Verzeichnis
2. Stellen Sie sicher, dass PHP auf Ihrem Server installiert ist
3. Passen Sie die Dateien wie oben beschrieben an
4. Fertig!

## 📂 Projektstruktur

```bash
portfolio/
│
├── css/
│   └── style.css
│
├── img/
│   ├── project1.jpg
│   ├── project2.jpg
│   ├── project3.jpg
│
├── js/
│   └── main.js
│
├── index.php
├── header.php
├── footer.php
└── README.md
```

## 💡 Tipps

- Verwenden Sie hochwertige, optimierte Bilder
- Testen Sie die Website auf verschiedenen Geräten
- Aktualisieren Sie regelmäßig Ihre Projekte und Skills
- Fügen Sie **Meta-Tags für SEO** hinzu
```

Jetzt ist es vollständig als Codeblock formatiert. Passt das für dich? 🚀😎
