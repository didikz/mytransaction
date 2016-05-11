@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<section class="panel">
				<div class="panel-heading">
					<h4 class="box-title">Detail Transaction <span class="pull-right">Current Balance: Rp. 5.000.000</span> </h4>
				</div>
				<div class="panel-body">
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<a href="#" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit</a>&nbsp;
							<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Delete</a>&nbsp;
							<a href="{{ route('transactions.index') }}" class="btn btn-sm btn-default"><i class="fa fa-reply"></i> Back to list</a>&nbsp;
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="table-responsive">
								<table class="table table-striped">
									<tbody>
									<tr>
										<td>Transaction ID</td>
										<td>#1</td>
									</tr>
									<tr>
										<td>Type</td>
										<td>Income</td>
									</tr>
									<tr>
										<td>Issued Date</td>
										<td>{{ date('Y-m-d') }}</td>
									</tr>
									<tr>
										<td>Description</td>
										<td>lorem ipsum dolor sit amet</td>
									</tr>
									<tr>
										<td>Value</td>
										<td>Rp. 500.000</td>
									</tr>
									<tr>
										<td>Issued by</td>
										<td>Didik Tri S</td>
									</tr>
									<tr>
										<td>Status</td>
										<td><span class="label label-danger">Canceled</span> </td>
									</tr>
									<tr>
										<td>Created by</td>
										<td>John Doe</td>
									</tr>
									<tr>
										<td>Created at</td>
										<td>{{ date('Y-m-d H:i:s') }}</td>
									</tr>
									<tr>
										<td>Updated at</td>
										<td>{{ date('Y-m-d H:i:s') }}</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail">
								<img src="{{ url('assets/img/nophoto.jpg') }}" class=" img-thumbnail img-responsive img-rounded">
								<div class="caption">
									Transaction Receipt
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
@stop