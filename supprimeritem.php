<?php
	session_start();
	
	$nom = isset($_POST["nomnv"])? $_POST["nomnv"] : "";
	$description = isset($_POST["prenomnv"])? $_POST["prenomnv"] : "";
	
	/* Code php permettant de pouvoir supprimer un item du site*/

	$database = "Projet1";

	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if(isset($_POST["button1"])){
		if($db_found){
			$sql = "SELECT * FROM item";
			if($nom != "" && $prenom != ""){
				$sql .= " WHERE Nom LIKE '%$nom%' AND Description LIKE '%$description%'";
			}else{
				echo "Vous n'avez pas remplis un champ.";
			}
			$result = mysqli_query($db_handle, $sql);

			

			if(mysqli_num_rows($result)==0){
				echo "Cet item n'existe pas.";
			}else{
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				$a = $_SESSION['ID_vendeur'];
				
				
				$sql = "DELETE FROM item WHERE Nom='$nom' AND Description='$description'";
				echo $data['ID_vendeur'];
				$result = mysqli_query($db_handle, $sql);
				header('Location: index.php');
				
				$_SESSION['ID_vendeur'] = $data['ID_vendeur'];
			}

		}else{
			echo "Base de donnée non trouvée.";
		}
	}

	mysqli_close($db_handle);

?>