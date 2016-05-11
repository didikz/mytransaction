@extends('layouts.app')
@section('content')
	<div class="row" style="margin-bottom:5px;">

		<div class="col-md-3">
			<div class="sm-st clearfix">
				<span class="sm-st-icon st-red"><i class="fa fa-dollar"></i></span>
				<div class="sm-st-info">
					<span>5.000.000</span>
					Balance
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="sm-st clearfix">
				<span class="sm-st-icon st-violet"><i class="fa fa-money"></i></span>
				<div class="sm-st-info">
					<span>11.000.000</span>
					Total Income
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="sm-st clearfix">
				<span class="sm-st-icon st-blue"><i class="fa fa-credit-card"></i></span>
				<div class="sm-st-info">
					<span>6.000.000</span>
					Total Outcome
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="sm-st clearfix">
				<span class="sm-st-icon st-green"><i class="fa fa-check-square"></i></span>
				<div class="sm-st-info">
					<span>250</span>
					Total Transaction
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h4 class="box-title">Advanced Search</h4>
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
					<h4 class="box-title">Transaction List <span class="pull-right">Periode: {{ date('Y-m-d') }}</span> </h4>
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
								<th>Issued by</th>
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
