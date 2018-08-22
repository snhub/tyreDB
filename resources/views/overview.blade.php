@extends('layouts.app')

@section('content')
	@component('components.left-nav')
		@slot('overviewActive') active @endslot
		@slot('stockActive')  @endslot
		@slot('garageActive')  @endslot
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
						Übersicht
					@endslot
				@endcomponent {{-- </components.header --}}
				
				{{-- Page body goes here --}}
				<div class="container">
					<table class="table table-striped table-hover table-sm">
						<tbody>
							<tr>
								<th>Anzahl Fahrzeuge</th>
								<td>40</td>
							</tr>
							<tr>
								<th>Reifen gesamt</th>
								<td>364</td>
							</tr>
							<tr>
								<th>Reifen montiert</th>
								<td>324</td>
							</tr>
							<tr>
								<th>Reifen im Lager</th>
								<td>28</td>
							</tr>
							<tr>
								<th>Reifen zur Runderneuerung</th>
								<td>4</td>
							</tr>
							<tr>
								<th>Reifen zum Nachschneiden</th>
								<td>8</td>
							</tr>
							<tr>
								<th>Reifen mit Qualität gut</th>
								<td>282</td>
							</tr>
							<tr>
								<th>Reifen mit Qualität mittel</th>
								<td>38</td>
							</tr>
							<tr>
								<th>Reifen mit Qualität durchschnittlich</th>
								<td>16</td>
							</tr>
							<tr>
								<th>Reifen mit Qualität ausreichend</th>
								<td>16</td>
							</tr>
							<tr>
								<th>Reifen, die gewechselt werden sollten</th>
								<td>12</td>
							</tr>
							<tr>
								<th>Offene Werkstattaufträge</th>
								<td>4</td>
							</tr>
						</tbody>
					</table>
				</div>
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