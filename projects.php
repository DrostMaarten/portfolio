<?php include "includes/header.php";?>

<main class="container">

    <section class="projects-header">
        <h1>Mijn projecten</h1>
        <p>
            Hieronder staat een selectie van projecten waarin ik heb gewerkt aan algoritmes,
            webapplicaties en softwareontwikkeling in Java en PHP.
        </p>
    </section>

    <!--
      LET OP: vervang de href van elke GitHub-link hieronder door de URL van de
      specifieke repository. Nu wijzen ze naar je GitHub-profiel als tijdelijke link.
    -->

    <!-- PROJECT 1 -->
    <section class="project-card">
        <h2>Routeplanner met Genetic Algorithm (TSP)</h2>

        <p>
            Proof-of-concept oplossing voor het handelsreizigersprobleem waarbij een
            genetic algorithm wordt gebruikt om routes te optimaliseren.
            De applicatie integreert met een externe API om realistische routes te berekenen.
        </p>

        <div class="tech-stack">
            <span>Java</span>
            <span>Algorithms</span>
            <span>REST API</span>
        </div>

        <div class="project-links">
            <a href="/portfolio/projects/project-tsp.php">Lees meer →</a>
            <a href="https://github.com/DrostMaarten/VintageforLife" target="_blank" rel="noopener">GitHub</a>
        </div>
    </section>

    <!-- PROJECT 2 -->
    <section class="project-card">
        <h2>HR Webapplicatie (PHP &amp; MySQL)</h2>

        <p>
            Webapplicatie voor het beheren van medewerkersgegevens.
            Inclusief databasekoppeling, CRUD-functionaliteit en gestructureerde backend-logica.
        </p>

        <div class="tech-stack">
            <span>PHP</span>
            <span>MySQL</span>
            <span>CRUD</span>
        </div>

        <div class="project-links">
            <a href="/portfolio/projects/project-hr.php">Lees meer →</a>
        </div>
    </section>

    <!-- PROJECT 3 -->
    <section class="project-card">
        <h2>Dynamische webshop (PHP &amp; MySQL)</h2>

        <p>
            2D survival game waarin spelers zombies verslaan in rondes,
            geld verdienen en wapens kunnen kopen via een shop-systeem.
            De moeilijkheidsgraad neemt toe per ronde.
        </p>

        <div class="tech-stack">
            <span>PHP</span>
            <span>MySQL</span>
            <span>CRUD</span>
        </div>

        <div class="project-links">
            <a href="https://github.com/DrostMaarten" target="_blank" rel="noopener">GitHub</a>
        </div>
    </section>

</main>

<?php include "includes/footer.php";?>
