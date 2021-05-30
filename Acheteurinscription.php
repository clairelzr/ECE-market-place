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

	<!-- bar de navigation en haut de la page -->

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
     <!-- Permet d'afficher les champs à remplir afin qu'un acheteur s'inscrive sur le site -->

     <br><br><br><br><br><br>
     <main>
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-lg-12" id="leftPart">
						<?php
						if(!isset($_SESSION["prenoma"])){
						?>
						<h2>Inscrivez-vous en tant qu'acheteur</h2>
						<br>
						<form action="inscription.php" method="post">
						<div class="container">
							<h3>Espace acheteur</h3>
							<form action="connexion.php" method="post">
							<div class="row elements">
								
								<div class="col-sm-12">
									<label for="nom">Nom :</label>
									<input type="text" class="form-control" id="nom" name="noma" placeholder="Votre nom">
								</div>
								<div class="col-sm-12">
									<label for="prenom">Prénom :</label>
									<input type="text" class="form-control" id="prenom" name="prenoma" placeholder="Votre prenom">
								</div>
								<div class="col-sm-12">
									<label for="adress">Adresse :</label>
									<input type="text" class="form-control" id="adresse" name="adressea" placeholder="Votre adresse">
								</div>
								<div class="col-sm-12">
									<label for="prenom">Email :</label>
									<input type="text" class="form-control" id="email" name="emaila" placeholder="Votre email">
									<small id="emailHelp" class="form-text text-muted">On ne partagera pas votre email avec des tiers.</small>
								</div>
								<div class="col-sm-12">
									<label for="prenom">Carte Bleue :</label>
									<input type="text" class="form-control" id="cb" name="cba" placeholder="Votre code CB">
								</div>
								<br>
								
								<br>
								<div class="col-sm-12">
									<label for="mdp">Mot de passe  :</label>
									<input type="password" class="form-control" id="mdp" name="mdpa" placeholder="Votre mot de passe">
								</div>
								<div class="col-sm-12">
									<label for="preference">Préférence  :</label>
									<div>
										<input type="radio" id="check1" name="check1" value="check1">
  										<label for="check1">Meubles et objets d'art</label>
  									</div>
  									<div>
										<input type="radio" id="check2" name="check2" value="check2">
  										<label for="check2">Accessoire VIP</label>
  									</div>
  									<div>
  									
										<input type="radio" id="check3" name="check3" value="check3">
  										<label for="check3">Matériels scolaires</label>
  									</div>
								</div>
							</div>
							<input type="submit" class="button" name="button" value="S'inscrire">
							</form>
							<?php
						}
							?>
							
							<br><br><br><br><br><br><br><br>
							
						</div>
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