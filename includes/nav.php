<?php
$current = basename($_SERVER['PHP_SELF'], '.php');
$base = (str_contains($_SERVER['PHP_SELF'], '/pages/') || $current === 'realisations') ? '../' : '';

$nav_links = [
    ['href' => $base . 'index.php',        'label' => 'Accueil',       'key' => 'index'],
    ['href' => $base . 'realisations.php', 'label' => 'Réalisations',  'key' => 'realisations'],
    ['href' => $base . 'pages/contact.php','label' => 'Contact',       'key' => 'contact'],
];
?>
<header class="site-header" role="banner">
    <div class="container header-inner">
        <a href="<?= $base ?>index.php" class="logo" aria-label="Baldonedo Bâtiment – Accueil">
            <span class="logo-icon" aria-hidden="true">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="18,3 33,30 3,30" fill="#5aaec0" opacity="0.9"/>
                    <rect x="13" y="20" width="10" height="10" fill="#3d90a1"/>
                    <rect x="15" y="22" width="3" height="4" fill="white" opacity="0.8"/>
                    <rect x="19" y="22" width="3" height="4" fill="white" opacity="0.8"/>
                </svg>
            </span>
            <span class="logo-text">
                <span class="logo-name">Baldonedo</span>
                <span class="logo-sub">Bâtiment</span>
            </span>
        </a>

        <button class="nav-toggle" id="navToggle" aria-controls="primary-nav" aria-expanded="false" aria-label="Ouvrir le menu">
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
            <span class="hamburger-bar"></span>
        </button>

        <nav id="primary-nav" class="primary-nav" role="navigation" aria-label="Navigation principale">
            <ul class="nav-list">
                <?php foreach ($nav_links as $link): ?>
                <li class="nav-item">
                    <a href="<?= $link['href'] ?>"
                       class="nav-link<?= $current === $link['key'] ? ' nav-link--active' : '' ?>"
                       <?= $current === $link['key'] ? 'aria-current="page"' : '' ?>>
                        <?= $link['label'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <a href="tel:+330148531061" class="btn btn--primary btn--sm nav-cta">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.01 2.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                </svg>
                Appelez-nous
            </a>
        </nav>
    </div>
</header>
