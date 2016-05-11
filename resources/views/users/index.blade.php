@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<div class="panel-heading">
				<h5 class="title">Advanced Search</h5>
			</div>
			<div class="panel-body">
				<form class="form-inline">
					<div class="form-group">
						<input type="text" name="name" placeholder="Name or email" class="form-control" value="">
					</div>
					<div class="form-group">
						{!! Form::select('status', ['all' => 'All Status', 'active' => 'Active', 'nonactive' => 'Non Active'], null, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::select('role', ['all' => 'All Role', 'admin' => 'Administrator', 'manager' => 'Manager', 'staff' => 'Staff'], null, ['class' => 'form-control']) !!}
					</div>
					<button type="submit" class="btn btn-primary btn-fill btn-sm"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</section>

		<section class="panel">
			<div class="panel-heading">
				<a href="{{ route('users.create') }}" class="btn btn-success btn-sm btn-fill"><i class="fa fa-plus"></i> Add User</a>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
						<tr>
							<th>No</th>
							<th>Email</th>
							<th>Name</th>
							<th>Role</th>
							<th>Status</th>
							<th class="text-center">Action</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>reashdgasd</td>
							<td>reashdgasd</td>
							<td>reashdgasd</td>
							<td><span class="label label-success">Active</span> </td>
							<td class="text-center">
								<a class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a>
								<a class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> </a>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
@stop