<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Mytransaction</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

	<style>
		body{
			background: url(http://mymaplist.com/img/parallax/back.png);
			background-color: #444;
			background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);
		}
		.vertical-offset-100{
			padding-top:100px;
		}
	</style>

</head>
<body>

<div class="container">
	<div class="row vertical-offset-100">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Please sign in</h3>
				</div>
				<div class="panel-body">
					<form accept-charset="UTF-8" role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me"> Remember Me
								</label>
							</div>
							<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

<!--   Core JS Files   -->
<script src="{{ asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>

<script>
	$(document).ready(function(){
		$(document).mousemove(function(e){
			TweenLite.to($('body'),
					.5,
					{ css:
					{
						backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
					}
					});
		});
	});
</script>

</html>