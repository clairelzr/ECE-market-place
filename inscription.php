<?php
	
	session_start();

	/* code php permettant à un acheteur de s'inscrire*/
	
	$nom = isset($_POST["noma"])? $_POST["noma"] : "";
	$prenom = isset($_POST["prenoma"])? $_POST["prenoma"] : "";
	$mdp = isset($_POST["mdpa"])? $_POST["mdpa"] : "";
	$mail = isset($_POST["emaila"])? $_POST["emaila"] : "";
	$cb = isset($_POST["cba"])? $_POST["cba"] : "";

	$database = "Projet1";

	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if(isset($_POST["button"])){
		if($db_found){
			$sql = "SELECT * FROM acheteur ";
			if($nom != "" && $prenom != "" && $mdp != ""){
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
				
				$sql = "SELECT ID_acheteur FROM acheteur WHERE Nom='$nom' AND Prenom='$prenom'";
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				$_SESSION["noma"] = $nom;
				$_SESSION["prenoma"] = $prenom;
				$_SESSION['ID_acheteur'] = $data['ID_acheteur'];

			
			}
		}else{
			echo "Base de donnée non trouvée.";
		}
	}

	mysqli_close($db_handle);

?>

