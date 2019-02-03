<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "royalart";


$conn = new mysqli($server, $user, $password, $dbname);
    error_reporting(E_ALL ^ E_DEPRECATED);
    mysqli_connect("localhost","root","", "royalart");
    $rezultat = mysqli_query($conn,"DELETE FROM contact WHERE id={$_GET['id']} LIMIT 1");
	
if(mysqli_affected_rows($rezultat)==1)
{
	print"promijene su unijete u tablicu. <br/>";
	print"<a href=index.php>Pocetna</a> <br/>";
	print"promijene su unijete u tablicu. <br/>";
	print"promijene su unijete u tablicu. <br/>";
}
else
{	
	print "<br/>";
	print"<h1>promijene nisu.</h1> <br/>";
}
?>