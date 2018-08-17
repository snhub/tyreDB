<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="newEditDatasetModal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="newEditDatasetModalLabel">{{ $title }}</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body row-full">
				{{ $body }}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">{{ $dismissButtonCaption }}</button>
				<button type="button" class="btn btn-primary">{{ $approveButtonCaption }}</button>
			</div>
		</div>
	</div>
</div>