<?php

	$database = "Projet1";

	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if (isset($_SESSION["nomv"])) {
		if ($db_found) {
			$sql = "SELECT * FROM item WHERE Nom LIKE '%$nom%' AND Description LIKE '%$description%' AND Categorie='$categorie' AND Image='$image'";
			$result = mysqli_query($db_handle, $sql);
			if (mysqli_num_rows($result)==0) {
				echo "Aucun item n'est mis en vente";
			}else{
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>" . "Nom" . "</th>";
				echo "<th>" . "Description" . "</th>";
				echo "<th>" . "Prix" . "</th>";
				echo "<th>" . "Categorie" . "</th>";
				echo "<th>" . "Image" . "</th>";
				echo "</tr>";

				while ($data = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $data['Nom'] . "</td>";
					echo "<td>" . $data['Description'] . "</td>";
					echo "<td>" . $data['Prix'] . "</td>";
					echo "<td>" . $data['Categorie'] . "</td>";
					$image = $data['Couverture'];
					echo "<td>" . "<img src='$image' height='120' width='100'>" ."</td>";
					echo "</tr>";
				}
				echo "</table>";

			}
		}else{
			echo "BDD non trouvée";
		}

	}

	mysqli_close($db_handle);
?>