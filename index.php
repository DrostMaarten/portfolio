<?php include "includes/header.php";?>

<main class="container">

    <!-- HERO SECTION -->
    <section class="hero">
        <h1>Hallo, ik ben Maarten Drost</h1>

        <p>
            Softwareontwikkelaar mer ervaring in Java, PHP en SQL.
            Ik ontwikkel praktische applicaties zoals algoritmische routeplanners,
            webapplicaties en simulatiemodellen.
        </p>

        <a class="button" href="/portfolio/projects.php">Bekijk mijn projecten!</a>
    </section>

    <!-- SKILLS SECTION -->
    <section class="skills">
        <h2>Technische vaardigheden</h2>

        <ul>
            <li>Java (OOP, algoritmes, simulaties)</li>
            <li>PHP& MySQL (webapplicaties)</li>
            <li>SQL (databaseontwerp en queries)</li>
            <li>REST API integraties</li>
            <li>Genetic algorithms & optimalisatieproblemen</li>
        </ul>
    </section>

    <!-- FEATURED PROJECTS -->
    <section class="featured-projects">
        <h2>Uitgelichte projecten</h2>
        <div class="project-card">
            <h3>Routeplanner met Genetic Algorithm</h3>

            <p>
                Proof-of-concept van een handelsreizigersprobleem-oplossing
                met optimalisatie via een genetic algorithm en routeberekening via API.
            </p>

            <a href="/portfolio/projects/project-tsp.php">Lees meer →</a>
        </div>

        <div class="project-card">
            <h3>Java Zombie Survival Game</h3>

            <p>
                2D-game waarin spelers rondes overleven, geld verdienen en wapens upgraden
                via een shop-systeem.
            </p>

            <a href="/projects.php">Lees meer →</a>
        </div>
    </section>

    <section class="contact-cta">
        <h2>Interesse om samen te werken?</h2>

        <p>
            Neem gerust contact met mij op via de contactpagina of LinkedIn!
        </p>

        <a class="button" href="/portfolio/contact.php">Contact opnemen</a>
    </section>
</main>

<?php include "includes/footer.php";?>
