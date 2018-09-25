@extends('layouts.app')

@section('content')
	@component('components.left-nav')
		@slot('overviewActive')  @endslot
		@slot('stockActive') @endslot
		@slot('garageActive')  @endslot
		@slot('tyreDataActive') active @endslot
		@slot('vehicleDataActive') @endslot
	@endcomponent
	@component('components.main-container')
		@slot('content')
			{{-- Modal if needed --}}
			@component('components.main') {{-- <main> --}}
			{{-- Page content from here --}}
			@slot('content')
				{{-- Page header goes here --}}
				@component('components.header-sole')
					@slot('title')
						Reifendaten
					@endslot
				@endcomponent {{-- </components.header --}}
				
				<form>
					@component('components.tyreData-tyre-row')
						@slot('title')
							Hersteller
						@endslot
						@slot('formContent')
							<select class="form-control" id="manufacturer">
								<option>Michelin</option>
								<option>Goodyear</option>
								<option>Dunlop</option>
								<option>Barkley</option>
							</select>
						@endslot
					@endcomponent
					@component('components.tyreData-tyre-row')
						@slot('title')
							Modell
						@endslot
						@slot('formContent')
							<select class="form-control" id="model">
								<option>ECOPIA H-STEER 001</option>
								<option>R249 EVO Ecopia</option>
								<option>R249 Ecopia</option>
								<option>Durable</option>
							</select>
						@endslot
					@endcomponent
					@component('components.tyreData-tyre-row-nobuttons')
						@slot('title')
							Metrik
						@endslot
						@slot('formContent')
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
							</div>
						@endslot
					@endcomponent
					@component('components.tyreData-tyre-row')
						@slot('title')
							Lastindex
						@endslot
						@slot('formContent')
							<select class="form-control" id="model">
								<option>156 | 4000</option>
								<option>160 | 4500</option>
								<option>164 | 5000</option>
								<option>166 | 5300</option>
							</select>
						@endslot
					@endcomponent
					@component('components.tyreData-tyre-row')
						@slot('title')
							Geschwindigkeitsindex
						@endslot
						@slot('formContent')
							<select class="form-control" id="model">
								<option>J | 100</option>
								<option>K | 110</option>
								<option>L | 120</option>
								<option>M | 130</option>
							</select>
						@endslot
					@endcomponent
					@component('components.tyreData-tyre-row')
						@slot('title')
							Achse
						@endslot
						@slot('formContent')
							<select class="form-control" id="model">
								<option>Allachs</option>
								<option>Antriebsachse</option>
								<option>Lenkachse</option>
								<option>Anhänger</option>
							</select>
						@endslot
					@endcomponent
					@component('components.tyreData-tyre-row-nobuttons')
						@slot('title')
							Regroovable
						@endslot
						@slot('formContent')
							<input type="checkbox" checked/>
						@endslot
					@endcomponent
				</form>
				<br/>
				<h3>Typ im Bestand:</h3>
				<div>
					<table class="table table-striped">
						<thead>
						<tr>
							<th>Ort</th>
							<th>Fahrzeug</th>
							<th>Profil Ø</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>Montiert</td>
								<td>RT ZD-676</td>
								<td>11</td>
							</tr>
							<tr>
								<td>Montiert</td>
								<td>RT ZZ-123</td>
								<td>12</td>
							</tr>
							<tr>
								<td>Montiert</td>
								<td>RT XY-456</td>
								<td>13</td>
							</tr>
							<tr>
								<td>Lager</td>
								<td>-</td>
								<td>5</td>
							</tr>
						</tbody>
					</table>
				</div>
				{{--TODO remove--}}
				@component('components.developer-notes')
					@slot('content')
						<i>Geplant:<br/>
							Erzeugen und bearbeiten von Reifendaten.<br/>
						Das Formular kann auch zur Suche anhand der Reifendaten genutzt werden.<br/>
							Bei gleichen Nenndaten ist zur Unterscheidung wohl eine Indizierung am Reifen notwendig...?</i>
					@endslot
				@endcomponent
				
				
				@component('components.footer')
					@slot('columnRight')
						{{-- Footer content right side goes here --}}
					@endslot
				@endcomponent
			@endslot
			@endcomponent {{-- </components.main --}}
		@endslot
	@endcomponent {{-- </components.main-container --}}

@endsection