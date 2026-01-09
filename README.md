# Laravel Eindopdracht

Dit project is ontwikkeld met Laravel en voldoet aan alle functionele en technische vereisten van de eindopdracht.

## Vereisten
- PHP 8.2+
- Composer
- Node.js & npm
- SQLite / MySQL

## Installatie

1. Clone de repository
- git clone https://github.com/mohammad-shexo/laravel-eindopdracht
- cd <PROJECT_MAP>

## Installeer dependencies
- composer install
- npm install
- npm run build

## Maak .env bestand
- cp .env.example .env
- php artisan key:generate

## Database & seeders
- php artisan migrate:fresh --seed

## Lokale development
Dit project werd lokaal ontwikkeld met Laravel Herd.
De applicatie is bereikbaar via een `.test` domein.
Voor evaluatie kan `php artisan serve` gebruikt worden.

## Admin account 
Username: admin
Email: admin@ehb.be
Password: Password!321

## Functionaliteiten
- Authenticatie (login, register, password reset)
- Gebruikersrollen (user / admin)
- Publieke profielpagina’s
- Nieuws systeem (CRUD voor admin)
- FAQ systeem met categorieën
- Contactformulier met e-mail notificatie
- Admin panel voor gebruikersbeheer

## Extra info
- E-mails worden in development gelogd (MAIL_MAILER=log)
- Afbeeldingen worden lokaal opgeslagen
- Project gebruikt Laravel best practices

## Bronnen
- Laravel documentation: https://laravel.com/docs
- 
