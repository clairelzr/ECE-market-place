<?php
	
	$noma = isset($_POST["noma"])? $_POST["noma"] : "";
	$prenoma = isset($_POST["prenoma"])? $_POST["prenoma"] : "";
	$mdpa = isset($_POST["mdpa"])? $_POST["mdpa"] : "";

	$database = "Projet1";

	/* Code php permettant à un admin de se connecter*/

	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if(isset($_POST["button"])){
		if($db_found){
			$sql = "SELECT * FROM admin ";
			if($noma != "" && $prenoma != "" && $mdpa != ""){
				$sql .= " WHERE Nom='$noma' AND Prenom='$prenoma' AND Mdp='$mdpa'";
			}else{
				echo "Vous n'avez pas remplis un champ.";
			}
			$result = mysqli_query($db_handle, $sql);

			if(mysqli_num_rows($result)==0){
				echo "Compte non trouvé. Veuillez réessayer";
			}else{
				header('Location: index.php');
				session_start();
				$sql = "SELECT ID_admin FROM admin WHERE Prenom='$prenoma' AND Nom='$noma'";
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				$_SESSION["noma"] = $noma;
				$_SESSION["prenoma"] = $prenoma;
				$_SESSION['ID_admin'] = $data['ID_admin'];						
			}
		}else{
			echo "Base de donnée non trouvée.";
		}
	}

	mysqli_close($db_handle);

?>