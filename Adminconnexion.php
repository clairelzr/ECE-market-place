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

	<!-- Permet d'afficher les champs permettant de se connecter lorsque aucun admin n'est encore connecté -->

	<br><br><br><br><br><br>
	<main>
		<div class="container">
			<div class="row">
				<div class="row">
					<?php 
					if(!isset($_SESSION["noma"])){
						?>
						<div class="col-lg-12" id="leftPart">
							
							<h2>Connectez-vous</h2>
							<br>
							<div class="container">
								<h3>Espace Admin</h3>
								<form action="connexiona.php" method="post">
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
											<label for="mdp">Mot de passe  :</label>
											<input type="password" class="form-control" id="mdp" name="mdpa" placeholder="Votre mot de passe">
										</div>
									</div>
									<input type="submit" class="button" name="button" value="Se connecter">
								</form>
								<br><br><br><br><br><br><br><br>
								
							</div>
						</div>
						<?php
					}else{
						?>
						<div class="container">
							<div class="row">
								<div class="row">
									<div class="col-lg-12" id="leftPart">

										<!-- Message de bienvenue qui s'affiche lorsqu'un admin s'est connecté -->

										<h3>Espace Admin</h3>
										<?php
										echo "Bonjour ".$_SESSION["prenoma"]." !";
										?>
										<div class="row">
											
											<div class="col-sm-12">
												
												<form action="logout.php" method="post">
													<input type="submit" class="button" name="button" value="Se déconnecter">
												</form>
											</div>
										</div>
										<div class="col-lg-12" id="leftPart">

											<!-- partie permettant à un admin connecté d'ajouter/supprimer un vendeur et d'ajouter/supprimer un item -->
											
											<h2>Ajouter un Vendeur</h2>
											<br>
											<div class="container">
												<h3>Vous voulez ajouter un vendeur ? Rentrez ses informations !</h3>
												<form action="ajoutervendeur.php" method="post">
													<div class="row elements">
														
														<div class="col-sm-12">
															<label for="nom">Nom :</label>
															<input type="text" class="form-control" id="nom" name="nomnv" placeholder="Nom">
														</div>
														<div class="col-sm-12">
															<label for="prenom">Prénom :</label>
															<input type="text" class="form-control" id="prenom" name="prenomnv" placeholder="Prénom">
														</div>
														<div class="col-sm-12">
															<label for="mdp">Email :</label>
															<input type="text" class="form-control" id="mdp" name="mailnv" placeholder="Email">
														</div>
														<div class="col-sm-12">
															<label for="mdp">Mot de passe :</label>
															<input type="password" class="form-control" id="mdp" name="mdpnv" placeholder="Mot de passe">
														</div>
														
														<input type="submit" class="button" name="button1" value="Ajouter">
								<!--<?php 
									
									//echo "bonjour ".$_SESSION['ID_vendeur'];	
									
								?>-->
							</div>
							
							<br>
						</form>
						
						<br><br>
						
					</div>
					<h2>Supprimer un Vendeur</h2>
					<br>
					<div class="container">
						<h3>Vous voulez supprimer un vendeur ? Rentrez ses informations !</h3>
						<form action="supprimervendeur.php" method="post">
							<div class="row elements">
								
								<div class="col-sm-12">
									<label for="nom">Nom :</label>
									<input type="text" class="form-control" id="nom" name="nomnv" placeholder="Nom">
								</div>
								<div class="col-sm-12">
									<label for="prenom">Prénom :</label>
									<input type="text" class="form-control" id="prenom" name="prenomnv" placeholder="Prénom">
								</div>
								<div class="col-sm-12">
									<label for="mdp">Email :</label>
									<input type="text" class="form-control" id="mdp" name="mailnv" placeholder="Email">
								</div>
								
								<input type="submit" class="button" name="button1" value="Supprimer">
								<!--<?php 
									
									//echo "bonjour ".$_SESSION['ID_vendeur'];	
									
								?>-->
							</div>
							
							<br>
						</form>
						
						<br><br><br><br>
						
						
					</div>
					<div class="container">
						<h3>Vous avez un bien à vendre ? Remplissez scrupuleusement tout les champs et on s'occupe du reste !</h3>
						<form action="itemvendeur.php" method="post">
							<div class="row elements">
								
								<div class="col-sm-12">
									<label for="nom">Nom :</label>
									<input type="text" class="form-control" id="nom" name="nomi" placeholder="Nom de l'item">
								</div>
								<div class="col-sm-12">
									<label for="prenom">Description :</label>
									<input type="text" class="form-control" id="prenom" name="descriptioni" placeholder="Courte description">
								</div>
								<div class="col-sm-12">
									<label for="mdp">Prix (en €) :</label>
									<input type="text" class="form-control" id="mdp" name="prixi" placeholder="Prix">
								</div>
								<div class="col-sm-12">
									<label for="mdp">Image :</label>
									<input type="file" class="form-control" id="mdp" name="imagei" placeholder="Choisir un fichier">
								</div>
								<div class="col-sm-12">
									<label for="mdp">Catégorie :</label>
									<form>
										<SELECT name="categoriei" size="1">
											<OPTION>Achat immediat
												<OPTION>Transaction vendeur-client
													<OPTION>Meilleure offre
													</SELECT>
												</form>
											</div>
											<input type="submit" class="button" name="button1" value="Ajouter">
								<!--<?php 
									
									//echo "bonjour ".$_SESSION['ID_vendeur'];	
									
								?>-->
							</div>
							
							<br>
						</form>
						
						<br><br><br><br>
						
					</div>
					<h2>Supprimer un Item</h2>
					<br>
					<div class="container">
						<h3>Vous voulez supprimer un item ? Rentrez ses informations !</h3>
						<form action="supprimeritem.php" method="post">
							<div class="row elements">
								
								<div class="col-sm-12">
									<label for="nom">Nom :</label>
									<input type="text" class="form-control" id="nom" name="nomnv" placeholder="Nom">
								</div>
								<div class="col-sm-12">
									<label for="prenom">Description :</label>
									<input type="text" class="form-control" id="prenom" name="prenomnv" placeholder="Description">
								</div>
								<div class="col-sm-12">
									<label for="mdp">Votre Email :</label>
									<input type="text" class="form-control" id="mdp" name="mailnv" placeholder="Email">
								</div>
								
								<input type="submit" class="button" name="button1" value="Supprimer">
								<!--<?php 
									
									//echo "bonjour ".$_SESSION['ID_vendeur'];	
									
								?>-->
							</div>
						</div>
						
						<br>
						
						
						
						<br><br><br><br>
						
					</div>
				</div>
				
			</div>
		</div>
		<?php	
	}
	?>
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