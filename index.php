<?php include 'includes/header.php'; ?>

    <!-- ===== HERO ===== -->
    <section class="hero" aria-label="Bienvenue chez Baldonedo Bâtiment">
        <div class="hero-bg" role="img" aria-label="Chantier de construction"></div>
        <div class="container">
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
                    De la construction neuve à la rénovation complète, nous prenons en charge chaque étape de votre projet avec expertise et professionnalisme.
                </p>
            </div>

            <div class="services-grid">
                <!-- Construction -->
                <article class="service-card fade-in" aria-labelledby="svc-construction">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <rect x="2" y="7" width="20" height="14" rx="1"/>
                            <path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/>
                            <line x1="12" y1="12" x2="12" y2="16"/>
                            <line x1="10" y1="14" x2="14" y2="14"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-construction">Construction Neuve</h3>
                    <p class="service-desc">
                        Réalisation de maisons individuelles, immeubles et bâtiments commerciaux. Nous gérons votre projet du terrassement à la livraison clés en main.
                    </p>
                </article>

                <!-- Rénovation -->
                <article class="service-card fade-in fade-in-delay-1" aria-labelledby="svc-renovation">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-renovation">Rénovation Complète</h3>
                    <p class="service-desc">
                        Transformation et réhabilitation de logements, locaux professionnels et espaces commerciaux. Modernisation, mise aux normes et optimisation des espaces.
                    </p>
                </article>

                <!-- Extension -->
                <article class="service-card fade-in fade-in-delay-2" aria-labelledby="svc-extension">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <polyline points="15 3 21 3 21 9"/>
                            <polyline points="9 21 3 21 3 15"/>
                            <line x1="21" y1="3" x2="14" y2="10"/>
                            <line x1="3" y1="21" x2="10" y2="14"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-extension">Extension &amp; Agrandissement</h3>
                    <p class="service-desc">
                        Surélévation, extension latérale ou aménagement de combles. Augmentez la surface habitable de votre bien tout en respectant les contraintes architecturales.
                    </p>
                </article>

                <!-- Aménagement intérieur -->
                <article class="service-card fade-in" aria-labelledby="svc-amenagement">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-amenagement">Aménagement Intérieur</h3>
                    <p class="service-desc">
                        Cloisons, plâtrerie, carrelage, peinture et menuiseries intérieures. Nous transformons vos espaces intérieurs selon vos envies et votre budget.
                    </p>
                </article>

                <!-- Gros œuvre -->
                <article class="service-card fade-in fade-in-delay-1" aria-labelledby="svc-grosoeuvre">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <rect x="2" y="3" width="6" height="4" rx="1"/>
                            <rect x="9" y="3" width="6" height="4" rx="1"/>
                            <rect x="16" y="3" width="6" height="4" rx="1"/>
                            <rect x="2" y="10" width="6" height="4" rx="1"/>
                            <rect x="9" y="10" width="6" height="4" rx="1"/>
                            <rect x="16" y="10" width="6" height="4" rx="1"/>
                            <rect x="2" y="17" width="6" height="4" rx="1"/>
                            <rect x="9" y="17" width="6" height="4" rx="1"/>
                            <rect x="16" y="17" width="6" height="4" rx="1"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-grosoeuvre">Gros Œuvre</h3>
                    <p class="service-desc">
                        Fondations, maçonnerie, dalle béton, charpente et toiture. Nos équipes qualifiées assurent la solidité et la pérennité de vos ouvrages.
                    </p>
                </article>

                <!-- Suivi de chantier -->
                <article class="service-card fade-in fade-in-delay-2" aria-labelledby="svc-suivi">
                    <div class="service-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75">
                            <path d="M9 11l3 3L22 4"/>
                            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                        </svg>
                    </div>
                    <h3 class="service-title" id="svc-suivi">Suivi &amp; Coordination</h3>
                    <p class="service-desc">
                        Un interlocuteur unique pour piloter l'ensemble des corps de métier. Transparence totale sur l'avancement du chantier et respect strict du planning.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="section section--alt" id="pourquoi-nous" aria-labelledby="why-title">
        <div class="container">
            <div class="why-grid">
                <div class="why-image-wrap fade-in">
                    <div class="why-image-placeholder" role="img" aria-label="Équipe Baldonedo Bâtiment sur chantier">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity="0.4">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                        <span style="font-family: var(--font-heading); font-size: 0.75rem; letter-spacing: 0.1em; opacity: 0.5;">Photo chantier</span>
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

<?php include 'includes/footer.php'; ?>
