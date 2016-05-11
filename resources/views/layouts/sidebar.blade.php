<aside class="left-side sidebar-offcanvas">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left info">
				<p>Main Menu</p>
			</div>
		</div>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="active">
				<a href="{{ route('dashboard.index') }}">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{ route('users.index') }}">
					<i class="fa fa-users"></i> <span>Users</span>
				</a>
			</li>

			<li>
				<a href="{{ route('transactions.index') }}">
					<i class="fa fa-money"></i> <span>Transactions</span>
				</a>
			</li>

			<li>
				<a href="{{ route('reports.index') }}">
					<i class="fa fa-briefcase"></i> <span>Reports</span>
				</a>
			</li>

		</ul>
	</section>
	<!-- /.sidebar -->
</aside>