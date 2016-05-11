@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-8">
			<section class="panel">
				<div class="panel-heading">
					<h4 class="title">Add User</h4>
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="control-label col-md-3">Name</label>
							<div class="col-md-6">
								<input type="text" name="name" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Email</label>
							<div class="col-md-6">
								<input type="email" name="email" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Password</label>
							<div class="col-md-6">
								<input type="password" name="password" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Password Confirmation</label>
							<div class="col-md-6">
								<input type="passsword" name="password_confirmation" class="form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Role</label>
							<div class="col-md-6">
								{!! Form::select('role', ['admin' => 'Administrator', 'manager'=> 'Manager', 'staff' => 'Staff'], [], ['class' => 'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-3">
								<button type="submit" class="btn btn-sm btn-fill btn-primary"><i class="fa fa-save"></i> Submit</button> &nbsp;
								<a href="{{ route('users.index') }}" class="btn btn-sm btn-fill btn-warning"><i class="fa fa-reply"></i> Cancel</a>
							</div>
						</div>
					</form>
				</div>
			</section>
		</div>
	</div>
@stop