@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		
		{{-- Left Navigation --}}
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
		
		{{-- New/Edit Dataset Modal --}}
		<div class="modal fade" id="newEditDatasetModal" tabindex="-1" role="dialog" aria-labelledby="newEditDatasetModal" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="newEditDatasetModalLabel">Neuer Datensatz</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body row-full">
						<form>
							<div class="row">
								<div class="form-group col">
									<label for="newEditManufacturer" class="col-form-label">Hersteller</label>
									<select class="form-control" id="newEditManufacturer">
										<option>Michelin</option>
										<option>Goodyear</option>
										<option>Dunlop</option>
										<option>Barkley</option>
									</select>
								</div>
								<div class="form-group col">
									<label for="newEditModel" class="col-form-label">Modell</label>
									<input type="text" class="form-control" id="newEditModel" placeholder="Modell">
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<label for="newEditMetricWidth" class="col-form-label">Metrik</label>
									<div class="row">
										<div class="col-2">
											<input type="number" class="form-control" id="newEditMetricWidth" placeholder="Breite">
										</div>
										<div class="col-2">
											<input type="number" class="form-control" id="newEditMetricRatio" placeholder="H/B">
										</div>
										<div class="col-2">
											<select class="form-control" id="newEditMetric">
												<option>R</option>
												<option>D</option>
											</select>
										</div>
										<div class="col-2">
											<input type="float" class="form-control" id="newEditMetricDiameter" placeholder="Ø">
										</div>
										<div class="col-2">
											<input type="number" class="form-control" id="newEditMetricLoadIndex" placeholder="Tragf.">
										</div>
										<div class="col-2">
											<input type="number" class="form-control" id="newEditMetricSpeedIndex" placeholder="Geschw.">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<label for="newEditAxle" class="col-form-label">Achse</label>
									<select class="form-control" id="newEditAxle">
										<option>Allachs</option>
										<option>Antrieb</option>
										<option>Lenkachse</option>
										<option>Anhänger</option>
									</select>
								</div>
								<div class="form-group col">
									<label for="newEditOperation" class="col-form-label">Einsatzgebiet</label>
									<select class="form-control" id="newEditOperation">
										<option>Regionalverkehr</option>
										<option>Fernverkehr</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<label for="newEditLocation" class="col-form-label">Ort</label>
									<select class="form-control" id="newEditLocation">
										<option>Montiert</option>
										<option>Lager</option>
										<option>Runderneuerung</option>
										<option>Nachschneiden</option>
									</select>
								</div>
								<div class="form-group col">
									<label for="newEditQuality" class="col-form-label">Qualität</label>
									<select class="form-control" id="newEditQuality">
										<option>Neu/Runderneuert</option>
										<option>Gut</option>
										<option>Mittel</option>
										<option>Ausreichend</option>
										<option>Wechsel</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="form-group col">
									<label for="newEditCount" class="col-form-label">Anzahl (Datensatz Kopien)</label>
									<input type="number" class="form-control" id="newEditCount" placeholder="Anzahl">
								</div>
								<div class="form-group col">
									<label for="newEditNotes" class="col-form-label">Notizen</label>
									<textarea class="form-control" id="newEditNotes" rows="1"></textarea>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
						<button type="button" class="btn btn-primary">Senden</button>
					</div>
				</div>
			</div>
		</div>
		
		<main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
			<h1>Reifen</h1>
			
			{{-- Filter Form --}}
			<div class="row-full collapse" id="filterForm">
				<form>
					<div class="form-group row">
						<label for="filterDateFrom" class="col-1 col-form-label">Datum</label>
						<div class="col-2">
							<input type="date" class="form-control" id="filterDateFrom" placeholder="Von">
						</div>
						<label for="filterMetricRatio" class="col-form-label">-</label>
						<div class="col-2">
							<input type="date" class="form-control" id="filterDateTo" placeholder="Bis">
						</div>
					</div>
					<div class="form-group row">
						<label for="filterManufacturer" class="col-1 col-form-label">Hersteller</label>
						<div class="col-11">
							<select class="form-control" id="filterManufacturer">
								<option>Alle</option>
								<option>Michelin</option>
								<option>Goodyear</option>
								<option>Dunlop</option>
								<option>Barkley</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="filterAxle" class="col-1 col-form-label">Achse</label>
						<div class="col-11">
							<select class="form-control" id="filterAxle">
								<option>Alle</option>
								<option>Allachs</option>
								<option>Antrieb</option>
								<option>Lenkachse</option>
								<option>Anhänger</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="filterRegistration" class="col-1 col-form-label">Fahrzeug</label>
						<div class="col-1">
							<select class="form-control" id="filterRegistration">
								<option>RT</option>
								<option>ES</option>
							</select>
						</div>
						<div class="col-10">
							<input type="text" class="form-control" id="filterRegistration" placeholder="Nummer">
						</div>
					</div>
					<div class="form-group row">
						<label for="filterMetricWidth" class="col-1 col-form-label">Metrik</label>
						<div class="col-1">
							<input type="number" class="form-control" id="filterMetricWidth" placeholder="Breite">
						</div>
						<label for="filterMetricRatio" class="col-form-label">/</label>
						<div class="col-1">
							<input type="number" class="form-control" id="filterMetricRatio" placeholder="H/B">
						</div>
						<div class="col-1">
							<select class="form-control" id="filterMetric">
								<option>R</option>
								<option>D</option>
							</select>
						</div>
						<div class="col-1">
							<input type="number" class="form-control" id="filterMetricDiameter" placeholder="Ø">
						</div>
						<div class="col-1">
							<input type="number" class="form-control" id="filterMetricLoadIndex" placeholder="Tragf.">
						</div>
						<div class="col-1">
							<input type="number" class="form-control" id="filterMetricSpeedIndex" placeholder="Geschw.">
						</div>
					</div>
					<div class="form-group row">
						<label for="filterLocation" class="col-1 col-form-label">Ort</label>
						<div class="col-11">
							<select class="form-control" id="filterLocation">
								<option>Alle</option>
								<option>Montiert</option>
								<option>Lager</option>
								<option>Runderneuerung</option>
								<option>Nachschneiden</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="filterQuality" class="col-1 col-form-label">Qualität</label>
						<div class="col-11">
							<select class="form-control" id="filterQuality">
								<option>Alle</option>
								<option>Neu</option>
								<option>Gut</option>
								<option>Mittel</option>
								<option>Ausreichend</option>
								<option>Wechsel</option>
							</select>
						</div>
					</div>
				</form>
			</div>
			
			{{-- Button Row --}}
			<div class="row">
				{{-- Delete Button --}}
				<div class="col">
					<a href="#" class="btn btn-primary mr-1" role="button" data-toggle="modal" data-target="#newEditDatasetModal">Neu</a>
					<button type="submit" class="btn btn-primary">Auswahl löschen</button>
				</div>
				{{-- Filter Button --}}
				<div class="col">
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#filterForm" aria-expanded="false" aria-controls="collapseExample">Filter &Delta;</button>
				</div>
				{{-- Top Pagination/Datasets per page--}}
				<div class="col">
					<div class="d-flex flex-row-reverse">
						{{-- Pagination --}}
						{{$tyres->links()}}
						{{-- Datasets per page --}}
						<div class="dropdown p-r-3 pr-4">
							<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
							        data-toggle="dropdown" aria-haspopup="true"
							        aria-expanded="false">{{$datasetsPerPage}}</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="/tyres?datasets=10">10</a>
								<a class="dropdown-item" href="/tyres?datasets=25">25</a>
								<a class="dropdown-item" href="/tyres?datasets=50">50</a>
								<a class="dropdown-item" href="/tyres?datasets=100">100</a>
							</div>
						</div>
						<div class="p-2"><p class="text-center">Datensätze pro Seite:</p></div>
					</div>
				</div>
			</div>
			<!-- Datasets Table -->
			<div>
				<table class="table table-striped">
					<thead>
					<tr>
						<th><input type="checkbox" onclick="datasetSelectToggle(this)" value="" id="{code}"></th>
						<th><a href="/tyres?column=date">Datum</a></th>
						<th>Hersteller</th>
						<th>Modell</th>
						<th>Achse</th>
						<th>Metrik</th>
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
							<td><input type="checkbox" name="datasetSelect" value="" id="{code}"></td>
							<td><a href="">{{$tyre->createDate()}}</a></td>
							<td>{{$tyre->model->manufacturer->name}}</td>
							<td>{{$tyre->model->name}}</td>
							<td>{{$tyre->axle->name}}</td>
							<td>{{$tyre->metricString}}</td>
							<td>{{$tyre->loadIndex->load}}</td>
							<td>{{$tyre->speedClazz->speed}}</td>
							<td>{{$tyre->regroovable}}</td>
							<td>{{$tyre->mileage()}}</td>
							<td>{{$tyre->treadAv()}}</td>
							<td>{{$tyre->location->name}}</td>
							@if($tyre->vehicle != null)
								<td>{{$tyre->vehicle->registration}}</td>
							@else
								<td>-</td>
							@endif
							<td>{{$tyre->quality}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			
			<!-- Bottom Pagination -->
			<div class="row">
				<div class="col">
					<button type="button" class="btn btn-secondary btn-lg">Seitenanfang</button>
				</div>
				<div class="col pagination justify-content-end">
					{{$tyres->links()}}
				</div>
				{{--@component('pagination-component', ['pagination' => $pagination])--}}
				{{--@endcomponent--}}
			</div>
		</main>
	</div>

@endsection