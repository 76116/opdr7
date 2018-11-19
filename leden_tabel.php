<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ledenbeheer</title>
<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="opmaak.css">
	</head>
<body>
	<img class="logo" src="img/ruilerij.png" alt="logo">

	
	<p>Je bent ingelogd als <?php echo $row['username'];?><br></p>
		
		
		
		
<?php
//verbinding met database
require 'config.php';

	
//maak de opdracht
$query = "SELECT * FROM BEROEPS_ruilerij_product, BEROEPS_ruilerij_inlog";

//Voer de opdr uit
//Zet het resultaat in een var
$result = mysqli_query($mysqli, $query);

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
echo "<th>Gebruikernaam</th>"; //test

	
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
echo "<td class='td'>" . $row['username'] . "</td>"; //test


 
	
//eind tabelrijen 		
echo "</tr>";
}
	
//eind tabel 		
echo "</table>";


?>
	<p><a class="btnred" href="product_nieuw.php">Voeg een nieuw product toe</a></p>
	<a class="btnpurple" href="logout.php">Uitloggen</a>
	
	<style> 
		img{
			height: 200px;
		}
		tr:nth-child(even){
			background: purple
		}
		tr:nth-child(odd){
			background: white
		}
		tr{
			margin-left: 15px;	
				font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";


		}
		

	</style>
</body>
</html>