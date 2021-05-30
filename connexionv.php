<?php
	
	$nomv = isset($_POST["nomv"])? $_POST["nomv"] : "";
	$prenomv = isset($_POST["prenomv"])? $_POST["prenomv"] : "";
	$mdpv = isset($_POST["mdpv"])? $_POST["mdpv"] : "";

	$database = "Projet1";

	/* Code php permettant à un vendeur inscris de se connecter*/
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if(isset($_POST["button"])){
		if($db_found){
			$sql = "SELECT * FROM vendeur ";
			if($nomv != "" && $prenomv != "" && $mdpv != ""){
				$sql .= " WHERE Nom='$nomv' AND Prenom='$prenomv' AND Mdp='$mdpv'";
			}else{
				echo "Vous n'avez pas remplis un champ.";
			}
			$result = mysqli_query($db_handle, $sql);

			if(mysqli_num_rows($result)==0){
				echo "Compte non trouvé. Veuillez réessayer";
			}else{
				header('Location: index.php');
				session_start();
				$sql = "SELECT ID_vendeur FROM vendeur WHERE Prenom='$prenomv' AND Nom='$nomv'";
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				$_SESSION["nomv"] = $nomv;
				$_SESSION["prenomv"] = $prenomv;
				$_SESSION['ID_vendeur'] = $data['ID_vendeur'];


									
									
			}
		}else{
			echo "Base de donnée non trouvée.";
		}
	}

	mysqli_close($db_handle);

?>