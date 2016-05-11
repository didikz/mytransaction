@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h5 class="title">Advanced Search</h5>
				</div>
				<div class="panel-body">
					<form class="form-inline">
						<div class="form-group">
							<input type="text" name="description" placeholder="Search by description" class="form-control" value="">
						</div>
						<div class="form-group">
							{!! Form::select('status', ['all' => 'All Status', 'pending' => 'Pending', 'accepted' => 'Accepted', 'canceled' => 'Canceled'], null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::select('role', ['all' => 'All Type', 'income' => 'Income', 'outcome' => 'Outcome'], null, ['class' => 'form-control']) !!}
						</div>
						<button type="submit" class="btn btn-primary btn-fill btn-sm"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
			<section class="panel">
				<div class="panel-heading">
					<a href="{{ route('transactions.create') }}" class="btn btn-success btn-sm btn-fill"><i class="fa fa-plus"></i> Add Transaction</a>
					<div class="pull-right">
						Current Balance: <span class="label label-info">Rp. 1.000.000</span>
					</div>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
							<tr>
								<th>No</th>
								<th>Date</th>
								<th>Type</th>
								<th>Description</th>
								<th>Value</th>
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
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td class="text-center">
									<a class="btn btn-xs btn-info"><i class="fa fa-search"></i> </a>
									<a class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>
									<a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> </a>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td class="text-center">
									<a class="btn btn-xs btn-info"><i class="fa fa-search"></i> </a>
									<a class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>
									<a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> </a>
								</td>
							</tr><tr>
								<td>1</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td>reashdgasd</td>
								<td class="text-center">
									<a class="btn btn-xs btn-info"><i class="fa fa-search"></i> </a>
									<a class="btn btn-xs btn-warning"><i class="fa fa-edit"></i> </a>
									<a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> </a>
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
