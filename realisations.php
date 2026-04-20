<?php include 'includes/header.php'; ?>

    <!-- ===== PAGE HERO ===== -->
    <section class="page-hero" aria-labelledby="real-hero-title">
        <div class="container page-hero-content">
            <nav class="breadcrumb" aria-label="Fil d'ariane">
                <a href="index.php">Accueil</a>
                <span class="breadcrumb-sep" aria-hidden="true">›</span>
                <span aria-current="page">Réalisations</span>
            </nav>
            <p class="page-hero-eyebrow">Portfolio</p>
            <h1 class="page-hero-title" id="real-hero-title">Nos Réalisations</h1>
            <p class="page-hero-subtitle">
                Découvrez une sélection de nos chantiers en Île-de-France : constructions neuves, rénovations complètes et aménagements intérieurs.
            </p>
        </div>
    </section>

    <!-- ===== GALLERY ===== -->
    <section class="section section--alt" aria-labelledby="gallery-title">
        <div class="container">
            <div class="section-header fade-in">
                <span class="section-eyebrow">Nos travaux</span>
                <h2 class="section-title" id="gallery-title">Construction &amp; Rénovation</h2>
                <div class="divider divider--center"></div>
                <p class="section-subtitle">
                    Chaque projet est unique. Voici quelques exemples représentatifs de notre savoir-faire.
                </p>
            </div>

            <!-- Filter tags -->
            <div class="gallery-filters fade-in" style="display:flex; flex-wrap:wrap; gap: var(--sp-3); justify-content:center; margin-bottom: var(--sp-10);">
                <button class="tag gallery-filter gallery-filter--active" data-filter="all">Tous les projets</button>
                <button class="tag gallery-filter" data-filter="construction">Construction</button>
                <button class="tag gallery-filter" data-filter="renovation">Rénovation</button>
                <button class="tag gallery-filter" data-filter="extension">Extension</button>
            </div>

            <div class="gallery-grid" id="galleryGrid">

                <article class="gallery-item gallery-item--wide fade-in" data-category="construction" aria-label="Villa Orly – Construction neuve">
                    <div class="gallery-placeholder" role="img" aria-label="Maison individuelle construite à Orly">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity="0.35"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Photo du projet</span>
                    </div>
                    <div class="gallery-overlay">
                        <div>
                            <p class="gallery-overlay-title">Villa Orly – Construction neuve</p>
                            <p class="gallery-overlay-sub">Construction · 2023 · Orly (94)</p>
                        </div>
                    </div>
                </article>

                <article class="gallery-item fade-in fade-in-delay-1" data-category="renovation" aria-label="Appartement Vitry – Rénovation complète">
                    <div class="gallery-placeholder" role="img" aria-label="Appartement rénové à Vitry-sur-Seine">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity="0.35"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg>
                        <span>Photo du projet</span>
                    </div>
                    <div class="gallery-overlay">
                        <div>
                            <p class="gallery-overlay-title">Appartement T4 – Rénovation</p>
                            <p class="gallery-overlay-sub">Rénovation · 2023 · Vitry-sur-Seine (94)</p>
                        </div>
                    </div>
                </article>

                <article class="gallery-item fade-in fade-in-delay-2" data-category="extension" aria-label="Extension Maison Thiais">
                    <div class="gallery-placeholder" role="img" aria-label="Extension d'une maison à Thiais">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity="0.35"><polyline points="15 3 21 3 21 9"/><polyline points="9 21 3 21 3 15"/><line x1="21" y1="3" x2="14" y2="10"/><line x1="3" y1="21" x2="10" y2="14"/></svg>
                        <span>Photo du projet</span>
                    </div>
                    <div class="gallery-overlay">
                        <div>
                            <p class="gallery-overlay-title">Maison – Extension 45 m²</p>
                            <p class="gallery-overlay-sub">Extension · 2022 · Thiais (94)</p>
                        </div>
                    </div>
                </article>

                <article class="gallery-item fade-in" data-category="renovation" aria-label="Commerce Alfortville – Aménagement">
                    <div class="gallery-placeholder" role="img" aria-label="Local commercial aménagé à Alfortville">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity="0.35"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                        <span>Photo du projet</span>
                    </div>
                    <div class="gallery-overlay">
                        <div>
                            <p class="gallery-overlay-title">Local commercial – Aménagement</p>
                            <p class="gallery-overlay-sub">Rénovation · 2022 · Alfortville (94)</p>
                        </div>
                    </div>
                </article>

                <article class="gallery-item gallery-item--wide fade-in fade-in-delay-1" data-category="construction" aria-label="Immeuble Choisy – Construction R+3">
                    <div class="gallery-placeholder" role="img" aria-label="Immeuble R+3 à Choisy-le-Roi">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity="0.35"><rect x="2" y="7" width="20" height="14" rx="1"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
                        <span>Photo du projet</span>
                    </div>
                    <div class="gallery-overlay">
                        <div>
                            <p class="gallery-overlay-title">Immeuble R+3 – Construction neuve</p>
                            <p class="gallery-overlay-sub">Construction · 2021 · Choisy-le-Roi (94)</p>
                        </div>
                    </div>
                </article>

                <article class="gallery-item fade-in fade-in-delay-2" data-category="renovation" aria-label="Maison Villeneuve – Rénovation façade">
                    <div class="gallery-placeholder" role="img" aria-label="Rénovation de façade à Villeneuve-le-Roi">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" opacity="0.35"><rect x="2" y="3" width="6" height="4" rx="1"/><rect x="9" y="3" width="6" height="4" rx="1"/><rect x="16" y="3" width="6" height="4" rx="1"/><rect x="2" y="10" width="6" height="4" rx="1"/><rect x="9" y="10" width="6" height="4" rx="1"/><rect x="16" y="10" width="6" height="4" rx="1"/></svg>
                        <span>Photo du projet</span>
                    </div>
                    <div class="gallery-overlay">
                        <div>
                            <p class="gallery-overlay-title">Maison – Rénovation façade &amp; toiture</p>
                            <p class="gallery-overlay-sub">Rénovation · 2021 · Villeneuve-le-Roi (94)</p>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="section" aria-labelledby="temoignages-title">
        <div class="container">
            <div class="section-header fade-in">
                <span class="section-eyebrow">Ce que disent nos clients</span>
                <h2 class="section-title" id="temoignages-title">Témoignages</h2>
                <div class="divider divider--center"></div>
                <p class="section-subtitle">La satisfaction de nos clients est notre meilleure récompense.</p>
            </div>

            <div class="testimonials-grid">

                <article class="testimonial-card fade-in">
                    <div class="testimonial-quote" aria-hidden="true">"</div>
                    <div class="testimonial-stars" aria-label="5 étoiles sur 5">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <?php endfor; ?>
                    </div>
                    <p class="testimonial-text">
                        "Travaux de rénovation complète de mon appartement réalisés dans les délais prévus. Équipe sérieuse, propre et à l'écoute. Je recommande vivement Baldonedo Bâtiment !"
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" aria-hidden="true">ML</div>
                        <div>
                            <p class="testimonial-name">Marie-Laure D.</p>
                            <p class="testimonial-role">Propriétaire – Orly (94)</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card fade-in fade-in-delay-1">
                    <div class="testimonial-quote" aria-hidden="true">"</div>
                    <div class="testimonial-stars" aria-label="5 étoiles sur 5">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <?php endfor; ?>
                    </div>
                    <p class="testimonial-text">
                        "Construction de notre maison individuelle gérée de A à Z. Un seul interlocuteur, un suivi rigoureux. Le résultat dépasse nos attentes. Merci à toute l'équipe !"
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" aria-hidden="true">PB</div>
                        <div>
                            <p class="testimonial-name">Pierre &amp; Sophie B.</p>
                            <p class="testimonial-role">Particuliers – Thiais (94)</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card fade-in fade-in-delay-2">
                    <div class="testimonial-quote" aria-hidden="true">"</div>
                    <div class="testimonial-stars" aria-label="5 étoiles sur 5">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <?php endfor; ?>
                    </div>
                    <p class="testimonial-text">
                        "Extension de 40 m² réalisée avec soin. Respect total du devis, travail soigné et équipe ponctuelle. Je n'hésiterai pas à faire appel à eux pour mes prochains projets."
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" aria-hidden="true">JC</div>
                        <div>
                            <p class="testimonial-name">Jean-Christophe M.</p>
                            <p class="testimonial-role">Propriétaire – Choisy-le-Roi (94)</p>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="cta-banner" aria-labelledby="cta-real-title">
        <div class="container">
            <div class="cta-inner fade-in">
                <div class="cta-text">
                    <h2 class="cta-title" id="cta-real-title">Votre projet sera notre prochaine réalisation</h2>
                    <p class="cta-subtitle">Contactez-nous pour un devis gratuit et personnalisé</p>
                </div>
                <div class="cta-actions">
                    <a href="pages/contact.php" class="btn btn--outline btn--lg">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>

<style>
/* Gallery filter styles */
.gallery-filter {
    cursor: pointer;
    border: 1.5px solid var(--clr-border);
    background: var(--clr-white);
    color: var(--clr-mid);
    font-size: 0.875rem;
    padding: 0.4em 1.1em;
    border-radius: 100px;
    transition: background var(--transition), color var(--transition), border-color var(--transition);
}
.gallery-filter:hover,
.gallery-filter--active {
    background: var(--clr-primary);
    color: var(--clr-white);
    border-color: var(--clr-primary);
}

.gallery-item[data-hidden] {
    display: none;
}
</style>

<script>
// Gallery filter
(function() {
    const filters = document.querySelectorAll('.gallery-filter');
    const items   = document.querySelectorAll('.gallery-item[data-category]');
    if (!filters.length) return;

    filters.forEach(btn => {
        btn.addEventListener('click', () => {
            filters.forEach(b => b.classList.remove('gallery-filter--active'));
            btn.classList.add('gallery-filter--active');

            const selected = btn.dataset.filter;
            items.forEach(item => {
                if (selected === 'all' || item.dataset.category === selected) {
                    delete item.dataset.hidden;
                } else {
                    item.dataset.hidden = '';
                }
            });
        });
    });
})();
</script>

<?php include 'includes/footer.php'; ?>
