<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Shape - Creative Designer</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/script.js" defer></script>

<!--

TemplateMo 593 personal shape

https://templatemo.com/tm-593-personal-shape

-->
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <div class="logo">ProjetGithub</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="mobile-menu-toggle" id="mobileMenuToggle">
                <div class="hamburger"></div>
                <div class="hamburger"></div>
                <div class="hamburger"></div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <ul class="mobile-nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
            <div class="shape shape-5"></div>
            <div class="shape shape-6"></div>
        </div>
        <div class="hero-content">
            <div class="hero-subtitle">WEB DEVELOPERS</div>
            <h1>Du front-end au back-end, nous donnons vie à vos idées.</h1>
            <p class="subtitle">Un groupe de développeurs web passionnés, spécialisés dans la création de solutions modernes, performantes et élégantes.</p>
            <a href="#portfolio" class="cta-button">Explorez nos travaux</a>
        </div>
        <div class="scroll-indicator" onclick="document.getElementById('about').scrollIntoView()"></div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title fade-in">À propos du groupe</h2>
            <div class="about-content">
                <div class="about-image slide-in-left"></div>
                <div class="about-text slide-in-right">
                    <h3>Un Collectif de Développeurs Passionnés</h3>
                    <p>Nous sommes un groupe de développeurs web passionnés, réunis par l’envie de créer des solutions modernes, performantes et centrées sur les besoins des utilisateurs. Notre collaboration repose sur la créativité, la rigueur et l’envie constante d’apprendre.</p>
                    <p>Grâce à la diversité de nos profils et de nos expertises, nous concevons des projets complets allant du front-end au back-end. Chaque membre apporte sa spécialité, ce qui nous permet de transformer des idées en plateformes web fiables et élégantes.</p>
                    <p>Notre objectif est simple : offrir des expériences digitales qui allient innovation, design et efficacité. Ensemble, nous développons des solutions qui répondent aux défis réels, tout en respectant les bonnes pratiques et les standards du web moderne.</p>
                    <div class="skills">
                        <span class="skill-tag">UI/UX Design</span>
                        <span class="skill-tag">Brand Identity</span>
                        <span class="skill-tag">Développement front-end</span>
                        <span class="skill-tag">Développement back-end</span>
                        <span class="skill-tag">Laravel framework PHP</span>
                        <span class="skill-tag">Symfony framework PHP</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-title fade-in">Œuvre en vedette</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-image"></div>
                    <div class="portfolio-content">
                        <h4>Culture Bénin</h4>
                        <p>Une plateforme web conçue pour faire la promotion du Bénin et sa culture.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">HTML 5</span>
                            <span class="tech-tag">CSS 3</span>
                            <span class="tech-tag">JS</span>
                            <span class="tech-tag">Laravel PHP</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image"></div>
                    <div class="portfolio-content">
                        <h4>E-commerce Platform</h4>
                        <p>A modern, responsive e-commerce solution with focus on user experience and conversion optimization. Built with scalability and performance in mind.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">MongoDB</span>
                            <span class="tech-tag">Stripe</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image"></div>
                    <div class="portfolio-content">
                        <h4>Mobile App Design</h4>
                        <p>Intuitive mobile app interface for a fitness tracking application with focus on accessibility and user engagement through gamification.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">Figma</span>
                            <span class="tech-tag">Principle</span>
                            <span class="tech-tag">React Native</span>
                            <span class="tech-tag">Lottie</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image"></div>
                    <div class="portfolio-content">
                        <h4>Dashboard Interface</h4>
                        <p>Clean and functional Dashboard design for data analytics platform with complex information architecture and real-time data visualization.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">Vue.js</span>
                            <span class="tech-tag">D3.js</span>
                            <span class="tech-tag">SCSS</span>
                            <span class="tech-tag">Chart.js</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image"></div>
                    <div class="portfolio-content">
                        <h4>Marketing Website</h4>
                        <p>Modern marketing website with interactive animations and optimized conversion funnels. Built for maximum performance and SEO.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">Next.js</span>
                            <span class="tech-tag">Framer Motion</span>
                            <span class="tech-tag">Tailwind CSS</span>
                            <span class="tech-tag">Vercel</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image"></div>
                    <div class="portfolio-content">
                        <h4>Creative Portfolio</h4>
                        <p>Artistic portfolio website featuring immersive galleries, smooth transitions, and creative storytelling for a digital artist.</p>
                        <div class="portfolio-tech">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">Three.js</span>
                            <span class="tech-tag">GSAP</span>
                            <span class="tech-tag">WebGL</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="contact-floating-shapes">
            <div class="contact-shape contact-shape-1"></div>
            <div class="contact-shape contact-shape-2"></div>
            <div class="contact-shape contact-shape-3"></div>
            <div class="contact-shape contact-shape-4"></div>
            <div class="contact-shape contact-shape-5"></div>
            <div class="contact-shape contact-shape-6"></div>
        </div>
        <div class="container">
            <div class="contact-content">
                <h2 class="section-title fade-in">Travaillons ensemble</h2>
                <p class="fade-in">Prêt à donner vie à votre vision ? Parlons-en et créons ensemble quelque chose d'extraordinaire. Nous sommes toujours enthousiastes à l'idée de relever de nouveaux défis et de collaborer à des projets innovants.</p>
                <form class="contact-form fade-in">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" name="name" placeholder="Votre nom complet" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" placeholder="De quoi avez-vous besoin?" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" placeholder="Parlez nous de votre projet..." required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Envoyer un Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <p>&copy; 2025 ProjetGithub. Tous droits réservés.</p>
                </div>
                <div class="footer-right">
                    <a href="#privacy">Privacy Policy</a>
                    <a href="#terms">Terms of Use</a>
                    <a href="#sitemap">Sitemap</a>
                    <a href="https://templatemo.com" target="_blank" rel="noopener nofollow">Provided by TemplateMo</a>
                </div>
            </div>
        </div>
    </footer>



</body>
</html>