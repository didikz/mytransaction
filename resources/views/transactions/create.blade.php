@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-8">
			<div class="panel">
				<div class="panel-heading">
					<h4 class="title">Add Transaction</h4>
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
						{{ csrf_field() }}
						<input type="hidden" name="user_id" value="1">
						<div class="form-group">
							<label class="control-label col-md-3">Type</label>
							<div class="col-md-5">
								{!! Form::select('issued_type', ['income' => 'Income', 'outcome'=> 'Outcome'], [], ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Issued date</label>
							<div class="col-md-5">
								<input type="text" name="issued_time" class="form-control" value="{{ date('Y-m-d') }}" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Issued Description</label>
							<div class="col-md-5">
								<textarea name="issued_description" class="form-control" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Issued Value</label>
							<div class="col-md-5">
								<input type="number" name="issued_value" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Issued By</label>
							<div class="col-md-5">
								<input type="text" name="issued_by" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Issued Receipt</label>
							<div class="col-md-8">
								<input type="file" name="issued_image">
								<span class="help-block">Must be an image and size is not greater than 200kb</span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-3">
								<button type="submit" class="btn btn-sm btn-fill btn-primary"><i class="fa fa-save"></i> Submit</button> &nbsp;
								<a href="{{ route('transactions.index') }}" class="btn btn-sm btn-fill btn-warning"><i class="fa fa-reply"></i> Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop