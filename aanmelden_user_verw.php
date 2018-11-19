
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User verw</title>
</head>

<body>
<?php
if (isset($_POST['submit']))
{
	require'config.php';

	$email = $_POST['email'];
	$gebr = $_POST['gebr'];
	$ww = $_POST['ww'];
	$lvl = $_POST['lvl'];
	
	$query = "INSERT INTO BEROEPS_ruilerij_inlog VALUES (NULL, '$email', '$gebr', '$ww', '$lvl' )";	
	
	if (mysqli_query($mysqli, $query)){
	echo "<p> User $gebr is toegevoegd!";
	}
	else{
	echo "Fout bij toevoegen </p>";
	echo "Query: $query<br>";
	echo "Foutmelding: " .mysqli_error($mysqli);
	}
}
else
{
	echo "Geen gegevens ontvangen...";
}
echo "<br><a href='oef22_user.php'>Terug</a>";
	
?>
<br><br>
<button><a href="logout.php">UITLOGGEN</a></button>
</body>
</html>