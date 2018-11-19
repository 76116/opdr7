<?php
//database logingegeven
$db_hostname = 'localhost';
$db_username = 'ns';
$db_password = 'nisastef123';
$db_database = 'Nisa_Stephanie';
	
//maak de database verbinding
	$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
	
//Als de verbinding niet gemaakt kan worden: geef een melding
if (!$mysqli){
	echo "FOUT: geen connectie naar database. <br>";
	echo "Errno: " . mysqli_connect_errno() . "<br>";
	echo "Error: " . mysqli_connect_error() . "<br>";	
	exit;
}
	
?>