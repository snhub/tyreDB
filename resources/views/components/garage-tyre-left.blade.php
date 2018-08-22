<div class="col-4 align-items-start">
	<div class="row">
		<div class="align-content-around mr-5">
			<div class="d-flex" style="width:120px">
				<div class="container">
					<img class="row p-2" src="{{URL::asset('/img/tyre-profile.jpg')}}" width="100" alt="Tyre Profile">
					<div class="row" style="padding-left: 10px">
						<div class="col">
							<div class="row pl-2">
								<div class="col p-0">^</div>
								<div class="col p-0">^</div>
								<div class="col p-0">^</div>
							</div>
							<div class="row">
								<div class="col p-0">{{ $tread_o }}</div>
								<div class="col p-0">{{ $tread_m }}</div>
								<div class="col p-0">{{ $tread_i }}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-50 justify-content-start">
			<p style="white-space:nowrap"><b>{{ $tyreTitle }}</b></p>
			<p>Letzte Montage: {{ $lastInstall }}</p>
			<p>Laufleistung: {{ $mileage }}</p>
			<div class="form-group row float-left">
				<label class="col col-form-label" for="tyreActions">Auftrag:</label>
				<select class="col form-control" id="tyreActions">
					<option>Drehen</option>
					<option>Seitenwechsel</option>
					<option>Tauschen</option>
					<option>Nachschneiden</option>
					<option>Runderneuern</option>
				</select>
			</div>
		</div>
	</div>
</div>