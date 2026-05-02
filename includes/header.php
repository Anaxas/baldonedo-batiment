<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
$titles = [
    'index'        => 'Baldonedo Bâtiment – Construction & Rénovation à Orly',
    'contact'      => 'Contact – Baldonedo Bâtiment',
    'realisations' => 'Nos Réalisations – Baldonedo Bâtiment',
];
$descriptions = [
    'index'        => 'Baldonedo Bâtiment, votre expert en construction et rénovation à Orly (94). Devis gratuit, intervention rapide, qualité garantie.',
    'contact'      => 'Contactez Baldonedo Bâtiment pour tous vos projets de construction et rénovation à Orly et en Île-de-France.',
    'realisations' => 'Découvrez les réalisations de Baldonedo Bâtiment : constructions, rénovations et travaux en Île-de-France.',
];
$title       = $titles[$page]       ?? 'Baldonedo Bâtiment';
$description = $descriptions[$page] ?? 'Construction & Rénovation – Baldonedo Bâtiment, Orly (94)';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?= htmlspecialchars($title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300;400;500;700&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= str_contains($_SERVER['PHP_SELF'], '/pages/') || str_contains($_SERVER['PHP_SELF'], 'realisations') ? '../' : '' ?>assets/css/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= str_contains($_SERVER['PHP_SELF'], '/pages/') || str_contains($_SERVER['PHP_SELF'], 'realisations') ? '../' : '' ?>assets/images/logo-baldonedo-batiment.png">
    <!-- <link rel="icon" type="image/svg+xml" href="<?= str_contains($_SERVER['PHP_SELF'], '/pages/') || str_contains($_SERVER['PHP_SELF'], 'realisations') ? '../' : '' ?>assets/images/favicon.svg"> -->
</head>
<body>
    <a href="#main-content" class="skip-link">Aller au contenu principal</a>
    <?php include __DIR__ . '/nav.php'; ?>
    <main id="main-content">
