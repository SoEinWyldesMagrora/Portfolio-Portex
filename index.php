<?php include 'header.php'; ?>

<main>
<section id="home" class="section hero">
    <div class="grid-background"></div>
    <div class="hero-content">
        <h1>SoEinWyldesMagrora</h1>
        <p class="hero-subtitle">Web Developer & Designer</p>
        <div class="social-links">
            <a href="https://github.com/soeinwyldesmagrora" class="social-icon" title="GitHub"><i class="fab fa-github"></i></a>
        </div>
    </div>
</section>

    <section id="about" class="section about">
        <h2 class="section-title">Über mich</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Ich bin ein leidenschaftlicher Webentwickler mit Fokus auf moderne Technologien und kreative Lösungen. Mit meiner Erfahrung in Frontend- und Backend-Entwicklung erschaffe ich benutzerfreundliche und innovative Webanwendungen.</p>
                <div class="about-stats">
                    <div class="stat-item">
                        <span class="stat-number">5+</span>
                        <span class="stat-label">Jahre Erfahrung</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Projekte</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3+</span>
                        <span class="stat-label">Kunden</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section mit verbesserten Cards -->
    <section id="skills" class="section skills">
        <h2 class="section-title">Meine Fähigkeiten</h2>
        <div class="skill-grid">
            <div class="skill-card">
                <i class="fas fa-code skill-icon"></i>
                <h3>Frontend Development</h3>
                <div class="skill-tags">
                    <span class="skill-tag">HTML5</span>
                    <span class="skill-tag">CSS</span>
                    <span class="skill-tag">JavaScript</span>
                </div>
                <div class="progress-bar">
                    <div class="progress" style="width: 85%"></div>
                </div>
            </div>

            <div class="skill-card">
                <i class="fas fa-database skill-icon"></i>
                <h3>Backend Development</h3>
                <div class="skill-tags">
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">Node.js</span>
                    <span class="skill-tag">MongoDB</span>
                </div>
                <div class="progress-bar">
                    <div class="progress" style="width: 65%"></div>
                </div>
            </div>

            <div class="skill-card">
                <i class="fas fa-image skill-icon"></i>
                <h3>Bildbearbeitung</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Photoshop</span>
                    <span class="skill-tag">Illustrator</span>
                    <span class="skill-tag">Lightroom</span>
                </div>
                <div class="progress-bar">
                    <div class="progress" style="width: 90%"></div>
                </div>
            </div>

            <div class="skill-card">
                <i class="fab fa-windows skill-icon"></i>
                <h3>Windows Entwicklung</h3>
                <div class="skill-tags">
                    <span class="skill-tag">WPF</span>
                    <span class="skill-tag">UWP</span>
                    <span class="skill-tag">WinForms</span>
                </div>
                <div class="progress-bar">
                    <div class="progress" style="width: 55%"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projekte mit verbesserten Cards -->
    <section id="projects" class="section projects">
        <h2 class="section-title">Meine Projekte</h2>
        <div class="projects-grid">
            <div class="project-card">
                <img src="img/project1.jpg" alt="Projekt 1" class="project-image">
                <div class="project-info">
                    <h3>E-Commerce Platform</h3>
                    <p>Eine moderne E-Commerce-Plattform mit React und Node.js</p>
                    <div class="project-tech">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">MongoDB</span>
                    </div>
                    <a href="#" class="project-link">Mehr erfahren <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Weitere Project Cards hier... -->
        </div>
    </section>

    <!-- Verbesserte Kontaktsektion -->
    <section id="contact" class="section contact">
        <h2 class="section-title">Kontakt</h2>
        <div class="contact-content">
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" placeholder="Name" required>
                    <span class="focus-border"></span>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="E-Mail" required>
                    <span class="focus-border"></span>
                </div>
                <div class="form-group">
                    <textarea placeholder="Nachricht" required></textarea>
                    <span class="focus-border"></span>
                </div>
                <button type="submit" class="submit-btn">
                    Nachricht senden
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </section>
</main>

<!-- <?php include 'footer.php'; ?> --> 

<script src="js/main.js"></script>