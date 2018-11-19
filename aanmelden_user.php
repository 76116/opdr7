<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User aanmaken</title>
<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="opmaak.css">
</head>

<body>
        <img class="logo" src="img/ruilerij.png" alt="">
	<form method="post" action="aanmelden_user_verw.php">
	<table>
			<tr>
			<td><h2>Voeg een user toe:</h2></td>
			</tr>
			<tr>
			<td><a>email: </a></td>
			<td><input type="email" name="email" required></td>
			</tr><br>
			<tr>
			<td><a>gebruikersnaam: </a></td>
			<td><input type="text" name="gebr" required></td>
			</tr><br>
			<tr>
			<td><a>wachtwoord: </a></td>
			<td><input type="password" name="ww" required></td>
			</tr><br>
			<tr>
			<td><a>level: </a></td>
			<td><input type="text" name="lvl" required></td>
			</tr><br>
			<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Verzenden"></td>
			<tr>
		</table>
	</form>
	<br>
	<button class="btnred"><a href="home2.php">LOG IN</a></button>
<!-- http://bijlsma.ict-lab.nl/back13/band_uitlees.php -->
</body>
</html>
