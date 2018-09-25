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
                    <a href="overview" class="btn btn-primary btn-lg">Anwendung starten</a>
                </div>
                <h1>Dokumentation</h1>
                <ul class="list-group">
                    <li class="list-group-item"><h2><a href="https://github.com/snhub/tyreDB" class="badge badge-primary">Source Code Repository</a></h2></li>
                    <li class="list-group-item"><h2><a href="/update-notes" class="badge badge-primary">Update Notes</a></h2></li>
                    <li class="list-group-item"><h2><a href="#" class="badge badge-primary">Roadmap</a></h2></li>
                </ul>
	            <br/>
                <h1>Weblinks Reifen</h1>
                <ul class="list-group">
	                <li class="list-group-item"><a href="https://de.wikipedia.org/wiki/Autoreifen"><h2>https://de.wikipedia.org/wiki/Autoreifen</h2></a></li>
	                <li class="list-group-item"><a href="https://de.wikipedia.org/wiki/Nutzfahrzeugreifen"><h2>https://de.wikipedia.org/wiki/Nutzfahrzeugreifen</h2></a></li>
	                <li class="list-group-item"><a href="https://www.bridgestone.de/lkw-und-busse/~/media/Files/Commercial/Central/Downloads/TBR_Brochure%20Downloads/BS_TBR_Databook_2014.ashx"><h2>https://www.bridgestone.de/lkw-und-busse/~/media/Files/Commercial/Central/Downloads/TBR_Brochure%20Downloads/BS_TBR_Databook_2014.ashx</h2></a></li>
	                <li class="list-group-item"><a href=""><h2></h2></a></li>
                </ul>
	            <br/>
	            <h1>Known Bugs</h1>
	            <ul class="list-group">
		            <li class="list-group-item"><h2></h2></li>
		            <li class="list-group-item"><h2></h2></li>
		            <li class="list-group-item"><h2></h2></li>
	            </ul>
	            <br/>
	            <h1>Development Tools</h1>
	            <h3 class="pb-2"><a href="/developmentTools/migrate">Run Migrations (all data will be deleted)</a></h3>
	            <h3 class="pb-2"><a href="/developmentTools/seed">Run Seeds</a></h3>
	            <h3 class="pb-2"><a href="/developmentTools/migrateAndSeed">Migrate And Seed</a></h3>
	            <h3 class="pb-2"><a href="/developmentTools/seedBridgestone">Seed Bridgestone</a></h3>
            </div>
        </div>
    </div>
</div>
@endsection