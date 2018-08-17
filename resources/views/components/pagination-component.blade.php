{{-- Not used - for reference --}}
<nav class="col" aria-label="Listennavigation">
	<ul class="pagination justify-content-end">
		<li class="page-item{{ $pagination->backDisabled}}">
			<a class="page-link" href="tyres?page=back">Zurück</a>
		</li>
		@foreach($pagination->pages as $page)
			<li class="page-item{{ $page['disabled']}}">
				<a class="page-link" href="tyres?page={{$page['number']}}">{{$page['number']}}</a>
			</li>
		@endforeach
		<li class="page-item{{ $pagination->forwardDisabled}}">
			<a class="page-link" href="tyres?page=forward">Weiter</a>
		</li>
	</ul>
</nav>