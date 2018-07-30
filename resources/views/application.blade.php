@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
    <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
        <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a class="nav-link" href="#">Übersicht</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Reifen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Fahrzeuge</a>
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
            <h4>Label</h4>
            <div class="text-muted">Something else</div>
        </div>
        <div class="col-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Label</h4>
            <span class="text-muted">Something else</span>
        </div>
        <div class="col-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Label</h4>
            <span class="text-muted">Something else</span>
        </div>
        <div class="col-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
            <h4>Label</h4>
            <span class="text-muted">Something else</span>
        </div>
        </section>
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
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
                <th>Profil i.</th>
                <th>Profil m.</th>
                <th>Profil a.</th>
                <th>Ort</th>
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
                <td>
                    @isset($tyre->loadIndex->load)
                        {{$tyre->loadIndex->load}}
                    @endisset
                </td>
                <td>
                    @isset($tyre->speedClazz->speed)
                        {{$tyre->speedClazz->speed}}
                    @endisset
                </td>
                <td>{{$tyre->regroovable}}</td>
                <td>{{$tyre->mileage}}</td>
                <td>{{$tyre->tread_depth_i}}</td>
                <td>{{$tyre->tread_depth_m}}</td>
                <td>{{$tyre->tread_depth_o}}</td>
                <td>
                    @isset($tyre->location->name)
                        {{$tyre->location->name}}
                    @endisset
                </td>
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