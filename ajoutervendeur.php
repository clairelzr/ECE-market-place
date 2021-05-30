<?php
	session_start();
	
	$nom = isset($_POST["nomnv"])? $_POST["nomnv"] : "";
	$prenom = isset($_POST["prenomnv"])? $_POST["prenomnv"] : "";
	$mdp = isset($_POST["mdpnv"])? $_POST["mdpnv"] : "";
	$mail = isset($_POST["mailnv"])? $_POST["mailnv"] : "";
	
	/* Code php permettant d'ajouter un vendeur à la base de donnée */

	$database = "Projet1";

	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if(isset($_POST["button1"])){
		if($db_found){
			$sql = "SELECT * FROM vendeur";
			if($nom != "" && $prenom != "" && $mdp != "" && $mail != ""){
				$sql .= " WHERE Nom LIKE '%$nom%' AND Prenom LIKE '%$prenom%' AND Mdp='$mdp' AND Mail='$mail'";
			}else{
				echo "Vous n'avez pas remplis un champ.";
			}
			$result = mysqli_query($db_handle, $sql);

			

			if(mysqli_num_rows($result)!=0){
				echo "Ce vendeur existe déjà.";
			}else{
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				$a = $_SESSION['ID_vendeur'];
				
				
				$sql = "INSERT INTO vendeur(Nom, Prenom, Mdp, Mail) VALUES ('$nom', '$prenom', '$mdp', '$mail')";
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