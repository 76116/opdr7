<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<?php 
	
	
	require 'config.php';

	if (isset($_POST['submit'])){
	
	$titel = $_POST['titel'];
	$info = $_POST['info'];
	$bestand = $_POST['id'] . '.jpg';
	$map = __DIR__ . "/uploads/";	
	
	// controleer of alle formuliervelden waren ingevuld
	
	if (strlen($titel) > 0 &&
	   strlen($info)   > 0 &&
	   $_FILES['foto']){
		   
		echo "upload";
			   
				//move file to dir
				move_uploaded_file($_FILES['foto']['tmp_name'], $map . $bestand);
		
				//alle data zijn OK, maak nu query
			   
			   $query = "INSERT INTO BEROEPS_ruilerij_product			  
			   VALUES (NULL, '$titel', '$info')";
			   
			   
			   //voer nu query uit
			   
			   $result = mysqli_query($mysqli, $query);
			   
			   //controleer het resultaat
			   
			   if($result) {
				  // header("Location:leden_tabel.php");
				   exit;
			   } 
			   else {
				   echo 'Er ging wat mis met het toevoegen!';
				   echo "<p>" . $query . "</p>";
				   echo var_dump($_POST);
					echo "<p>" . mysqli_error($mysqli) . "</p>"; 
			   }
		   } 
	}
	 else {
			   echo 'Een van de ingevulde data was ongeldig'; 
		   }
	?>
</body>
</html>
