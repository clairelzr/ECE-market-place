<?php

	session_start();
	
	/* Code php permettant d'ajouter un item au panier */

	$database = "Projet1";

	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	$a = $_SESSION['ID_acheteur'];
	$b = $_SESSION['ID_item'];

	if(isset($_POST["button"])){
		if($db_found){
			$sql = "SELECT * FROM panier WHERE ID_acheteur='$a' AND ID_item='$b'";
			
			$result = mysqli_query($db_handle, $sql);

			if(mysqli_num_rows($result)!=0){
				echo "Cet article est déjà dans votre panier.";
			}else{
				$data = mysqli_query($db_handle, $sql);
				

				
				$sql = "INSERT INTO panier(ID_acheteur, ID_item) VALUES ('$a','$b')";
				$result = mysqli_query($db_handle, $sql);
				header('Location: Panier.php');
			
				
			}
		}else{
			echo "Base de donnée non trouvée.";
		}
	}

	mysqli_close($db_handle);

?>
