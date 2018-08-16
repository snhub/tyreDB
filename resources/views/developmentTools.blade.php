@extends('layouts.app')

@section('content')
	<div class="container-fluid">
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
					<a class="nav-link" href="#">Datenbank neu erstellen</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Daten generieren</a>
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
			<h1>Development Tools</h1>
			<h3 class="pb-2"><a href="/developmentTools/migrate">Run Migrations (all data will be deleted)</a></h3>
			<h3 class="pb-2"><a href="/developmentTools/seed">Run Seeds</a></h3>
			<h3 class="pb-2"><a href="/developmentTools/migrateAndSeed">Migrate And Seed</a></h3>
		</main>
	</div>

@endsection