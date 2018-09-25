@extends('layouts.app')

@section('content')
	@component('components.left-nav')
		@slot('overviewActive')  @endslot
		@slot('stockActive') active @endslot
		@slot('garageActive')  @endslot
		@slot('tyreDataActive')  @endslot
		@slot('vehicleDataActive')  @endslot
	@endcomponent
	@component('components.main-container')
		@slot('content')
			{{-- New Dataset Modal --}}
			@component('components.modal-lg')
				@slot('id') newDatasetModal @endslot
				@slot('title') Neuer Datensatz @endslot
				@slot('approveButtonCaption') Senden @endslot
				@slot('dismissButtonCaption') Abbrechen @endslot
				@slot('body')
					<form>
						<div class="row">
							<div class="form-group col">
								<label for="newDatasetManufacturer" class="col-form-label">Hersteller</label>
								<select class="form-control" id="newDatasetManufacturer">
									<option>Michelin</option>
									<option>Goodyear</option>
									<option>Dunlop</option>
									<option>Barkley</option>
								</select>
							</div>
							<div class="form-group col">
								<label for="newDatasetModel" class="col-form-label">Modell</label>
								<input type="text" class="form-control" id="newDatasetModel" placeholder="Modell">
							</div>
						</div>
						<div class="row">
							<div class="form-group col">
								<label for="newDatasetMetricWidth" class="col-form-label">Metrik</label>
								<div class="row">
									<div class="col-2">
										<input type="number" class="form-control" id="newDatasetMetricWidth" placeholder="Breite">
									</div>
									<div class="col-2">
										<input type="number" class="form-control" id="newDatasetMetricRatio" placeholder="H/B">
									</div>
									<div class="col-2">
										<select class="form-control" id="newDatasetMetricRD">
											<option>R</option>
											<option>D</option>
										</select>
									</div>
									<div class="col-2">
										<input type="float" class="form-control" id="newDatasetMetricDiameter" placeholder="Ø">
									</div>
									<div class="col-2">
										<input type="number" class="form-control" id="newDatasetMetricLoadIndex" placeholder="Tragf.">
									</div>
									<div class="col-2">
										<input type="number" class="form-control" id="newDatasetMetricSpeedClass" placeholder="Geschw.">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col">
								<label for="newDatasetAxle" class="col-form-label">Achse</label>
								<select class="form-control" id="newDatasetAxle">
									<option>Allachs</option>
									<option>Antrieb</option>
									<option>Lenkachse</option>
									<option>Anhänger</option>
								</select>
							</div>
							<div class="form-group col">
								<label for="newDatasetOperation" class="col-form-label">Einsatzgebiet</label>
								<select class="form-control" id="newDatasetOperation">
									<option>Regionalverkehr</option>
									<option>Fernverkehr</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="form-group col">
								<label for="newDatasetLocation" class="col-form-label">Ort</label>
								<select class="form-control" id="newDatasetLocation">
									<option>Montiert</option>
									<option>Lager</option>
									<option>Runderneuerung</option>
									<option>Nachschneiden</option>
								</select>
							</div>
							<div class="form-group col">
								<label for="newDatasetQuality" class="col-form-label">Qualität</label>
								<select class="form-control" id="newDatasetQuality">
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
								<label for="newDatasetCount" class="col-form-label">Anzahl (Datensatz Kopien)</label>
								<input type="number" class="form-control" id="newDatasetCount" placeholder="Anzahl">
							</div>
							<div class="form-group col">
								<label for="newDatasetNotes" class="col-form-label">Notizen</label>
								<textarea class="form-control" id="newDatasetNotes" rows="1"></textarea>
							</div>
						</div>
					</form>
				@endslot
			@endcomponent {{-- </components.modal-lg --}}
			@component('components.main') {{-- <main> --}}
				@slot('content')
					@component('components.header')
						@slot('title')
							Bestand
						@endslot
						@slot('actionsBar')
							@component('components.header.start')
								@slot('content')
									{{-- New-, Delete- Buttons --}}
									<div class=""><a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target="#newDatasetModal">Neu</a></div>
									<div class="p-2"><p class="text-center" style="white-space:nowrap">Auswahl:</p></div>
									<div class="dropdown p-0 p-r-3 pr-4">
										<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Aktion
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="/tyres?action=move">Verschieben</a>
											<a class="dropdown-item" href="/tyres?action=delete">Löschen</a>
										</div>
									</div>
								@endslot
							@endcomponent {{-- /components.header.start --}}
							@component('components.header.center')
								@slot('content')
									@component('components.collapsable-button')
										@slot('collapsableName') filterForm @endslot
										@slot('caption') Filter &#8711; @endslot
									@endcomponent
								@endslot
							@endcomponent {{-- /components.header.center --}}
							@component('components.header.end')
								@slot('content')
									{{-- Top Pagination/Datasets per page--}}
									<div class="d-flex flex-row-reverse p-0 m-0">
										{{-- Pagination --}}
										{{$tyres->links()}}
										{{-- Datasets per page --}}
										<div class="dropdown p-0 p-r-3 pr-4">
											<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												{{$datasetsPerPage}}
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="/tyres?datasets=10">10</a>
												<a class="dropdown-item" href="/tyres?datasets=25">25</a>
												<a class="dropdown-item" href="/tyres?datasets=50">50</a>
												<a class="dropdown-item" href="/tyres?datasets=100">100</a>
											</div>
										</div>
										<div class="p-2"><p class="text-center" style="white-space:nowrap">Datensätze/Seite:</p></div>
									</div>
								@endslot
							@endcomponent {{-- </components.header.end --}}
						@endslot
					@endcomponent {{-- </components.header --}}
					@component('components.collapsable')
						{{-- Filter Form --}}
						@slot('id') filterForm @endslot
						@slot('content')
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
						@endslot
					@endcomponent {{-- <components.collapsable --}}
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
					
					{{--TODO remove--}}
					@component('components.developer-notes')
						@slot('content')
							Liste aller Reifen im Bestand. <br/>
							<i>Geplant: <br/>
							Bei Auswahl eines Reifens wird zur 'Reifendaten'-Seite gewechselt, wo dessen Daten bearbeitet werden können.<br/>
							Über Mehrfachauswahl können Reifen gelöscht oder demontiert werden.
							</i>
						@endslot
					@endcomponent
					
					@component('components.footer')
						@slot('columnRight')
							<div class="col pagination justify-content-end">
								{{$tyres->links()}}
							</div>
						@endslot
					@endcomponent
				@endslot
			@endcomponent {{-- </components.main --}}
		@endslot
	@endcomponent {{-- </components.main-container --}}

@endsection