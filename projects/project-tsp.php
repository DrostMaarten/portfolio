<?php include "../includes/header.php";?>

<main class="container">

    <!-- PROJECT HEADER -->
    <section class="project-header">
        <h1>Routeplanner met Genetic Algorithm</h1>
        <p class="project-subtitle">
            Optimalisatie van routes voor het handelsreizigersprobleem met behulp van genetic algorithm.
        </p>

        <div class="project-buttons">
            <a class="button" href="#">GitHub</a>
            <a class="button-outline" href="#">Documentatie</a>
        </div>
    </section>

    <!-- PROJECT BESCHRIJVING -->
    <section class="project-section">
        <h2>Projectbeschrijving</h2>

        <p>
            In dit project heb ik een proof-of-concept ontwikkeld voor het oplossen van het
            handelsreizigersprobleem (TSP). Hierbij wordt een genetic algorithm gebruikt om
            efficiënte routes te genereren tussen meerdere locaties.
        </p>

        <p>
            De applicatie maakt gebruik van externe route-API’s om realistische afstanden
            en reistijden te verwerken in de optimalisatie.
        </p>
    </section>

    <!-- TECH STACK -->
    <section class="project-section">
        <h2>Technieken</h2>

        <div class="tech-stack">
            <span>Java</span>
            <span>Genetic Algorithm</span>
            <span>REST API</span>
            <span>Object-Oriented Programming</span>
        </div>
    </section>

    <!-- UITDAGINGEN -->
    <section class="project-section">
        <h2>Technische uitdagingen</h2>

        <p>
            Een belangrijke uitdaging binnen dit project was het ontwerpen van een efficiënte
            representatie van routes binnen de populatie van het genetic algorithm.
        </p>

        <p>
            Daarnaast vereiste het combineren van externe routegegevens met optimalisatielogica
            een zorgvuldige scheiding tussen datastructuren en evaluatiefuncties.
        </p>
    </section>

    <!-- RESULTAAT -->
    <section class="project-section">
        <h2>Resultaat</h2>

        <p>
            Het genetic algorithm kon binnen korte tijd routes genereren die aanzienlijk
            efficiënter waren dan willekeurige oplossingen. Hierdoor werd aangetoond dat
            deze aanpak geschikt is voor praktische optimalisatievraagstukken.
        </p>
    </section>

    <!-- SCREENSHOTS -->
    <section class="project-section">
        <h2>Screenshots</h2>

        <img src="images/tsp-screenshot.png" alt="Routeplanner screenshot" class="project-image">
    </section>

    <!-- TERUGKNOP -->
    <section class="project-back">

        <a href="../projects.php">← Terug naar projecten</a>

    </section>
</main>

<?php include "../includes/footer.php";?>