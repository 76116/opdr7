<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<?php	
	session_start();
	require 'config.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	
		
	if (strlen($username) > 0 && strlen($password) > 0){
		$password = $password;
		$query = "SELECT * FROM BEROEPS_ruilerij_inlog WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($mysqli, $query); 
		if (mysqli_num_rows($result) == 1) {
				header("Location:leden_tabel.php");
			}
		else{
				header("Location:index.php");
			exit;
		}
//		else{
//			echo "Niet alle velden zijn ingevuld!";
//			exit;
//		}
	}
	?>
</body>
</html>