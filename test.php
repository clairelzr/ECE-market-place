

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	$database= "Projet1";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	session_start();
				$sql = "SELECT ID_vendeur FROM vendeur WHERE Prenom='abdel' AND Nom='idary'";
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				
				$_SESSION['ID_vendeur'] = $data['ID_vendeur'];

				$a = $data['ID_vendeur'];
				echo $a;

	?>


</body>
</html>