@extends('layouts.welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="container">
                <div class="jumbotron">
                    <h1><strong>Entwicklungs-Seite für die Reifenlagerhaltung</strong></h1>
                </div>
                <div class="container mb-5">
                    <a href="app" class="btn btn-primary btn-lg">Anwendung starten</a>
                </div>
                <h1>Weiterführende Links</h1>
                <ul class="list-group">
                    <li class="list-group-item"><h2><a href="https://github.com/snhub/tyreDB" class="badge badge-primary">Source Code Repository</a></h2></li>
                    <li class="list-group-item"><h2><a href="/update-notes" class="badge badge-primary">Update Notes</a></h2></li>
                    <li class="list-group-item"><h2><a href="/roadmap" class="badge badge-primary">Roadmap</a></h2></li>
                </ul>
                <h1>Working</h1>
                <ul class="list-group">
                    <li class="list-group-item"><div class="container container-fluid"><h2><pre><span>Prototyp fertig</span><span></span></pre></h2></div></li>
                    <li class="list-group-item"><h2></h2></li>
                    <li class="list-group-item"><h2></h2></li>
                </ul>
                <h1>Known Bugs</h1>
                <ul class="list-group">
                    <li class="list-group-item"><h2></h2></li>
                    <li class="list-group-item"><h2></h2></li>
                    <li class="list-group-item"><h2></h2></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection