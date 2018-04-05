
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
	<?php
session_start();

$user_name = "Guest";

if(($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['username']))) {

$user_name = $_POST['username'];
if($user_name != "Guest" && (!empty($user_name)) && ($user_name != "")){
$_SESSION['login'] = 1;
if (isset($_SESSION['login']) ){
    echo "Welcome " . $user_name . " </br>";
}
}
else {
echo "You are not logged in.<br />";
echo session_id();
}
}



?>

<?php
if(isset($_GET['logout']) && $_SERVER['REQUEST_METHOD'] == 'GET')
{
    session_destroy();
    echo 'Logged out';
}

if(isset($_GET['enter']) && $_SERVER['REQUEST_METHOD'] == 'GET')
{

if(isset($_SESSION['login'])) {
$myFile="text";
$fh = fopen($myFile, 'a') or die("can't open file");

fwrite($fh, $_GET['write']."\n");
echo $_GET['write']." has been written down on file";
}
else{
    echo "You may not enter text. Try logging in.";
}
}
?>
	
	<div class="row">
	    <div class="col-sm-1"></div>
<div class="col-sm-3">
<?php
        if(!isset($_SESSION['login'])) {
             echo '<form method="post"> 
<input type="text" name="username" class="form-control" placeholder="Username"> <br />
<input type="submit" name="submit" value="Log In"  class="btn btn-primary">
</form>';
}
?>
<form method="get" >
<input type="text" name="write" class="form-control" placeholder="Text"/>
<input type="submit" value="Save text" name="enter" class="btn btn-primary" >
</form>
<?php
        if(isset($_SESSION['login'])) {
echo '<form method="get" >
<input type="submit" value="logout" name="logout"  class="btn btn-primary">
</form>';
}
?>
<?php echo nl2br(file_get_contents( "text" ));?>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-6">
    </br>
    <div class="panel panel-info">
        <div class="panel-heading">
    <h3 class="panel-title">Cross-Site Request Forgery</h3>
  </div>
  <div class="panel-body">
    <p>
        Schrijf iets in het tekstvak en klik op Save text.</br></br>
        
        Om text op te slaan moet je ingelogd zijn.</br>
        Voer je naam in en klik op de Log In button.</br></br>
        
        Schrijf iets in het tekstvak en klik op Save text.</br>
        Proficiat je hebt nu iets ingevoerd in de textfile. Je kan je meesterwerk onderaan de pagina zien verschijnen.</br></br>
        
        Ga in een apart venster naar volgende url: </br></br>
        *****************</br>
        <?php
        if(isset($_SESSION['login'])) {
            echo 'https://silke-henderickx-software-security.000webhostapp.com/hacks.php</br></br>
        De login session wordt gewoon behouden en we kunnen iets tegen de wil van de gebruiker om in de textfile schrijven.</br></br>';
        }
        else{
            echo 'Log eerst in, dan zal de url verschijnen.';
        }
        ?>
        
        
    </p>
  </div>
        
</div>
    
</div>
</div>
</body>
<script type="text/javascript">
    $(document).ready(function(){
        $("button").click(function(){

            $.ajax({
                type: 'POST',
                url: 'SubmitText.php',
                success: function(data) {
                    alert(data);
                    $("p").text(data);

                }
            });
   });
});
</script>