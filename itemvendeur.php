<?php
	session_start();
	
	$nom = isset($_POST["nomi"])? $_POST["nomi"] : "";
	$description = isset($_POST["descriptioni"])? $_POST["descriptioni"] : "";
	$prix = isset($_POST["prixi"])? $_POST["prixi"] : "";
	$categorie = isset($_POST["categoriei"])? $_POST["categoriei"] : "";
	$image = isset($_POST["imagei"])? $_POST["imagei"] : "";

	$database = "Projet1";

	/* Partie permettant d'inserer le nouvel item d'un vendeur dans la base de donnée*/
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if(isset($_POST["button1"])){
		if($db_found){
			$sql = "SELECT * FROM item";
			if($nom != "" && $description != "" && $prix != "" && $categorie != "" && $image != ""){
				$sql .= " WHERE Nom LIKE '%$nom%' AND Description LIKE '%$description%' AND Categorie='$categorie' AND Image='$image'";
			}else{
				echo "Vous n'avez pas remplis un champ.";
			}
			$result = mysqli_query($db_handle, $sql);

			

			if(mysqli_num_rows($result)!=0){
				echo "Cet article existe déjà.";
			}else{
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				$a = $_SESSION['ID_vendeur'];
				
				
				$sql = "INSERT INTO item(Nom, Description, Prix, Categorie, Image/*, ID_vendeur*/) VALUES ('$nom', '$description', '$prix', '$categorie', '$image'/*,$a*/)";
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