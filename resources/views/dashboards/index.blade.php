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

	<div class="row" style="margin-bottom:5px;">

		<div class="col-md-3">
			<div class="sm-st clearfix">
				<span class="sm-st-icon st-green"><i class="fa fa-dollar"></i></span>
				<div class="sm-st-info">
					<span>100</span>
					Total Income Transaction
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="sm-st clearfix">
				<span class="sm-st-icon st-violet"><i class="fa fa-money"></i></span>
				<div class="sm-st-info">
					<span>250</span>
					Total Outcome Transaction
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="sm-st clearfix">
				<span class="sm-st-icon st-red"><i class="fa fa-credit-card"></i></span>
				<div class="sm-st-info">
					<span>5</span>
					Pending Transaction
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="sm-st clearfix">
				<span class="sm-st-icon st-blue"><i class="fa fa-check-square"></i></span>
				<div class="sm-st-info">
					<span>3</span>
					Total Users
				</div>
			</div>
		</div>
	</div>

	<!-- Main row -->
	<div class="row">

		<div class="col-md-12">
			<!--earning graph start-->
			<section class="panel">
				<header class="panel-heading">
					Earning Graph
				</header>
				<div class="panel-body">
					<canvas id="linechart" width="500" height="330"></canvas>
				</div>
			</section>
			<!--earning graph end-->

		</div>

	</div>
	<div class="row">

		<div class="col-md-8">
			<section class="panel">
				<header class="panel-heading">
					10 Latest Transaction
				</header>
				<div class="panel-body table-responsive">
					<table class="table table-hover">
						<thead>
						<tr>
							<th>#</th>
							<th>Type</th>
							<th>Issued By</th>
							<th>Date</th>
							<th>Value</th>
							<th>Status</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>1</td>
							<td>Facebook</td>
							<td>Mark</td>
							<!-- <td>Steve</td> -->
							<td>10/10/2014</td>
							<!-- <td>$1500</td> -->
							<td><span class="label label-danger">in progress</span></td>
							<td><span class="badge badge-info">50%</span></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Twitter</td>
							<td>Evan</td>
							<!-- <td>Darren</td> -->
							<td>10/8/2014</td>
							<!-- <td>$1500</td> -->
							<td><span class="label label-success">completed</span></td>
							<td><span class="badge badge-success">100%</span></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Google</td>
							<td>Larry</td>
							<!-- <td>Nick</td> -->
							<td>10/12/2014</td>
							<!-- <td>$2000</td> -->
							<td><span class="label label-warning">in progress</span></td>
							<td><span class="badge badge-warning">75%</span></td>
						</tr>
						<tr>
							<td>4</td>
							<td>LinkedIn</td>
							<td>Allen</td>
							<!-- <td>Rock</td> -->
							<td>10/01/2015</td>
							<!-- <td>$2000</td> -->
							<td><span class="label label-info">in progress</span></td>
							<td><span class="badge badge-info">65%</span></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Tumblr</td>
							<td>David</td>
							<!-- <td>HHH</td> -->
							<td>01/11/2014</td>
							<!-- <td>$2000</td> -->
							<td><span class="label label-warning">in progress</span></td>
							<td><span class="badge badge-danger">95%</span></td>
						</tr>
						<tr>
							<td>6</td>
							<td>Tesla</td>
							<td>Musk</td>
							<!-- <td>HHH</td> -->
							<td>01/11/2014</td>
							<!-- <td>$2000</td> -->
							<td><span class="label label-info">in progress</span></td>
							<td><span class="badge badge-success">95%</span></td>
						</tr>
						<tr>
							<td>7</td>
							<td>Ghost</td>
							<td>XXX</td>
							<!-- <td>HHH</td> -->
							<td>01/11/2014</td>
							<!-- <td>$2000</td> -->
							<td><span class="label label-info">in progress</span></td>
							<td><span class="badge badge-success">95%</span></td>
						</tr>
						</tbody>
					</table>
				</div>
			</section>
		</div><!--end col-6 -->
		<div class="col-md-4">
			<div class="panel">
				<header class="panel-heading">
					Most Active Users
				</header>

				<ul class="list-group teammates">
					<li class="list-group-item">
						<a href=""><img src="{{ url('assets/img/26115.jpg') }}" width="50" height="50"></a>
						<span class="pull-right label label-danger inline m-t-15">10 Transactions</span>
						<a href="">Damon Parker</a>
					</li>
					<li class="list-group-item">
						<a href=""><img src="{{ url('assets/img/26115.jpg') }}"  width="50" height="50"></a>
						<span class="pull-right label label-info inline m-t-15">10 Transactions</span>
						<a href="">Joe Waston</a>
					</li>
					<li class="list-group-item">
						<a href=""><img src="{{ url('assets/img/26115.jpg') }}"  width="50" height="50"></a>
						<span class="pull-right label label-warning inline m-t-15">10 Transactions</span>
						<a href="">Jannie Dvis</a>
					</li>
					<li class="list-group-item">
						<a href=""><img src="{{ url('assets/img/26115.jpg') }}"  width="50" height="50"></a>
						<span class="pull-right label label-warning inline m-t-15">10 Transactions</span>
						<a href="">Emma Welson</a>
					</li>
					<li class="list-group-item">
						<a href=""><img src="{{ url('assets/img/26115.jpg') }}"  width="50" height="50"></a>
						<span class="pull-right label label-success inline m-t-15">10 Transactions</span>
						<a href="">Emma Welson</a>
					</li>
				</ul>
				<div class="panel-footer bg-white">
					<!-- <span class="pull-right badge badge-info">32</span> -->
					<button class="btn btn-primary btn-addon btn-sm">
						<i class="fa fa-plus"></i>
						Add User
					</button>
				</div>
			</div>
		</div>
	</div>
@stop