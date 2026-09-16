<?php include 'includes/header.php'; ?>

    <!-- ===== HERO ===== -->
    <section class="hero" aria-label="Bienvenue chez Baldonedo Bâtiment">
        <div class="hero-bg" role="img" aria-label="Chantier de construction"></div>
        <div class="container">
            <div class="hero-inner">
            <div class="hero-content">
                <p class="hero-eyebrow">Construction &amp; Rénovation – Orly, Île-de-France</p>
                <h1 class="hero-title">
                    Construisons<br>
                    <span>votre projet</span><br>
                    ensemble.
                </h1>
                <p class="hero-desc">
                    Baldonedo Bâtiment est votre partenaire de confiance pour tous vos travaux de construction et de rénovation en Île-de-France. Qualité, rigueur et respect des délais.
                </p>
                <div class="hero-actions">
                    <a href="pages/contact.php" class="btn btn--primary btn--lg">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                        Demander un devis gratuit
                    </a>
                    <a href="realisations.php" class="btn btn--outline">
                        Voir nos réalisations
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-number">15+</div>
                        <div class="hero-stat-label">Années d'expérience</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">200+</div>
                        <div class="hero-stat-label">Projets réalisés</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-number">100%</div>
                        <div class="hero-stat-label">Clients satisfaits</div>
                    </div>
                </div>
            </div>

            <!-- Hero video -->
            <div class="page-hero-img-wrap" style="position:relative;z-index:1;">
                <video class="page-hero-img" id="heroVideo"
                       autoplay muted playsinline preload="auto"
                       aria-label="Chantier de construction – Baldonedo Bâtiment">
                    <source src="assets/video/chantier.mp4" type="video/mp4">
                </video>
                <button class="hero-video-replay" id="heroReplay" aria-label="Revoir la vidéo" hidden>
                    <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" aria-hidden="true">
                        <polyline points="1 4 1 10 7 10"/>
                        <path d="M3.51 15a9 9 0 1 0 .49-4.63"/>
                    </svg>
                    <span>Revoir</span>
                </button>
            </div>

            </div><!-- /.hero-inner -->
        </div>
    </section>

    <!-- ===== SERVICES ===== -->
    <section class="section" id="services" aria-labelledby="services-title">
        <div class="container">
            <div class="section-header fade-in">
                <span class="section-eyebrow">Ce que nous faisons</span>
                <h2 class="section-title" id="services-title">Nos Services</h2>
                <div class="divider divider--center"></div>
                <p class="section-subtitle">
                    Rénovation, électricité, plomberie, revêtements de sol, plâtrerie et aménagement intérieur — des artisans qualifiés pour chaque corps de métier.
                </p>
            </div>

            <div class="services-grid">
                <!-- Rénovation -->
                <a href="pages/services.php#renovation" class="service-card fade-in" aria-labelledby="svc-home-renovation">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-home-renovation">Rénovation</h3>
                    <p class="service-desc">
                        Réhabilitation complète ou partielle de logements et locaux professionnels. Mise aux normes, isolation thermique et finitions soignées.
                    </p>
                    <span class="service-card-cta" aria-hidden="true">Voir le service →</span>
                </a>

                <!-- Peinture -->
                <a href="pages/services.php#peinture" class="service-card fade-in fade-in-delay-1" aria-labelledby="svc-home-peinture">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <rect x="2" y="2" width="14" height="7" rx="2"/>
                            <path d="M9 9v5"/>
                            <rect x="6" y="14" width="6" height="5" rx="1"/>
                            <path d="M18 6h2a2 2 0 012 2v8a2 2 0 01-2 2h-2"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-home-peinture">Peinture</h3>
                    <p class="service-desc">
                        Peinture intérieure et extérieure, ravalement de façade et finitions décoratives. Des surfaces soignées, durables et dans les tons de votre choix.
                    </p>
                    <span class="service-card-cta" aria-hidden="true">Voir le service →</span>
                </a>

                <!-- Isolation extérieure -->
                <a href="pages/services.php#isolation" class="service-card fade-in fade-in-delay-2" aria-labelledby="svc-home-isolation">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                            <path d="M5 12c1.5-1.5 3-1.5 4.5 0s3 1.5 4.5 0 3-1.5 4.5 0" stroke-linecap="round"/>
                            <path d="M5 16c1.5-1.5 3-1.5 4.5 0s3 1.5 4.5 0 3-1.5 4.5 0" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-home-isolation">Isolation extérieure</h3>
                    <p class="service-desc">
                        Isolation thermique par l'extérieur (ITE) avec enduit ou bardage. Réduisez vos factures d'énergie et améliorez votre DPE.
                    </p>
                    <span class="service-card-cta" aria-hidden="true">Voir le service →</span>
                </a>

                <!-- Électricité -->
                <a href="pages/services.php#electricite" class="service-card fade-in fade-in-delay-1" aria-labelledby="svc-home-electricite">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-home-electricite">Électricité</h3>
                    <p class="service-desc">
                        Installations électriques neuves et rénovées, conformes NF C 15-100. Tableau, câblage, éclairage, domotique et mise aux normes.
                    </p>
                    <span class="service-card-cta" aria-hidden="true">Voir le service →</span>
                </a>

                <!-- Plomberie -->
                <a href="pages/services.php#plomberie" class="service-card fade-in fade-in-delay-2" aria-labelledby="svc-home-plomberie">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <path d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-home-plomberie">Plomberie</h3>
                    <p class="service-desc">
                        Pose de sanitaires, réseaux d'alimentation et d'évacuation. Chauffe-eau, chaudière, pompe à chaleur et détection de fuites.
                    </p>
                    <span class="service-card-cta" aria-hidden="true">Voir le service →</span>
                </a>

                <!-- Revêtements de sol -->
                <a href="pages/services.php#revetements" class="service-card fade-in" aria-labelledby="svc-home-revetements">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <rect x="3" y="3" width="7" height="7" rx="1"/>
                            <rect x="14" y="3" width="7" height="7" rx="1"/>
                            <rect x="3" y="14" width="7" height="7" rx="1"/>
                            <rect x="14" y="14" width="7" height="7" rx="1"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-home-revetements">Revêtements de sol</h3>
                    <p class="service-desc">
                        Carrelage, parquet, vinyle et béton ciré. Préparation des supports et pose soignée, en neuf comme en rénovation.
                    </p>
                    <span class="service-card-cta" aria-hidden="true">Voir le service →</span>
                </a>

                <!-- Plâtrerie -->
                <a href="pages/services.php#platrerie" class="service-card fade-in fade-in-delay-1" aria-labelledby="svc-home-platrerie">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <line x1="2" y1="10" x2="22" y2="10"/>
                            <line x1="12" y1="3" x2="12" y2="17"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-home-platrerie">Plâtrerie</h3>
                    <p class="service-desc">
                        Cloisons, doublages, plafonds suspendus et enduits. La base indispensable de toute finition intérieure réussie.
                    </p>
                    <span class="service-card-cta" aria-hidden="true">Voir le service →</span>
                </a>

                <!-- Aménagement intérieur -->
                <a href="pages/services.php#amenagement" class="service-card fade-in fade-in-delay-2" aria-labelledby="svc-home-amenagement">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-home-amenagement">Aménagement intérieur</h3>
                    <p class="service-desc">
                        Cuisine, salle de bain, dressing et menuiseries sur mesure. Des espaces pensés pour allier fonctionnalité et esthétique.
                    </p>
                    <span class="service-card-cta" aria-hidden="true">Voir le service →</span>
                </a>
                <!-- Traitement coupe-feu -->
                <a href="pages/services.php#coupefeu" class="service-card fade-in" aria-labelledby="svc-home-coupefeu">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-home-coupefeu">Traitement coupe-feu</h3>
                    <p class="service-desc">
                        Calfeutrement de traversées, joints et cloisons coupe-feu certifiés. Mise en conformité avec les réglementations incendie ERP et IGH.
                    </p>
                    <span class="service-card-cta" aria-hidden="true">Voir le service →</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="section section--alt" id="pourquoi-nous" aria-labelledby="why-title">
        <div class="container">
            <div class="why-grid">
                <div class="why-image-wrap fade-in">
                    <div class="why-image-placeholder" role="img" aria-label="Équipe Baldonedo Bâtiment sur chantier">
                        <!-- <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity="0.4">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg> -->
                        <img src="assets/images/chantier.png" alt="Chantier réalisé par Baldonedo Bâtiment" loading="lazy">
                        <span style="font-family: var(--font-heading); font-size: 0.75rem; letter-spacing: 0.1em; opacity: 0.5;">Rénovation salle de bain avant/après</span>
                    </div>
                    <div class="why-badge">
                        <div class="why-badge-number">15+</div>
                        <div class="why-badge-label">ans d'expérience</div>
                    </div>
                </div>

                <div>
                    <div class="fade-in">
                        <span class="section-eyebrow">Pourquoi nous choisir</span>
                        <h2 class="section-title" id="why-title">L'Excellence au Service de Votre Projet</h2>
                        <div class="divider"></div>
                        <p style="color: var(--clr-mid); margin-bottom: var(--sp-8); line-height: 1.7;">
                            Depuis plus de 15 ans, Baldonedo Bâtiment accompagne particuliers et professionnels dans leurs projets de construction et rénovation en Île-de-France. Notre engagement : un travail soigné, des délais respectés, et une communication transparente.
                        </p>
                    </div>

                    <div class="why-features">
                        <div class="why-feature fade-in">
                            <div class="why-feature-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            </div>
                            <div>
                                <h3 class="why-feature-title">Qualité garantie</h3>
                                <p class="why-feature-desc">Nous utilisons exclusivement des matériaux certifiés et des techniques conformes aux normes en vigueur (DTU, RT 2020).</p>
                            </div>
                        </div>

                        <div class="why-feature fade-in fade-in-delay-1">
                            <div class="why-feature-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div>
                                <h3 class="why-feature-title">Délais respectés</h3>
                                <p class="why-feature-desc">Un planning précis établi dès le départ, avec des points d'avancement réguliers pour vous tenir informé à chaque étape.</p>
                            </div>
                        </div>

                        <div class="why-feature fade-in fade-in-delay-2">
                            <div class="why-feature-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                            </div>
                            <div>
                                <h3 class="why-feature-title">Devis transparent</h3>
                                <p class="why-feature-desc">Un devis détaillé et gratuit, sans mauvaise surprise. Chaque poste de dépense est clairement expliqué et justifié.</p>
                            </div>
                        </div>

                        <div class="why-feature fade-in fade-in-delay-3">
                            <div class="why-feature-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                            </div>
                            <div>
                                <h3 class="why-feature-title">Équipe qualifiée</h3>
                                <p class="why-feature-desc">Des artisans expérimentés, assurés et formés en continu sur les nouvelles techniques et réglementations du bâtiment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="cta-banner" aria-labelledby="cta-title">
        <div class="container">
            <div class="cta-inner fade-in">
                <div class="cta-text">
                    <h2 class="cta-title" id="cta-title">Un projet ? Parlons-en !</h2>
                    <p class="cta-subtitle">Devis gratuit sous 48h – Intervention rapide sur tout le Val-de-Marne et l'Île-de-France</p>
                </div>
                <div class="cta-actions">
                    <a href="pages/contact.php" class="btn btn--outline btn--lg">Demander un devis</a>
                    <a href="tel:+330148531061" class="btn btn--outline btn--lg">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        01 48 53 10 61
                    </a>
                </div>
            </div>
        </div>
    </section>

<style>
/* ── Hero video replay button ── */
.hero-video-replay {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    background: rgba(26,35,50,0.28);
    border: none;
    cursor: pointer;
    color: #fff;
    z-index: 10;
}
.hero-video-replay:hover {
    background: rgba(26,35,50,0.38);
}
.hero-video-replay svg {
    filter: drop-shadow(0 2px 10px rgba(0,0,0,0.5));
}
.hero-video-replay:hover svg {
    transform: rotate(-20deg) scale(1.1);
}
.hero-video-replay[hidden] { display: none; }
.hero-video-replay span {
    font-family: var(--font-heading);
    font-size: 0.875rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    text-shadow: 0 1px 4px rgba(0,0,0,0.5);
}
</style>

<script>
(function () {
    const video  = document.getElementById('heroVideo');
    const replay = document.getElementById('heroReplay');
    if (!video || !replay) return;

    video.addEventListener('ended', () => {
        replay.hidden = false;
    });

    replay.addEventListener('click', () => {
        replay.hidden = true;
        video.currentTime = 0;
        video.play();
    });
})();
</script>

<?php include 'includes/footer.php'; ?>
