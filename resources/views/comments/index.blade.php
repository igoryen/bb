@extends('layouts.app');
@section('content')
	<div class="panel-body">
		<!-- Display Validation Errors -->
		@include('common.errors')

		<!-- New Comment Form -->
		<form 	action="{{ url('comment') }}" method="POST" class="form-horizontal">
			{{ csfr_field() }}
			<!-- Comment text -->
			<div class="form-group">
				<label for="comment-text" class="col-sm-3 control-label">Comment</label>
				<div class="col-sm-6">
					<input type="text" name="name" id="task-name" class="form-control">
				</div>
			</div>
			<!-- Add Comment Button -->
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-plus"></i> Add Comment
					</button>
				</div>
			</div>
		</form>
	</div>
	<!-- TODO: current comments -->
@endsection