@extends('layouts.welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="container">
                <div class="jumbotron">
                    <h2><strong>Update Notes</strong></h2>
                    <p>Gesamtzeit: 43h</p>
                </div>
                <div class="container">
<!--Template
                <h2>tag, ..2018</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            
                        </li>
                        <li class="list-group-item">
                            
                        </li>
                        <li class="list-group-item">
                            
                        </li>
                        <li class="list-group-item">

                        </li>
                        <li class="list-group-item">
                            
                        </li>
                    </ul>
-->
                <h2>Wochenupdate Montag, 30.7.2018</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Datenbank erstellt (16 Objekte)
                        </li>
                        <li class="list-group-item">
                            Datenbank-Generierung (Migration), Testdaten (Seeds), Klassen, Relationen erstellt
                        </li>
                        <li class="list-group-item">
                            PHP-Seite mit Tabelle der Reifen-Übersicht erstellt und Testdaten angezeigt
                        </li>
                        <li class="list-group-item">
                            Webserver Konfiguration
                        </li>
                        <li class="list-group-item">
                            Reifentheorie mit Datenmodellierung
                        </li>
                    </ul>
                <br/>
                <h2>Donnerstag, 23.07.2018</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Einarbeitung in Bootstrap
                        </li>
                        <li class="list-group-item">
                            Authentifizierung
                        </li>
                        <li class="list-group-item">
                            Welcome-Pages schreiben
                        </li>
                    </ul>
                <br/>
                <h2>Mittwoch, 23.07.2018</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Einarbeitung in Laravel
                        </li>
                        <li class="list-group-item">
                            Tabellenskripte erstellen
                        </li>
                        <li class="list-group-item">
                            Tabellen-Seeder erstellen
                        </li>
                        <li class="list-group-item">
                            Datenobjekte erstellen
                        </li>
                        <li class="list-group-item">
                            Webserver Konfiguration
                        </li>
                        <li class="list-group-item">
                            Seeding von Testdaten
                        </li>
                    </ul>
                <br/>
                <h2>Dienstag, 23.07.2018</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Einarbeitung in Laravel
                        </li>
                        <li class="list-group-item">
                            Tabellenskripte erstellen
                        </li>
                        <li class="list-group-item">
                            Webserver Konfiguration
                        </li>
                        <li class="list-group-item">
                            Reifen-Theorie
                        </li>
                    </ul>
                <br/>
                <h2>Montag, 23.07.2018</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Auswahl der Technologien
                        </li>
                        <li class="list-group-item">
                            Setup und Konfiguration der Entwicklungsumgebung
                        </li>
                        <li class="list-group-item">
                            Einarbeitung in Laravel
                        </li>
                        <li class="list-group-item">
                            Datenbank erstellen
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection