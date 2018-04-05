<?php


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    if(isset($_REQUEST['nightmode'])) {
        echo '<body style="background-color:black">';
    echo '<body text="white">';
        $headers = explode("%0D%0A", urlencode($_REQUEST['nightmode']));
        header(urldecode ("nightmode:" . $headers[0]));
        for ($i = 1; $i <= max(array_keys($headers)); $i++) {
            header(urldecode ($headers[$i]));
        }
        if(isset($response[1])) {
            echo urldecode($response[1]);
            exit;
        }
    }
}




?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>NWC - Search</title>
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
<div>
    <div class="panel panel-default">
  <div class="panel-heading">HTTP Response Splitting</div>
  <div class="panel-body">
      <p>
          HTTP Response Splitting gebeurt wanneer er via carriage returns extra headers meegegeven worden, waardoor de gebruiker herleidt wordt naar een andere pagina.</br></br>
          Eerst gaan we een header in de url moeten krijgen.</br>
          Het licht is wat te fel. Klik je eens op nightmode on?</br></br>
          De url bevat nu een parameter, namelijk nightmode+on.</br></br>
          Achter deze url gaan we eens het volgende toevoegen:</br></br>
          %0D%0ALocation:https://tinyurl.com/y9379gqh;</br></br>
      </p>
  </div>
</div>
    <form method="get" action="HTTPResponseSplitting.php?nightmode=off">
	    <input type="submit" value="nightmode on" name="nightmode" class="btn btn-primary">
    </form>
</div>






