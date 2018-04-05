<?php
session_start();
if(($_SESSION['login'])) {
$myFile="text";
$fh = fopen($myFile, 'a') or die("can't open file");

fwrite($fh, $_GET['write']."\n");
echo $_GET['write']." has been written down on file";
}
else{
    echo "You are not logged in.";
}
?>