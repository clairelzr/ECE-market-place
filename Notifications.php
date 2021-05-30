<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"
	 href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-md">
         <a class="navbar-brand" href="enchere.jpg">
             <div class="b-logo swift_left">
                        <img src="enchere.jpg" alt="ECE MarketPlace" class="img-fluid" width="105" height="200">
            </div>
         </a>
         <h2 class="text-muted">ECE Market Place</h2>
         <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="main-navigation">
             <ul class="navbar-nav">
                 <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                 <li class="nav-item"><a class="nav-link" href="toutparcourir.php">Tout Parcourir</a></li>
                 <li class="nav-item"><a class="nav-link" href="Notifications.php">Notifications</a></li>
                 <li class="nav-item"><a class="nav-link" href="Panier.php">Panier</a></li>	
			</ul>
			<ul id="menu-accordeon">
   				<li><a href="#">Votre compte</a>
      			<ul>
         			<li><a href="Acheteurconnexion.php">Acheteur</a></li>
         			<li><a href="Vendeurconnexion.php">Vendeur</a></li>
         			<li><a href="Adminconnexion.php">Admin</a></li>
      			</ul>
   				</li>
			</ul>

		</div>
     </nav>

     <br><br><br><br><br><br>
     <main>
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-lg-12" id="leftPart">
						<h3>Notifications</h3>
						<?php 
							if (isset($_SESSION['noma'])) {
								echo "Bonjour ".$_SESSION['prenoma'].", Vous n'avez pas encore de notifications.";
							}
							if (isset($_SESSION['nomv'])) {
								echo "Bonjour ".$_SESSION['prenomv'].", Vous n'avez pas encore de notifications.";
							}
							
						?>
					</div>
					
				</div>
			</div>
		</div>
	</main>

     <footer class="py-2 bg-info fixed-bottom">
		<div class="container">
			<p class="m-0 text-center text-white">Coordonnées pour nous joindre - Téléphone : 01.22.33.44.55 - Email : <a href="mailto:a@gmail.com">redouane.idary@edu.ece.fr</a><br>
		<small>Copyright &copy; - 2021 - All Right Reserved</small></p>
		</div>
	</footer>
</body>
</html>