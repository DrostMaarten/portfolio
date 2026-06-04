<?php include "includes/header.php";?>

<main class="container">
    <section class="contact-header">
        <h1>Contact</h1>

        <p>
            Interesse in samenwerking of vragen over mijn projecten?
            Neem gerust contact met mij op via onderstaand formulier of via LinkedIn.
        </p>
    </section>

    <!-- STATUSMELDING NA VERZENDEN -->
    <?php $status = $_GET['status'] ?? ''; ?>
    <?php if ($status === 'success'): ?>
        <p class="form-status form-status-success">Bedankt! Je bericht is verzonden.</p>
    <?php elseif ($status === 'invalid'): ?>
        <p class="form-status form-status-error">Vul alsjeblieft je naam, een geldig e-mailadres en een bericht in.</p>
    <?php elseif ($status === 'error'): ?>
        <p class="form-status form-status-error">Er ging iets mis bij het verzenden. Probeer het later opnieuw of mail mij rechtstreeks.</p>
    <?php endif; ?>

    <!-- CONTACT INFO -->
    <section class="contact-info">
        <div class="contact-card">
            <h3>E-mail</h3>
            <p><a href="mailto:drostmaarten05@gmail.com">drostmaarten05@gmail.com</a></p>
        </div>

        <div class="contact-card">
            <h3>LinkedIn</h3>
            <p>
                <a href="https://linkedin.com/in/maarten-drost-9215901b8" target="_blank" rel="noopener">
                    Bekijk mijn LinkedIn-profiel
                </a>
            </p>
        </div>

        <div class="contact-card">
            <h3>GitHub</h3>
            <p>
                <a href="https://github.com/DrostMaarten" target="_blank" rel="noopener">
                    Bekijk mijn repositories
                </a>
            </p>
        </div>
    </section>

    <!-- CONTACTFORMULIER -->
    <section class="contact-form-section">
        <h2>Stuur mij een bericht</h2>

        <form method="post" action="/portfolio/sendEmail.php" class="contact-form">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Bericht</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" class="button">Versturen</button>
        </form>
    </section>
</main>

<?php include "includes/footer.php";?>
