<?php include "includes/header.php";?>

<main class="container">

    <!-- HERO SECTION -->
    <section class="hero">
        <h1>Hallo, ik ben Maarten Drost</h1>

        <p>
            Deeltijdstudent HBO-ICT aan Hogeschool Windesheim.
            Momenteel ervaring in Java, PHP en SQL.
            Ik ontwikkel graag backend software, zoals bij schoolopdracht nu
            het geval was met bijvoorbeeld een algoritmische routeplanner.
        </p>

        <a class="button" href="/portfolio/projects.php">Bekijk mijn projecten</a>
    </section>

    <!-- SKILLS SECTION -->
    <section class="skills">
        <h2>Technische vaardigheden</h2>

        <ul>
            <li>Java (OOP, algoritmes, simulaties)</li>
            <li>PHP &amp; MySQL (webapplicaties)</li>
            <li>SQL (databaseontwerp en queries)</li>
            <li>REST API-integraties</li>
            <li>Genetic algorithms &amp; optimalisatieproblemen</li>
        </ul>
    </section>

    <!-- FEATURED PROJECTS -->
    <section class="featured-projects">
        <h2>Uitgelichte projecten</h2>
        <div class="project-card">
            <h3>Routeplanner met Genetic Algorithm</h3>

            <p>
                Proof of Concept van een oplossing voor het handelsreizigersprobleem
                met optimalisatie via een Genetic Algorithm en routeberekening via API.
            </p>

            <a href="/portfolio/projects/project-tsp.php">Lees meer →</a>
        </div>

        <div class="project-card">
            <h3>HR Webapplicatie (PHP &amp; MySQL)</h3>

            <p>
                Webapplicatie voor het beheren van medewerkersgegevens.
                Inclusief databasekoppeling, CRUD-functionaliteit en gestructureerde backend-logica.
            </p>

            <a href="/portfolio/projects.php">Lees meer →</a>
        </div>
    </section>

    <section class="contact-cta">
        <h2>Interesse om samen te werken?</h2>

        <p>
            Neem gerust contact met mij op via de contactpagina of LinkedIn.
        </p>

        <a class="button" href="/portfolio/contact.php">Contact opnemen</a>
    </section>
</main>

<?php include "includes/footer.php";?>
