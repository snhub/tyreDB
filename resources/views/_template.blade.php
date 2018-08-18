@extends('layouts.app')

@section('content')
	@component('components.left-nav')
		@slot('overviewActive')  @endslot
		@slot('tyresActive') active @endslot
		@slot('vehiclesActive')  @endslot
	@endcomponent
	@component('components.main-container')
		@slot('content')
			{{-- Modal goes here --}}
			@component('components.modal-lg')
				@slot('id') Modal id @endslot
				@slot('title') Modal title @endslot
				@slot('approveButtonCaption') Senden @endslot
				@slot('dismissButtonCaption') Abbrechen @endslot
				@slot('body')
					{{-- Modal content goes here --}}
				@endslot
			@endcomponent {{-- </components.modal-lg --}}
			@component('components.main') {{-- <main> --}}
			{{-- Page content from here --}}
			@slot('content')
				@component('components.header')
					@slot('title')
						PageTitle
					@endslot
					@slot('actionsBar')
						@component('components.header.start')
							@slot('content')
								{{-- Actions bar left items go here --}}
							@endslot
						@endcomponent {{-- /components.header.start --}}
						@component('components.header.center')
							@slot('content')
								{{-- Actions bar center items go here --}}
								{{-- Collapsable button if needed--}}
								@component('components.collapsable-button')
									@slot('caption') buttonCaption @endslot
									@slot('collapsableName') collapsableName @endslot
								@endcomponent
							@endslot
						@endcomponent {{-- /components.header.center --}}
						@component('components.header.end')
							@slot('content')
								{{-- Actions bar right items go here --}}
							@endslot
						@endcomponent {{-- </components.header.end --}}
					@endslot
				@endcomponent {{-- </components.header --}}
				@component('components.collapsable')
					@slot('id') collapsableId @endslot
					@slot('content')
						{{-- Collapsable (below header) goes here --}}
					@endslot
				@endcomponent {{-- <components.collapsable --}}
				
				{{-- Page body goes here --}}
				
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