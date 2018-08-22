<div class="col-4">
	<div class="row">
		<div class="col">
			<div class="text-right">
				<p style="white-space:nowrap"><b>{{ $tyreTitle }}</b></p>
			</div>
			<div class="text-right">
				<p>Letzte Montage: {{ $lastInstall }}</p>
				<p>Laufleistung: {{ $mileage }}</p>
			</div>
			<div class="text-right form-group row float-right">
				<label for="tyreActions" class="col col-form-label">Auftrag:</label>
				<select class="form-control col" id="tyreActions">
					<option>Drehen</option>
					<option>Seitenwechsel</option>
					<option>Tauschen</option>
					<option>Nachschneiden</option>
					<option>Runderneuern</option>
				</select>
			</div>
		</div>
		<div class="align-content-around ml-5">
			<div class="d-flex float-right">
				<div class="container" style="width:120px">
					<img class="row p-2 pl-3" src="{{URL::asset('/img/tyre-profile.jpg')}}" width="100" alt="Tyre Profile">
					<div class="row" style="padding-left: 10px">
						<div class="col">
							<div class="row pl-2">
								<div class="col p-0">^</div>
								<div class="col p-0">^</div>
								<div class="col p-0">^</div>
							</div>
							<div class="row">
								<div class="col p-0">{{ $tread_i }}</div>
								<div class="col p-0">{{ $tread_m }}</div>
								<div class="col p-0">{{ $tread_o }}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>