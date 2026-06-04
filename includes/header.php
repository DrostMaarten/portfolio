<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio van Maarten Drost — softwareontwikkelaar met ervaring in Java, PHP en SQL. Algoritmes, webapplicaties en simulatiemodellen.">
    <meta name="author" content="Maarten Drost">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>%F0%9F%92%BB</text></svg>">
    <title>Maarten Drost — Softwareontwikkelaar</title>
    <link rel="stylesheet" href="/portfolio/css/style.css">
</head>
<body>

<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<nav>
    <a class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="/portfolio/index.php">Home</a>
    <a class="<?= ($currentPage == 'projects.php') ? 'active' : '' ?>" href="/portfolio/projects.php">Projecten</a>
    <a class="<?= ($currentPage == 'aboutMe.php') ? 'active' : '' ?>" href="/portfolio/aboutMe.php">Over mij</a>
    <a class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="/portfolio/contact.php">Contact</a>
</nav>
