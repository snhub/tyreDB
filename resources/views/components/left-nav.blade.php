{{-- Left Navigation --}}
<nav class="col-sm-3 col-md-1 hidden-xs-down bg-faded sidebar" style="top: 61px">
	<ul class="nav nav-pills flex-column">
		<li class="nav-item">
			<a class="nav-link {{ $overviewActive }}" {{ ($overviewActive == 'active') ?: "href=/overview" }}>Übersicht</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ $stockActive }}" {{ ($stockActive == 'active') ?: "href=/stock" }}>Bestand</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ $garageActive }}" {{ ($garageActive == 'active') ?: "href=/garage" }}>Werkstatt</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ $tyreDataActive }}" {{ ($tyreDataActive == 'active') ?: "href=/tyreData" }}>Reifendaten</a>
		</li>
		<li class="nav-item">
			<a class="nav-link {{ $vehicleDataActive }}" {{ ($vehicleDataActive == 'active') ?: "href=/vehicleData" }}>Fahrzeugdaten</a>
		</li>
	</ul>
</nav>