# TODO App Documentatie

## Implementatie Details

### 1. CRUD-operaties

#### Toevoegen van een taak (`create_task.php`)

- Verantwoordelijk voor het verwerken van het formulier om nieuwe taken toe te voegen aan de database.
- Haalt de taaknaam op uit het formulier, voert een SQL-invoeging uit en slaat de taak op.
- Bij succesvolle toevoeging wordt de gebruiker teruggeleid naar de hoofdpagina.

#### Weergeven van taken (`index.php`)

- Haalt alle taken op uit de database en toont ze op de hoofdpagina.
- Elk taakelement wordt weergegeven met een selectievakje om de taak als voltooid te markeren.

#### Bijwerken van een taak (`update_task.php`)

- Verantwoordelijk voor het verwerken van het formulier om taken als voltooid te markeren.
- Haalt de taak-ID en de voltooid-status op uit het formulier, voert een SQL-update uit en werkt de taak bij.
- Na succesvolle update wordt de gebruiker teruggeleid naar de hoofdpagina.

### 2. Beveiligingsmaatregelen

- Gebruik van voorbereide statements en PDO om SQL-injectie te voorkomen.
- Validatie van gebruikersinvoer om ongewenste invoer te voorkomen.

### 3. Bestandsstructuur

- Databaseconnectie wordt beheerd via `includes/db.php` om codeherhaling te minimaliseren.
- Aparte PHP-bestanden voor CRUD-operaties om de code modulair te houden.

## Installatieproces

1. Zorg ervoor dat je een MySQL-database hebt met de naam `todo_app`.
2. Voer het SQL-bestand `schema.sql` uit om de tabelstructuur aan te maken.
3. Gebruik `seed.sql` om eventuele testgegevens toe te voegen.
4. Update de databaseverbinding in `includes/db.php` met de juiste gebruikersnaam en wachtwoord.
5. Plaats de bestanden in de webdirectory van je server.
6. Open de applicatie in je webbrowser.