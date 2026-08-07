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

                <article class="gallery-item gallery-item--wide gallery-item--slideshow fade-in" data-category="construction" aria-label="Villa Orly – Construction neuve">
                    <div class="abri-slideshow" role="region" aria-label="Diaporama – Maison individuelle construite à Orly (12 photos)">
                        <div class="abri-track">
                            <img src="assets/images/abri/abri01.jpeg" alt="Villa Orly – photo 1 sur 12"  class="abri-slide" loading="eager">
                            <img src="assets/images/abri/abri02.jpeg" alt="Villa Orly – photo 2 sur 12"  class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri03.jpeg" alt="Villa Orly – photo 3 sur 12"  class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri04.jpeg" alt="Villa Orly – photo 4 sur 12"  class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri05.jpeg" alt="Villa Orly – photo 5 sur 12"  class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri06.jpeg" alt="Villa Orly – photo 6 sur 12"  class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri07.jpeg" alt="Villa Orly – photo 7 sur 12"  class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri08.jpeg" alt="Villa Orly – photo 8 sur 12"  class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri09.jpeg" alt="Villa Orly – photo 9 sur 12"  class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri10.jpeg" alt="Villa Orly – photo 10 sur 12" class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri12.jpeg" alt="Villa Orly – photo 11 sur 12" class="abri-slide" loading="lazy">
                            <img src="assets/images/abri/abri13.jpeg" alt="Villa Orly – photo 12 sur 12" class="abri-slide" loading="lazy">
                        </div>
                        <button class="abri-btn abri-prev" aria-label="Image précédente">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
                        </button>
                        <button class="abri-btn abri-next" aria-label="Image suivante">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="9 18 15 12 9 6"/></svg>
                        </button>
                        <div class="abri-counter" aria-live="polite" aria-atomic="true">1 / 12</div>
                    </div>
                    <div class="gallery-overlay">
                        <div>
                            <p class="gallery-overlay-title">Villa Orly – Construction neuve</p>
                            <p class="gallery-overlay-sub">Construction · 2023 · Orly (94)</p>
                        </div>
                    </div>
                </article>

                <article class="gallery-item gallery-item--fill fade-in fade-in-delay-1" data-category="renovation" aria-label="Abri de jardin transformé – Vitry-sur-Seine">
                    <div class="gallery-text-card">
                        <p class="gallery-text-eyebrow">Réalisation · 2022 · Vitry-sur-Seine (94)</p>
                        <h3 class="gallery-text-title">D'un abri de jardin à une pièce de vie indépendante</h3>
                        <div class="gallery-text-divider" aria-hidden="true"></div>
                        <p class="gallery-text-body">
                            Nichée au fond d'un jardin privatif à Vitry-sur-Seine, cette ancienne structure en bois de 18&nbsp;m² a été entièrement repensée et reconvertie en pièce de vie autonome, indépendante de l'habitation principale.
                        </p>
                        <p class="gallery-text-body">
                            Les travaux ont inclus la réfection de la charpente et de la couverture, la pose d'une isolation thermique et acoustique performante, la création d'un réseau électrique propre, ainsi que l'installation de menuiseries double vitrage. Les finitions intérieures — peinture, sol stratifié et luminaires encastrés — ont transformé cet abri en un espace lumineux, confortable et polyvalent.
                        </p>
                        <ul class="gallery-text-tags" aria-label="Prestations réalisées">
                            <li>Rénovation</li>
                            <li>Électricité</li>
                            <li>Isolation</li>
                            <li>Menuiseries</li>
                            <li>Peinture</li>
                            <li>Revêtements de sol</li>
                        </ul>
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

/* ── Abri slideshow ── */
.abri-slideshow {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: var(--clr-dark);
}
.abri-track {
    display: flex;
    height: 100%;
    transition: transform 0.45s cubic-bezier(.4,0,.2,1);
    will-change: transform;
}
.abri-slide {
    flex: 0 0 100%;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    user-select: none;
    -webkit-user-drag: none;
}
.abri-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 36px;
    height: 36px;
    background: rgba(26,35,50,0.6);
    color: #fff;
    border: none;
    border-radius: var(--radius-sm);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 20;
    transition: background var(--transition);
    padding: 0;
}
.abri-btn:hover { background: rgba(26,35,50,0.92); }
.abri-prev { left: 10px; }
.abri-next { right: 10px; }
.abri-counter {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(26,35,50,0.6);
    color: rgba(255,255,255,0.9);
    font-family: var(--font-heading);
    font-size: 0.75rem;
    letter-spacing: 0.06em;
    padding: 3px 12px;
    border-radius: 100px;
    z-index: 20;
    pointer-events: none;
    white-space: nowrap;
}
/* Overlay stays visible but can't block slideshow button clicks */
.gallery-item--slideshow .gallery-overlay {
    pointer-events: none;
}

/* ── Gallery text card ── */
.gallery-item.gallery-item--fill {
    aspect-ratio: auto;
}
.gallery-text-card {
    position: absolute;
    inset: 0;
    background: var(--clr-dark);
    padding: clamp(1.5rem, 4vw, 2.5rem);
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    overflow: hidden;
}
.gallery-text-eyebrow {
    font-family: var(--font-heading);
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--clr-primary-light);
    margin: 0 0 var(--sp-4);
}
.gallery-text-title {
    font-family: var(--font-heading);
    font-size: clamp(1.1rem, 2.2vw, 1.5rem);
    font-weight: 700;
    color: var(--clr-white);
    line-height: 1.2;
    margin: 0 0 var(--sp-3);
}
.gallery-text-divider {
    width: 36px;
    height: 2px;
    background: var(--clr-primary);
    border: none;
    margin: 0 0 var(--sp-4);
    flex-shrink: 0;
}
.gallery-text-body {
    font-size: 0.875rem;
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.75;
    margin: 0 0 var(--sp-3);
}
.gallery-text-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    list-style: none;
    padding: 0;
    margin: auto 0 0;
}
.gallery-text-tags li {
    font-family: var(--font-heading);
    font-size: 0.55rem;
    font-weight: 600;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: var(--clr-primary-light);
    background: rgba(90, 174, 192, 0.10);
    padding: 3px 8px;
    border-radius: 100px;
    border: 1px solid rgba(90, 174, 192, 0.22);
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

// Abri slideshow
(function initAbriSlideshow() {
    const slideshow = document.querySelector('.abri-slideshow');
    if (!slideshow) return;

    const track   = slideshow.querySelector('.abri-track');
    const slides  = slideshow.querySelectorAll('.abri-slide');
    const counter = slideshow.querySelector('.abri-counter');
    const prevBtn = slideshow.querySelector('.abri-prev');
    const nextBtn = slideshow.querySelector('.abri-next');
    const total   = slides.length;
    let current   = 0;
    let timer;

    function goTo(index) {
        current = (index + total) % total;
        track.style.transform = `translateX(-${current * 100}%)`;
        if (counter) counter.textContent = `${current + 1} / ${total}`;
    }

    function startAuto() { timer = setInterval(() => goTo(current + 1), 4000); }
    function stopAuto()  { clearInterval(timer); }

    prevBtn.addEventListener('click', (e) => { e.stopPropagation(); stopAuto(); goTo(current - 1); startAuto(); });
    nextBtn.addEventListener('click', (e) => { e.stopPropagation(); stopAuto(); goTo(current + 1); startAuto(); });

    // Touch swipe
    let touchStartX = 0;
    slideshow.addEventListener('touchstart', (e) => { touchStartX = e.touches[0].clientX; }, { passive: true });
    slideshow.addEventListener('touchend',   (e) => {
        const dx = e.changedTouches[0].clientX - touchStartX;
        if (Math.abs(dx) > 40) { stopAuto(); goTo(dx < 0 ? current + 1 : current - 1); startAuto(); }
    }, { passive: true });

    slideshow.addEventListener('mouseenter', stopAuto);
    slideshow.addEventListener('mouseleave', startAuto);

    startAuto();
})();
</script>

<?php include 'includes/footer.php'; ?>
