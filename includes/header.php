<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - Maarten Drost</title>
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