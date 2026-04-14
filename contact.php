<?php include "includes/header.php";?>

<main class="container">
    <section class="container-header">
        <h1>Contact</h1>

        <p>
            Interesse in samenwerking of vragen over mijn projecten?
            Neem gerust contact met mij op via onderstaand formulier of via LinkedIn.
        </p>
    </section>

    <!-- CONTACT INFO -->
    <section class="contact-info">
        <div class="contact-card">
            <h3>Email</h3>
            <p>drostmaarten05@gmail.com</p>
        </div>

        <div class="contact-card">
            <h3>LinkedIn</h3>
            <p>
                <a href="https://linkedin.com/in/maarten-drost-9215901b8" target="_blank">
                    Bekijk mijn LinkedIn-profiel
                </a>
            </p>
        </div>

        <div class="contact-card">
            <h3>GitHub</h3>
            <p>
                <a href="https://github.com/DrostMaarten" target="_blank">
                    Bekijk mijn repositories
                </a>
            </p>
        </div>
    </section>

    <!-- CONTACT FORMULIER -->
    <section class="contact-form-section">
        <h2>Stuur mij een bericht</h2>

        <form method="post" action="/portfolio/sendEmail.php" class="contact-form">
            <label>Naam</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Bericht</label>
            <textarea name="message" rows="5" required></textarea>

            <button type="submit" class="button">Versturen</button>
        </form>
    </section>
</main>

<?php include "includes/footer.php";?>