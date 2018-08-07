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
            <span class="nav-link active">Reifen</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/vehicles">Fahrzeuge</a>
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
        <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><a href="/tyres/sort?column=index">#</a></th>
                <th>Hersteller</th>
                <th>Modell</th>
                <th>Achse</th>
                <th>Breite</th>
                <th>Höhe/Brte</th>
                <th>Rad/Dia</th>
                <th>Durchm.</th>
                <th>Gewichtsi.</th>
                <th>Geschw.Kl.</th>
                <th>Regrov.</th>
                <th>Laufleist.</th>
                <th>Profil Ø</th>
                <th>Ort</th>
                <th>Fahrzeug</th>
                <th>Qualität</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tyres as $tyre)
            <tr>
                <td>{{$tyre->id}}</td>
                <td>{{$tyre->model->manufacturer->name}}</td>
                <td>{{$tyre->model->name}}</td>
                <td>{{$tyre->axle->name}}</td>
                <td>{{$tyre->width->width}}</td>
                <td>{{$tyre->ratio}}</td>
                <td>{{$tyre->rd}}</td>
                <td>{{$tyre->diameter}}</td>
                <td>{{$tyre->loadIndex->load}}</td>
                <td>{{$tyre->speedClazz->speed}}</td>
                <td>{{$tyre->regroovable}}</td>
                <td>{{$tyre->mileage()}}</td>
                <td>{{$tyre->treadAv()}}</td>
                <td>{{$tyre->location->name}}</td>
                <td>{{$tyre->vehicle->registration}}</td>
                <td>{{$tyre->quality}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        
        <nav aria-label="Seitennavigation">
        <ul class="pagination justify-content-end">
            <li class="page-item{{ $nav->backDisabled}}">
                <a class="page-link" href="tyres?page=back">Zurück</a>
            </li>
            @foreach($nav->pages as $page)
            <li class="page-item{{ $page->disabled}}">
                <a class="page-link" href="tyres?page={{$page->name}}">{{$page->name}}</a>
            </li>
            @endforeach
            <li class="page-item{{ $nav->forwardDisabled}}">
                <a class="page-link" href="tyres?page=forward">Weiter</a>
            </li>
        </ul>
        </nav>
    </main>
    </div>
</div>

@endsection