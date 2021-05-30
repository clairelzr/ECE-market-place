<?php
/* Partie permettant à n'importe quel personne de se déconnecter */
	session_start();
	session_destroy();
	header('Location: index.php');
?>

