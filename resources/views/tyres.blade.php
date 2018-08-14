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
		<!--
		
		-->
		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
			<h1>Reifen</h1>
			<section>
				<h2>Filter</h2>
				<div class="row">
					<form>
						<div class="form-group">
							<label for="filterManufacturer">Hersteller</label>
							<select class="form-control" id="filterManufacturer">
								<option>Alle</option>
								<option>Michelin</option>
								<option>Goodyear</option>
								<option>Dunlop</option>
								<option>Barkley</option>
							</select>
						</div>
						<div class="form-group">
							<label for="filterRegistrationCity">Kennzeichen</label>
							<select class="form-control" id="filterRegistrationCity">
								<option>*</option>
								<option>RT</option>
								<option>ES</option>
							</select>
							<div class="form-group">
								<label for="filterRegistrationCode">Address 2</label>
								<input type="text" class="form-control" id="filterRegistrationCode" placeholder="ZD-676">
							</div>
						</div>
					</form>
				</div>
			</section>
			<div class="d-flex flex-row-reverse">
				<nav aria-label="Listennavigation">
					<ul class="pagination justify-content-end">
						<li class="page-item{{ $pagination->backDisabled}}">
							<a class="page-link" href="tyres?page=back">Zurück</a>
						</li>
						@foreach($pagination->pages as $page)
							<li class="page-item{{ $page['disabled']}}">
								<a class="page-link" href="tyres?page={{$page['name']}}">{{$page['name']}}</a>
							</li>
						@endforeach
						<li class="page-item{{ $pagination->forwardDisabled}}">
							<a class="page-link" href="tyres?page=forward">Weiter</a>
						</li>
					</ul>
				</nav>
				<div class="dropdown p-r-3">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
					        data-toggle="dropdown" aria-haspopup="true"
					        aria-expanded="false">
						10
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">25</a>
						<a class="dropdown-item" href="#">50</a>
						<a class="dropdown-item" href="#">100</a>
					</div>
				</div>
				<div class="p-2"><p class="text-center">Datensätze pro Seite:</p></div>
			</div>
			<div>
				<table class="table table-striped">
					<thead>
					<tr>
						<th><a href="/tyres?column=index">#</a></th>
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
					<li class="page-item{{ $pagination->backDisabled}}">
						<a class="page-link" href="tyres?page=back">Zurück</a>
					</li>
					@foreach($pagination->pages as $page)
						<li class="page-item{{ $page['disabled']}}">
							<a class="page-link" href="tyres?page={{$page['name']}}">{{$page['name']}}</a>
						</li>
					@endforeach
					<li class="page-item{{ $pagination->forwardDisabled}}">
						<a class="page-link" href="tyres?page=forward">Weiter</a>
					</li>
				</ul>
			</nav>
		</main>
	</div>

@endsection