    </main><!-- /#main-content -->

    <footer class="site-footer" role="contentinfo">
        <div class="container footer-grid">

            <div class="footer-col footer-brand">
                <a href="<?= (str_contains($_SERVER['PHP_SELF'], '/pages/') || basename($_SERVER['PHP_SELF'], '.php') === 'realisations') ? '../' : '' ?>index.php" class="logo logo--footer" aria-label="Baldonedo Bâtiment – Accueil">
                    <svg width="30" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <polygon points="18,3 33,30 3,30" fill="#5aaec0" opacity="0.9"/>
                        <rect x="13" y="20" width="10" height="10" fill="#3d90a1"/>
                        <rect x="15" y="22" width="3" height="4" fill="white" opacity="0.6"/>
                        <rect x="19" y="22" width="3" height="4" fill="white" opacity="0.6"/>
                    </svg>
                    <span class="logo-text">
                        <span class="logo-name">Baldonedo</span>
                        <span class="logo-sub">Bâtiment</span>
                    </span>
                </a>
                <p class="footer-tagline">Votre expert en construction et rénovation en Île-de-France depuis des années.</p>
            </div>

            <div class="footer-col">
                <h3 class="footer-heading">Navigation</h3>
                <ul class="footer-links">
                    <li><a href="<?= (str_contains($_SERVER['PHP_SELF'], '/pages/') || basename($_SERVER['PHP_SELF'], '.php') === 'realisations') ? '../' : '' ?>index.php">Accueil</a></li>
                    <li><a href="<?= (str_contains($_SERVER['PHP_SELF'], '/pages/') || basename($_SERVER['PHP_SELF'], '.php') === 'realisations') ? '../' : '' ?>realisations.php">Réalisations</a></li>
                    <li><a href="<?= (str_contains($_SERVER['PHP_SELF'], '/pages/') || basename($_SERVER['PHP_SELF'], '.php') === 'realisations') ? '../' : '' ?>pages/contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="footer-heading">Nos Services</h3>
                <ul class="footer-links">
                    <li>Construction neuve</li>
                    <li>Rénovation complète</li>
                    <li>Travaux d'extension</li>
                    <li>Aménagement intérieur</li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="footer-heading">Contact</h3>
                <address class="footer-contact">
                    <p>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        61 Av. de la Victoire<br>94310 Orly, France
                    </p>
                    <p>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        <a href="tel:+330148531061">+33 01 48 53 10 61</a>
                    </p>
                    <p>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <a href="mailto:contact@baldonedo.com">contact@baldonedo.com</a>
                    </p>
                </address>
            </div>

        </div>
        <div class="footer-bottom">
            <div class="container footer-bottom-inner">
                <p>&copy; <?= date('Y') ?> Baldonedo Bâtiment. Tous droits réservés.</p>
                <p class="footer-legal">Entreprise de construction – Orly, Île-de-France</p>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top" id="backToTop" aria-label="Retour en haut de page">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="18 15 12 9 6 15"/></svg>
    </a>

    <script src="<?= (str_contains($_SERVER['PHP_SELF'], '/pages/') || basename($_SERVER['PHP_SELF'], '.php') === 'realisations') ? '../' : '' ?>assets/js/main.js"></script>
</body>
</html>
