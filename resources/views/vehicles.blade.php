@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
    <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
        <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link" href="/app">Übersicht</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/tyres">Reifen</a>
        </li>
        <li class="nav-item">
            <span class="nav-link active">Fahrzeuge</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Analytics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Export</a>
        </li>
        </ul>

        <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#">Nav item</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Nav item again</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">One more nav</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Another nav item</a>
        </li>
        </ul>

        <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#">Reifen::Filter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Reifen::Suchen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Reifen::anlegen, löschen, ändern, Ort ändern, </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Fahrzeug::Datensatz anlegen, löschen, ändern</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Weitere Datensätze::anlegen, löschen</a>
        </li>

        </ul>
    </nav>

    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Reifen</h1>

        <section class="row text-center placeholders">
        <div class="col-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Montiert</h4>
            <div class="text-muted">79%</div>
        </div>
        <div class="col-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Lager</h4>
            <span class="text-muted">17%</span>
        </div>
        <div class="col-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Nachschneiden</h4>
            <span class="text-muted">3%</span>
        </div>
        <div class="col-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Runderneuerung</h4>
            <span class="text-muted">1%</span>
        </div>
        </section>
        <div class="table-responsive">
        Here: $vehicles
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th><a href="/vehicles/sort?column=registration">Kennzeichen</a></th>
                <th>Hersteller</th>
                <th>Modell</th>
                <th>Achsen</th>
                <th>Bereifung</th>
                <th>Qualität Ber.</th>
                <th>Laufleistung km/J</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehicles as $vehicle)
            <tr>
                <td>{{$vehicle->id}}</td>
                <td>{{$vehicle->registration}}</td>
                <td>{{$vehicle->model->manufacturer->name}}</td>
                <td>{{$vehicle->model->name}}</td>
                <td>{{$vehicle->model->axles}}</td>
                <td>{{$vehicle->model->tyres}}</td>
                <td>{{$vehicle->quality}}</td>
                <td>{{$vehicle->mileage}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <nav aria-label="Seitennavigation">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Zurück</a>
            </li>
            <li class="page-item"><a class="page-link" href="tyres?page=1">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Vor</a>
            </li>
        </ul>
        </nav>
        </div>
    </main>
    </div>
</div>

@endsection