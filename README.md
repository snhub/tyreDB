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
Die Objektklassen (Reifen, Modell, Hersteller, Fahrzeug, ...) sind direkt unter app/. Sie spiegeln die Datensätze der Datenbank und erhalten hier bereits ihre Relationen (Eloquent ORM). Die Datenbank-Generierung ist in Skripten gespeichert (Migrations), was die Modellierung sehr vereinfacht. Testdatenerzeugung geht dabei über (Seeder).

## Kommentare zu Technologien
### Laravel
Laravel ist nach Recherche das zur Zeit modernste und beliebteste PHP Framework. Es können high Level Datenbankabfragen gemacht werden. Authentifizierung, Routing, Templates (Blade), sind bereits fertig zur Anwendung und müssen lediglich konfiguriert werden. Bootstrap (Frontend), Artisan (Asset-Generierung), Mail und weitere hilfreiche Extensions sind integriert.
### Bootstrap
Twitter Bootstrap ist eins der bewährtesten Frontend-Frameworks, welches oft eingesetzt wird. Es ist vom Funktionsumfang her noch überschaubar und sehr gut für Anwendungen, welche keine zu speziellen Anforderungen haben. Es eignet sich sehr gut für Webseiten, die auf unterschiedlichen Displays laufen sollen.

## Liste der Views
- welcome.blade.php >> Startseite
- application.blade.php  >> Startseite der Anwendung, Übersicht
- tyres.blade.php >> Reifen-Ansicht
- tyre.blade.php >> Reifen-Aktionen
- vehicles.blade.php >> Fahrzeug-Ansicht
- vehicle.blade.php >> Fahrzeug-Aktionen
- contractors.blade.php >> Auftragnehmer-Ansicht
- contractor.blade.php >> Auftragnehmer-Aktionen
- setup.blade.php >> Einstellungen

