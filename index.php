<html>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Software Security</title>
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    
    
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
				</button>
				<a class="navbar-brand" href="index.php">Software Security</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opdracht Onderdelen <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="XSS.php">XSS</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="HTTPResponseSplitting.php">HTTP Response Splitting</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="Cross-SiteRequestForgery.php">Cross-Site Request Forgery</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="SQLInjectie.php">SQL Injectie</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="row">
		<div class="col-sm-2" align="center">
	<img src="img/AP.jpg" width="100" height="100">
</div>
<div class="col-sm-10">
	<h4>
	Silke Henderickx</br>
	s097336</br>
	Toegepaste Informatica
</h4>
</div>
</div>
	<div class="panel panel-default" >
		<div class="panel-heading">
			<span>
				<h3 class="panel-title">Open mij met
					<a  href="https://www.mozilla.org/nl/firefox/new/">Firefox</a>
					<a href="https://www.mozilla.org/nl/firefox/new/">
						<img border="0" alt="Firefox Logo" src="img/firefox.jpg" width="30" height="30">
					</h3>
				</span>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img style="max-height: 200px;" src="img/SQLInjection.jpg" alt="SQL Injectie"></img>
							<div class="caption">
								<a href="SQLInjectie.php" role="button"class="btn btn-success btn-lg btn-block">SQL Injectie</a>
								<div class="row">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img style="max-height: 200px;" src="img/CSRF.jpg" alt="Cross-Site Request Forgery"></img>
							<div class="caption">
								<a href="Cross-SiteRequestForgery.php" role="button"class="btn btn-success btn-lg btn-block">Cross-Site Request Forgery</a>
								<div class="row">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<p>&nbsp;</p>
							<img style="max-height: 200px;" src="img/XSS.jpg" alt="XSS"></img>
							<div class="caption">
								<p>&nbsp;</p>
								<a href="XSS.php" role="button"class="btn btn-success btn-lg btn-block">XSS</a>
								<div class="row">
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img style="max-height: 200px;" src="img/CRLF.jpg" alt="HTTP Response Splitting"></img>
							<div class="caption">
								<a href="HTTPResponseSplitting.php" role="button"class="btn btn-success btn-lg btn-block">HTTP Response Splitting</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
