@extends('layouts.app')

@section('content')
	@component('components.left-nav')
		@slot('overviewActive')  @endslot
		@slot('stockActive') @endslot
		@slot('garageActive')  @endslot
		@slot('tyreDataActive') @endslot
		@slot('vehicleDataActive') active @endslot
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
						Fahrzeugdaten
					@endslot
				@endcomponent {{-- </components.header --}}
				
					@component('components.tyreData-tyre-row')
						@slot('title')
							Hersteller
						@endslot
						@slot('formContent')
							<select class="form-control" id="manufacturer">
								<option>Mercedes Benz</option>
								<option>M.A.N.</option>
							</select>
						@endslot
					@endcomponent
					@component('components.tyreData-tyre-row')
						@slot('title')
							Modell
						@endslot
						@slot('formContent')
							<select class="form-control" id="model">
								<option>Actros</option>
								<option>Atego</option>
							</select>
						@endslot
					@endcomponent
					@component('components.tyreData-tyre-row-nobuttons')
						@slot('title')
							Achszahl
						@endslot
						@slot('formContent')
							<select class="form-control" id="model">
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						@endslot
					@endcomponent
				</form>
				<br/>
				<h3>Fahrzeuge im Bestand:</h3>
				<div>
					<table class="table table-striped">
						<thead>
						<tr>
							<th>Kennzeichen</th>
							<th>Laufleistung</th>
							<th>TÜV</th>
							<th>SP</th>
							<th>Reifenqualität</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>RT ZD-676</td>
								<td>321.123</td>
								<td>01.01.2018</td>
								<td>01.01.2018</td>
								<td>Neu</td>
							</tr>
							<tr>
								<td>RT ZZ-123</td>
								<td>123.456</td>
								<td>01.01.2018</td>
								<td>01.01.2018</td>
								<td>Gut</td>
							</tr>
							<tr>
								<td>RT XY-456</td>
								<td>23.894</td>
								<td>01.01.2018</td>
								<td>01.01.2018</td>
								<td>Wechsel</td>
							</tr>
						</tbody>
					</table>
				</div>
				{{--TODO remove--}}
				@component('components.developer-notes')
					@slot('content')
						<i>Geplant:<br/>
							Erzeugen und bearbeiten von Fahrzeugdaten.<br/></i>
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