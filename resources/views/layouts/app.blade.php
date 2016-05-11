<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mytransaction | Dashboard</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="description" content="Web based transaction records">
	<meta name="keywords" content="">
	<!-- bootstrap 3.0.2 -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- font Awesome -->
	<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- Morris chart -->
	<link href="{{ asset('assets/css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
	<!-- jvectormap -->
	<link href="{{ asset('assets/css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
	<!-- Date Picker -->
	<link href="{{ asset('assets/css/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
	<!-- fullCalendar -->
	<!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
	<!-- Daterange picker -->
	<link href="{{ asset('assets/css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
	<!-- iCheck for checkboxes and radio inputs -->
	<link href="{{ asset('assets/css/iCheck/all.css') }}" rel="stylesheet" type="text/css" />
	<!-- bootstrap wysihtml5 - text editor -->
	<!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<!-- Theme style -->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	  <![endif]-->

	<style type="text/css">

	</style>
</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->

@include('layouts.navbar')

<div class="wrapper row-offcanvas row-offcanvas-left">
	<!-- Left side column. contains the logo and sidebar -->
	@include('layouts.sidebar')

	<aside class="right-side">

		<!-- Main content -->
		<section class="content">

			@yield('content')
			<!-- row end -->
		</section><!-- /.content -->
		<div class="footer-main navbar-fixed-bottom">
			Copyright &copy Didik Tri Susanto - using Director Theme, 2016
		</div>
	</aside><!-- /.right-side -->

</div><!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>

<!-- jQuery UI 1.10.3 -->
<script src="{{ asset('assets/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/js/plugins/chart.js') }}" type="text/javascript"></script>

<!-- datepicker
<script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
<!-- Bootstrap WYSIHTML5
<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
<!-- iCheck -->
<script src="{{ asset('assets/js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<!-- calendar -->
<script src="{{ asset('assets/js/plugins/fullcalendar/fullcalendar.js') }}" type="text/javascript"></script>

<!-- Director App -->
<script src="{{ asset('assets/js/Director/app.js') }}" type="text/javascript"></script>

<!-- Director dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/js/Director/dashboard.js') }}" type="text/javascript"></script>

<!-- Director for demo purposes -->
<script type="text/javascript">
	$('input').on('ifChecked', function(event) {
		// var element = $(this).parent().find('input:checkbox:first');
		// element.parent().parent().parent().addClass('highlight');
		$(this).parents('li').addClass("task-done");
		console.log('ok');
	});
	$('input').on('ifUnchecked', function(event) {
		// var element = $(this).parent().find('input:checkbox:first');
		// element.parent().parent().parent().removeClass('highlight');
		$(this).parents('li').removeClass("task-done");
		console.log('not');
	});

</script>
<script>
	$('#noti-box').slimScroll({
		height: '400px',
		size: '5px',
		BorderRadius: '5px'
	});

	$('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
		checkboxClass: 'icheckbox_flat-grey',
		radioClass: 'iradio_flat-grey'
	});
</script>
<script type="text/javascript">
	$(function() {
		"use strict";
		//BAR CHART
		var data = {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [
				{
					label: "My First dataset",
					fillColor: "rgba(220,220,220,0.2)",
					strokeColor: "rgba(220,220,220,1)",
					pointColor: "rgba(220,220,220,1)",
					pointStrokeColor: "#fff",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(220,220,220,1)",
					data: [65, 59, 80, 81, 56, 55, 40]
				},
				{
					label: "My Second dataset",
					fillColor: "rgba(151,187,205,0.2)",
					strokeColor: "rgba(151,187,205,1)",
					pointColor: "rgba(151,187,205,1)",
					pointStrokeColor: "#fff",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(151,187,205,1)",
					data: [28, 48, 40, 19, 86, 27, 90]
				}
			]
		};
		new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
			responsive : true,
			maintainAspectRatio: false,
		});

	});
	// Chart.defaults.global.responsive = true;
</script>
</body>
</html>