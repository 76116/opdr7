<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Loguit</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
	//start de sessions
	session_start();
	//Verwijder alle sessions
	session_destroy();
	//stuur de gebruiker naar inlogpagina
	header("location:index.php");
	
	?>
</body>
</html>