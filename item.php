<?php

	$nom = isset($_POST["nomi"])? $_POST["nomi"] : "";
	$description = isset($_POST["descriptioni"])? $_POST["descriptioni"] : "";
	$prix = isset($_POST["prixi"])? $_POST["prixi"] : "";
	$categorie = isset($_POST["categoriei"])? $_POST["categoriei"] : "";
	$image = isset($_POST["imagei"])? $_POST["imagei"] : "";

	$database = "Projet1";

	/* code php permettant d'insérer un nouvel item saisis par l'utilisateur et l'introduire dans la base de donnée*/
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if(isset($_POST["button"])){
		if($db_found){
			$sql = "SELECT * FROM item ";
			if($nom != "" && $description != "" && $prix != ""){
				$sql .= "WHERE Nom LIKE '%$nom%' AND Prenom LIKE '%$prenom%' AND Mdp='$mdp' AND CoordBancaire='$cb'";
				if($preference!=""){
					$sql .= "AND Preference LIKE '%$preference%'";
				}
			}else{
				echo "Vous n'avez pas remplis un champ.";
			}
			$result = mysqli_query($db_handle, $sql);

			if(mysqli_num_rows($result)!=0){
				echo "Vous êtes déjà inscris.";
			}else{
				$sql = "INSERT INTO acheteur(Mail, Nom, Mdp, Prenom, CoordBancaire) VALUES ('$mail', '$nom', '$mdp', '$prenom', '$cb')";
				$result = mysqli_query($db_handle, $sql);
				header('Location: index.php');
				session_start();
				$_SESSION["noma"] = $nom;
				$_SESSION["prenoma"] = $prenom;
			
			}
		}else{
			echo "Base de donnée non trouvée.";
		}
	}

	mysqli_close($db_handle);

?>