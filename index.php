<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
	<link rel="stylesheet" href="style_stef.css">
</head>

<body>
	
	
	<img class="logo" src="img/ruilerij.png" alt="#">
	
	<ul class="inlog">

	</ul>
	
	<!-- rechtsboven komt inloge/registreren -->
	<hr>
	
		<header class="topnav">
		<ul>
     	 <li><a id="home" href="index.php">Home</a></li>
	  <li><a href="home2.php">Inloggen</a></li>
	  <li><a href="aanmelden_user.php">Registreren</a></li>
		<li><a href="contact.php">Contact</a></li>
		</ul>
	</header>
	
	 <img id="banner" src="images/banner_new.jpg" alt="banner ruilrij">
	
<?php
	require 'config.php';
	
	$query = "SELECT * FROM BEROEPS_ruilerij_product WHERE 1=1 LIMIT 0,5";
	
	$result = mysqli_query($mysqli, $query);
//	$last5 = mysqli_query($query . "WHERE is_active = '0' ORDER BY id DESC LIMIT 5");
	
	
//var_dump($result);  code testen kijken het goed is
	
//start tabel
echo "<table>";
//start tabelrijen kopjes
echo "<tr>"; 
//cellen voor kopjes
echo "<th>ID</th>";
echo "<th>Titel</th>";
echo "<th>Product</th>";
echo "<th>Informatie</th>";

//eind tabelrijen kopjes 
echo "</tr>";
//gegevens van de rij tonen
while($row = mysqli_fetch_array($result))
{
echo "<tr class='lijn'>";
// cellen voor gegvens 
echo "<td class='td'>" . $row['id'] . "</td>";
echo "<td class='td'>" . $row['titel'] . "</td>"; 
echo "<td class='td'>"; 
if (file_exists( 'uploads/' . $id . '.jpg')){
echo "<p><img src='uploads/" . $id . ".jpg' alt='foto'></p>";
} else{
echo  $id . '.jpg bestaat niet!';
} 

echo "<td class='td'>" . $row['informatie'] . "</td>"; 


 
//eind tabelrijen
echo "</tr>";
}
//eind tabel
echo "</table>";
	
?>
</body>
</html>
