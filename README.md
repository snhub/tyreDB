# tyreDB
## Relevanteste Verzeichnisse
- App/ Datenobjekte, Controller
- Resources/ Views
- Database/ Migrations, Seeds

## Kurzerläuterung
### Frontend
Startpunkt ist public/index.php. Danach setzt das Routing ein: routes/web.php, das entweder einen View oder einen Controller aufruft. Nachdem der Controller Datenabfragen gemacht und Session-Attribute gesetzt hat, gibt er wiederum an einen View weiter.
Views verwenden Layouts, also Templates, die die Webseitenerstellung vereinfachen.
### Backend
Die Objektklassen (Reifen, Modell, Hersteller, Fahrzeug, ...) sind direkt unter app/. Sie spiegeln die Datensätze der Datenbank und erhalten hier bereits ihre Relationen (Eloquent ORM). Die Datenbank-Generierung ist in Skripten gespeichert (Migrations), wodurch man per Befehl die Datenbank löschen und wieder aufsetzen kann. Testdatenerzeugung geht hierbei über (Seeder).

## Liste der Views
- welcome.blade.php >> Startseite
- application.blade.php
