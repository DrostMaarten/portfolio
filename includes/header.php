<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - Maarten Drost</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<nav>
    <a class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="p/index.php">Home</a>
    <a class="<?= ($currentPage == 'projects.php') ? 'active' : '' ?>" href="/projects.php">Projecten</a>
    <a class="<?= ($currentPage == 'aboutMe.php') ? 'active' : '' ?>" href="/aboutMe.php">Over mij</a>
    <a class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="/contact.php">Contact</a>
</nav>