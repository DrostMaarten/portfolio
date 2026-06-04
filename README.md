# Portfolio — Maarten Drost

Persoonlijke portfoliowebsite, gebouwd met PHP. Toont projecten, vaardigheden
en een contactformulier dat berichten via SMTP doorstuurt.

## Stack
- PHP (zonder framework)
- HTML / CSS
- PHPMailer voor het versturen van e-mail
- Optioneel MySQL via PDO (`includes/db.php`)

## Lokaal draaien
De site verwacht te draaien onder het pad `/portfolio/` (bijv. `http://localhost/portfolio/`).

1. Plaats de map in je webroot zodat `http://localhost/portfolio/index.php` werkt.
2. Installeer de dependencies (indien `vendor/` ontbreekt):
   ```bash
   composer install
   ```
3. Maak een `.env`-bestand aan op basis van `.env.example` en vul je eigen
   SMTP- (en eventueel database-)gegevens in:
   ```bash
   cp .env.example .env
   ```

## Configuratie
Alle gevoelige gegevens staan in `.env` en worden geladen via `includes/env.php`.
Het `.env`-bestand staat in `.gitignore` en hoort **niet** in versiebeheer of een
gedeelde zip terecht te komen.

## Structuur
```
index.php            Homepage
aboutMe.php          Over mij
projects.php         Projectoverzicht
projects/            Detailpagina's per project
contact.php          Contactgegevens + formulier
sendEmail.php        Verwerkt het contactformulier
includes/            Header, footer, env-loader, database
css/style.css        Styling
```

## Nog te doen
- GitHub-links per project naar de juiste repository laten wijzen.
- Screenshots toevoegen in `images/`.
