document.addEventListener('DOMContentLoaded', function() {
    // Alle Navigation Links auswählen
    const navLinks = document.querySelectorAll('.nav-item');
    // Alle Sektionen auswählen
    const sections = document.querySelectorAll('.section');

    // Initial die Home-Sektion anzeigen
    showSection('home');

    // Event Listener für jeden Nav-Link
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Active-Klasse von allen Nav-Links entfernen
            navLinks.forEach(link => link.classList.remove('active'));
            // Active-Klasse zum geklickten Link hinzufügen
            this.classList.add('active');

            // ID der anzuzeigenden Sektion aus dem href bekommen
            const sectionId = this.getAttribute('href').substring(1);
            showSection(sectionId);
        });
    });

    // Funktion zum Anzeigen der gewählten Sektion
    function showSection(sectionId) {
        sections.forEach(section => {
            if (section.id === sectionId) {
                section.style.display = 'block';
                setTimeout(() => {
                    section.style.opacity = '1';
                }, 10);
            } else {
                section.style.opacity = '0';
                setTimeout(() => {
                    section.style.display = 'none';
                }, 500); // Warten bis die Fade-out Animation fertig ist
            }
        });
    }
});