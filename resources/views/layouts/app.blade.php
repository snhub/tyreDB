<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'TyreDB') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/QuantumPHP.js') }}"></script>
	<script src="{{ asset('js/tyre.js') }}"></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600"
		  rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
	<link href="{{ asset('css/tyre.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
	<nav class="navbar navbar-light navbar-expand-lg navbar-fixed-top container-fluid" style="background-color: #97C3E6; position: fixed; z-index: 10">
		<a class="navbar-brand justify-content-center pt-0" href="http://flamm.de">
			<img src="{{URL::asset('/img/flamm-logo.png')}}" height="40" alt="Brand Spedition Flamm">
		</a>
		<a class="navbar-brand" href="{{ url('/') }}" style="padding-top: 7px">
			<img src="{{URL::asset('/img/tyreDB.png')}}" height="30" alt="Brand TyreDB">
		</a>
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left Side Of Navbar -->
				<ul class="navbar-nav mr-auto">
					<!-- rechts von "TyreDB" -->
				</ul>
				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav">
					<!-- Authentication Links -->
					@guest
						<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid" style="padding-top: 70px">
	@yield('content')
	</div>
</div>

</body>
</html>
