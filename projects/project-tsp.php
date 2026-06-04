<?php include "../includes/header.php";?>

<main class="container">

    <!-- PROJECT HEADER -->
    <section class="project-header">
        <h1>Routeplanner met Genetic Algorithm</h1>
        <p class="project-subtitle">
            Optimalisatie van routes voor het handelsreizigersprobleem met behulp van onder andere een genetic algorithm.
        </p>

        <div class="project-buttons">
            <!-- Vervang door de URL van de specifieke repository -->
            <a class="button" href="https://github.com/DrostMaarten/VintageforLife" target="_blank" rel="noopener">GitHub</a>
        </div>
    </section>

    <!-- PROJECTBESCHRIJVING -->
    <section class="project-section">
        <h2>Projectbeschrijving</h2>

        <p>
            In dit project heb ik samen met een klasgenoot een Proof of Concept ontwikkeld
            voor het oplossen van het handelsreizigersprobleem (TSP). Hierbij worden een
            genetic algorithm, brute force en nearest neighbour algoritme gecombineerd.
            Hierdoor kunnen de algoritmes met elkaar vergeleken worden.
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
            Het genetic algorithm biedt de beste combinatie van goede routes en efficiëntie.
            De andere algoritmen waren of te zwaar om met grotere datasets te werken,
            of gaven niet vaak genoeg een snelle route terug. Hierdoor wordt aangetoond
            dat deze aanpak geschikt is voor praktische optimalisatievraagstukken.
        </p>
    </section>

    <!-- SCREENSHOTS -->
    <section class="project-section">
        <h2>Screenshots</h2>

        <!--
          Plaats een screenshot in /portfolio/images/ (bijv. tsp-screenshot.png) en
          vervang het onderstaande placeholder-blok door:
          <img src="/portfolio/images/tsp-screenshot.png" alt="Routeplanner screenshot" class="project-image">
        -->

        <p>
            Hier is de simpele GUI voor de applicatie te zien. Deze is expres simpel
            gehouden aangezien het een Proof of Concept betreft.
        </p>
        <div class="project-image-placeholder">
            <img src="/portfolio/images/Schermafbeelding TSP GUI.png" alt="Routeplanner screenshot" class="project-image">
        </div>
        <p>
            Hier is de kaart te zien die wordt gegenereerd. Hierbij worden de
            routes weergeven met een simpele legenda erbij.
        </p>
        <div class="project-image-placeholder">
            <img src="/portfolio/images/Schermafbeelding TSP Kaart.png" alt="Routeplanner screenshot" class="project-image">
        </div>
    </section>

    <!-- TERUGKNOP -->
    <section class="project-back">
        <a href="/portfolio/projects.php">← Terug naar projecten</a>
    </section>
</main>

<?php include "../includes/footer.php";?>
