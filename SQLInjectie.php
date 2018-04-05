<?php
$servername = "localhost";
$username = "id5178403_username";
$password = "password";
$database = "id5178403_grades";
?>

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
<form method="post">
Studentennummer: <input type="text" name="studentennummer" class="form-control"><br>
Vak: <input type="text" name="vak" class="form-control"><br>
Score: <input type="text" name="score" class="form-control"><br>
<input type="submit" class="btn btn-primary" class="form-control">
</form>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-6">
    </br>
    <div class="panel panel-info">
        <div class="panel-heading">
    <h3 class="panel-title">SQL Injectie</h3>
  </div>
  <div class="panel-body">
    <p>
        SQL Injectie kan gebeuren als je invoer van een user niet checkt voor dit naar de database te posten.</br>
        
        Dit is de puntenlijst van een school.</br>
        Als je op de search knop drukt zonder invoer kan je alle huidige punten bekijken.</br>
        Er zitten er al een aantal in.</br></br>
        
        Je kan ook zelf punten toevoegen.</br>
        Geef jezelf even een 20 op het vak Software Security.</br></br>
        
        Als je opnieuw een search doet, zal je zien dat jouw cijfer inderdaad toegevoegd is in de database.</br></br>
        De maker van deze website heeft echter niet gedacht aan gebruikers die misbruik willen maken van het systeem.</br></br>
        Voeg nog eens een resultaat toe. Maar voer in het laatste vak volgende string in:</br></br>
        13');TRUNCATE Grades; </br></br>
        
        Druk opnieuw op de search button.</br></br>
        
        Proficiat! Je hebt de tabel volledig leeg gemaakt. Nu moet iedereen zijn examens opnieuw afleggen. :(
        
        
    
    </p>
  </div>
        
</div>
    
</div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['studentennummer'])){
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql="INSERT INTO Grades (Studentennummer, Vak, Score) VALUES ('$_POST[studentennummer]','$_POST[vak]','$_POST[score]')"; // in score   ');TRUNCATE Grades;  scrijven
    if (mysqli_query($conn, $sql)) {
        echo 'New record created successfully';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    unset($conn);
}
}
?>
<br>
<br>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-3">
<form method="post">
    Search op Studentennummer: <input type="text" name="search" class="form-control">
    <input type="submit" class="btn btn-primary" value="Search">
</form>
</div>
<div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['search'])){
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
        
        $sql="SELECT * FROM Grades WHERE Studentennummer LIKE '%" . $_POST["search"] ."%'";
        
    
        $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                    
                    // output data of each row
                    echo "<div class='row'><div class='col-sm-5'></div><div class='col-sm-4'><div class='panel panel-info'><div class='panel-heading'><h3 class='panel-title'>Resultaat</h3>
  </div><div class='panel-body'>";
                    while($row = $res->fetch_assoc()) {
                        
                        echo "<br> Studentennummer: ". $row["Studentennummer"]. " - Vak: ". $row["Vak"]. " Resultaat: " . $row["Score"];
                        }
                    
                    }
                    else {
                        echo "0 results";
                    }
                    echo "</div></div></div></div>";
                    mysqli_close($conn);
    unset($conn);
                
        }
    
    
}

?>
</div>
</div>
