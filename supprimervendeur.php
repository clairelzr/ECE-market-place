<?php
	session_start();

	/* Code permettant à un admin de supprimer un vendeur de la base de donnée*/
	
	$nom = isset($_POST["nomnv"])? $_POST["nomnv"] : "";
	$prenom = isset($_POST["prenomnv"])? $_POST["prenomnv"] : "";
	$mail = isset($_POST["mailnv"])? $_POST["mailnv"] : "";
	

	$database = "Projet1";

	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if(isset($_POST["button1"])){
		if($db_found){
			$sql = "SELECT * FROM vendeur";
			if($nom != "" && $prenom != "" && $mail != ""){
				$sql .= " WHERE Nom LIKE '%$nom%' AND Prenom LIKE '%$prenom%' AND Mail='$mail'";
			}else{
				echo "Vous n'avez pas remplis un champ.";
			}
			$result = mysqli_query($db_handle, $sql);

			

			if(mysqli_num_rows($result)==0){
				echo "Ce vendeur n'existe pas.";
			}else{
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				$a = $_SESSION['ID_vendeur'];
				
				
				$sql = "DELETE FROM vendeur WHERE Nom='$nom' AND Prenom='$prenom' AND Mail='$mail'";
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