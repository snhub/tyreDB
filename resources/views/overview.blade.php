@extends('layouts.app')

@section('content')
	{{-- Left Navigation --}}
	@component('components.left-nav')
		@slot('overviewActive') active @endslot
		@slot('tyresActive')  @endslot
		@slot('vehiclesActive')  @endslot
	
	@endcomponent
	@component('components.main-container') {{-- container-fluid --}}
	@slot('content')
		{{-- Modals go here --}}
		@component('components.main') {{-- <main ...> --}}
		@slot('content')
			@component('components.header')
				@slot('title')
					{{-- Title goes here --}}
				@endslot
				@slot('actionsBar')
					{{-- Acitons/Buttons go here --}}
				@endslot
			@endcomponent {{-- header --}}
			@component('components.collapsable')
				@slot('content')
					{{-- Collapsable if needed - Collapsable button template inside component file --}}
				@endslot
			@endcomponent
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
			@component('components.footer')
				@slot('columnRight')
					<div class="col pagination justify-content-end">
						{{$tyres->links()}}
					</div>
				@endslot
			@endcomponent
		@endslot
		@endcomponent {{-- <main ...> --}}
	@endslot
	@endcomponent {{-- main-container --}}

@endsection