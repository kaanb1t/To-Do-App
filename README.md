# To-Do App

Welkom bij de To-Do App! Hiermee kun je eenvoudig je taken beheren. 

## Inhoudsopgave

- [Installatie](#installatie)
- [Vereisten](#vereisten)
- [Stappen](#stappen)
- [Gebruik](#gebruik)
- [Bestanden](#bestanden)
- [Aanpassingen](#aanpassingen)

## Installatie

### Vereisten

- PHP geïnstalleerd op je server
- MySQL database server

### Stappen

1. Clone deze repository naar je lokale machine of server.
2. Importeer het `schema.sql` bestand om de database en tabelstructuur aan te maken.
3. Importeer optioneel het `seed.sql` bestand voor wat voorbeelddata.

## Gebruik

1. Open `index.php` in je webbrowser.
2. Voeg nieuwe taken toe met het invoerformulier.
3. Taken worden weergegeven in de secties "Te doen" en "Voltooid".
4. Vink taken aan om ze als voltooid te markeren.
5. Voltooide taken worden verplaatst naar de "Voltooid" sectie.

## Bestanden

- **index.php**: Hoofdpagina van de To-Do App.
- **create_task.php**: Verantwoordelijk voor het aanmaken van nieuwe taken.
- **update_task.php**: Verantwoordelijk voor het bijwerken van de taakstatus.
- **includes/db.php**: Bevat de logica voor databaseverbinding.
- **schema.sql**: Definieert de databaseschema.
- **seed.sql**: Bevat wat voorbeeldgegevens.

## Aanpassingen

Voel je vrij om de app aan te passen en uit te breiden naar jouw wensen!