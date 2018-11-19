<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inloggen</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<img class="logo" src="img/ruilerij.png" alt="#">
	
	<form action="login.php" method="post">
		<p>
			<label for="username">Gebruiker:</label>
			<input type="text" name="username" id="username" required>
		</p>
		<p>
			<label for="password">Wachtwoord:</label>
			<input type="password" name="password" id="password" required>
		</p>
		<p>
			<input type="submit" name="submit" id="submit" value="Inloggen">
		</p>	
	</form>

</body>
</html>
