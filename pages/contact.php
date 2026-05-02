<?php include '../includes/header.php'; ?>

    <!-- ===== PAGE HERO ===== -->
    <section class="page-hero" aria-labelledby="contact-hero-title">
        <div class="container page-hero-content">
            <nav class="breadcrumb" aria-label="Fil d'ariane">
                <a href="../index.php">Accueil</a>
                <span class="breadcrumb-sep" aria-hidden="true">›</span>
                <span aria-current="page">Contact</span>
            </nav>
            <p class="page-hero-eyebrow">Parlons de votre projet</p>
            <h1 class="page-hero-title" id="contact-hero-title">Contactez-Nous</h1>
            <p class="page-hero-subtitle">
                Vous avez un projet de construction ou de rénovation ? Notre équipe vous répond sous 48h et vous propose un devis gratuit et sans engagement.
            </p>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section class="section section--alt" aria-labelledby="contact-form-title">
        <div class="container">
            <div class="contact-layout">

                <!-- ── Info Panel ── -->
                <aside class="contact-info-card fade-in" aria-label="Coordonnées de l'entreprise">
                    <h2 class="contact-info-title">Nos Coordonnées</h2>
                    <p class="contact-info-desc">
                        N'hésitez pas à nous appeler directement ou à utiliser le formulaire ci-contre. Nous intervenons sur tout le Val-de-Marne et l'Île-de-France.
                    </p>

                    <div class="contact-info-items">
                        <div class="contact-info-item">
                            <div class="contact-info-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div>
                                <p class="contact-info-label">Adresse</p>
                                <address class="contact-info-value">
                                    61 Av. de la Victoire<br>
                                    94310 Orly, France
                                </address>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="contact-info-label">Téléphone</p>
                                <p class="contact-info-value">
                                    <a href="tel:+330148531061">+33 01 48 53 10 61</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <div>
                                <p class="contact-info-label">E-mail</p>
                                <p class="contact-info-value">
                                    <a href="mailto:contact@baldonedo.com">contact@baldonedo.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon" aria-hidden="true">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                            </div>
                            <div>
                                <p class="contact-info-label">Horaires</p>
                                <p class="contact-info-value">Lun – Ven : 8h00 – 18h00<br>Sam : 9h00 – 13h00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Google Maps embed placeholder -->
                    <div class="map-embed">
                        <iframe
                            title="Localisation Baldonedo Bâtiment"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d168296.54026130863!2d2.33737!3d48.769796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e675cb4c6c1f3b%3A0x63457bf6e2c4c2d5!2sEntreprise%20Baldonedo!5e0!3m2!1sfr!2sfr!4v1776693030094!5m2!1sfr!2sfr"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Localisation de Baldonedo Bâtiment – 61 Av. de la Victoire, 94310 Orly">
                        </iframe>
                    </div>
                </aside>

                <!-- ── Contact Form ── -->
                <div class="contact-form-card fade-in fade-in-delay-1">
                    <h2 class="contact-form-title" id="contact-form-title">Envoyez-nous un message</h2>
                    <p class="contact-form-subtitle">Décrivez votre projet et nous vous recontacterons dans les meilleurs délais.</p>

                    <form id="contactForm" novalidate aria-label="Formulaire de contact">

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="nom">
                                    Nom complet <span class="required" aria-hidden="true">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="nom"
                                    name="nom"
                                    class="form-input"
                                    placeholder="Jean Dupont"
                                    autocomplete="name"
                                    data-required
                                    aria-required="true"
                                    aria-describedby="nomError">
                                <span class="form-error" id="nomError" role="alert"></span>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">
                                    Adresse e-mail <span class="required" aria-hidden="true">*</span>
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-input"
                                    placeholder="jean@exemple.fr"
                                    autocomplete="email"
                                    data-required
                                    aria-required="true"
                                    aria-describedby="emailError">
                                <span class="form-error" id="emailError" role="alert"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="telephone">Téléphone</label>
                            <input
                                type="tel"
                                id="telephone"
                                name="telephone"
                                class="form-input"
                                placeholder="06 00 00 00 00"
                                autocomplete="tel">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="sujet">Type de projet</label>
                            <select id="sujet" name="sujet" class="form-input">
                                <option value="" disabled selected>Choisissez un type de projet...</option>
                                <option value="construction">Construction neuve</option>
                                <option value="renovation">Rénovation</option>
                                <option value="extension">Extension / Agrandissement</option>
                                <option value="amenagement">Aménagement intérieur</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">
                                Votre message <span class="required" aria-hidden="true">*</span>
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                class="form-textarea"
                                rows="6"
                                placeholder="Décrivez votre projet : surface, localisation, délai souhaité..."
                                data-required
                                aria-required="true"
                                aria-describedby="messageError"></textarea>
                            <span class="form-error" id="messageError" role="alert"></span>
                        </div>

                        <button type="submit" class="btn btn--primary btn--lg form-submit" aria-label="Envoyer le message">
                            <span class="btn-text">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                Envoyer le message
                            </span>
                            <span class="btn-spinner" aria-hidden="true"></span>
                        </button>

                        <div class="form-alert form-alert--success" id="formSuccess" role="alert">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span>Votre message a bien été envoyé. Nous vous répondrons sous 48h. Merci !</span>
                        </div>

                        <div class="form-alert form-alert--error" id="formError" role="alert">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            <span class="alert-msg">Une erreur est survenue. Veuillez réessayer.</span>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>
