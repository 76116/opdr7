<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Inschrijven</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>

	<h1>Nieuw lid inschrijven</h1>
	
<form action="product_nieuw_verwerk.php" method="post" enctype="multipart/form-data">
	<p>
		<label for="titel">Product naam:</label>
		<input type="text" name="titel" id="titel" required="required">
	</p>
	
	<p>
		<label for="info">Informatie:</label>
		<input type="text" name="info" id="info" required="required">
	</p>
	
	<p>
		<label for="foto">Foto:</label>
		<input type="file" name="foto" id="foto" required>
	</p>
	<p>
		<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Opslaan">
		<button class="btn btn-primary, bg-danger" onClick="history.back();return false;">Annuleren</button>
	</p>
</form>
<?php
	 if (file_exists( 'uploads/' . $id . '.jpg')){
//		echo "<p><img src='uploads/" . $id . ".jpg' alt='foto'></p>";
	 } else{
		 echo  $id . '.jpg bestaat niet!';
	 }

	?>
</body>
	
</html>