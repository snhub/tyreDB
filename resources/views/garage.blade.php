@extends('layouts.app')

@section('content')
	@component('components.left-nav')
		@slot('overviewActive')  @endslot
		@slot('stockActive')  @endslot
		@slot('garageActive') active @endslot
	@endcomponent
	@component('components.main-container')
		@slot('content')
			{{-- Modal if needed --}}
			@component('components.main') {{-- <main> --}}
			{{-- Page content from here --}}
			@slot('content')
				{{-- Page header goes here --}}
				@component('components.header-garage')
					@slot('title')
						Werkstatt
					@endslot
					@slot('actionsBar')
						@component('components.header.start')
							@slot('content')
								{{-- Actions bar left items go here --}}
								<form class="container-fluid align-conent-start mt-3">
									<div class="form-group row">
										<label for="filterRegistration" class="col-1 col-form-label">Fahrzeug</label>
										<div class="col-2">
											<select class="form-control" id="filterRegistration">
												<option>RT</option>
												<option>ES</option>
											</select>
										</div>
										<div class="col-2">
											<input type="text" class="form-control" id="filterRegistration" placeholder="Nummer">
										</div>
										<button type="Submit" class="btn btn-primary">Suchen</button>
									</div>
								</form>
								<img class="p-0 pb-2 mr-1" src="{{URL::asset('/img/rig-3axles.png')}}" height="70px" alt="Rig 3 Axles"/>
								<h3 style="white-space:nowrap" class="pl-2 mt-3 text-right">MB Actros 1843 - 3 Achsen - 123.456 km</h3>
							@endslot
						@endcomponent {{-- /components.header.start --}}
					@endslot
				@endcomponent {{-- </components.header --}}
				
				{{-- Page body goes here --}}
				@component('components.garage-tyre-row')
					@slot('axle') Lenkachse @endslot
					@slot('content')
						@component('components.garage-tyre-left')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
						@component('components.garage-tyre-right')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
					@endslot
				@endcomponent
				<hr/>
				@component('components.garage-tyre-row')
					@slot('axle') Antriebsachse 1 innen @endslot
					@slot('content')
						@component('components.garage-tyre-left')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
						@component('components.garage-tyre-right')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
					@endslot
				@endcomponent
				<hr/>
				@component('components.garage-tyre-row')
					@slot('axle') Antriebsachse 1 außen @endslot
					@slot('content')
						@component('components.garage-tyre-left')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
						@component('components.garage-tyre-right')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
					@endslot
				@endcomponent
				<hr/>
				@component('components.garage-tyre-row')
					@slot('axle') Antriebsachse 2 innen @endslot
					@slot('content')
						@component('components.garage-tyre-left')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
						@component('components.garage-tyre-right')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
					@endslot
				@endcomponent
				<hr/>
				@component('components.garage-tyre-row')
					@slot('axle') Antriebsachse 2 außen @endslot
					@slot('content')
						@component('components.garage-tyre-left')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
						@component('components.garage-tyre-right')
							@slot('tyreTitle') Bridgestone | R249 Ecopia | 275/70 R 22.5 @endslot
							@slot('lastInstall') 12.12.2017 @endslot
							@slot('mileage') 123.456 km @endslot
							@slot('tread_o') 19,9 @endslot
							@slot('tread_m') 19,9 @endslot
							@slot('tread_i') 19,9 @endslot
						@endcomponent
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