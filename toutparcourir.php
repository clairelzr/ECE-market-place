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

     <!-- Partie permettant d'afficher tout les item mis en vente et contenu dans la base de donnée  -->

     <br><br><br><br><br><br>
     <main>
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-lg-12" id="leftPart">
						
						<h2>Voici nos articles mis en ligne</h2>
						<br>
						
						<div class="container">
							<h3>Achat immédiat</h3>
							<?php
								$sql = "SELECT * FROM item WHERE Categorie='Achat immediat'";
								$database = "Projet1";
								$db_handle = mysqli_connect('localhost', 'root', '');
								$db_found = mysqli_select_db($db_handle, $database);
							?>
							
									<?php 
										$result = mysqli_query($db_handle, $sql);
										
										while ($data = mysqli_fetch_assoc($result)) { ?>
											<form action='ajouterpanier.php' method='post'>
											<div class="row elements">
												<div class="col-lg-12"> <?php
													$a = $data['Image'];
													echo "<a href='$a'><img src='$a' align=left></a>";
													echo "<p>".$data['Description']."</p><br>";
													echo "<input type='submit' class='button' name='button' value='Ajouter au panier'>";
													
											

													$sql1 = "SELECT ID_item FROM item WHERE Image='$a'";
													$result1 = mysqli_query($db_handle, $sql1); 
													while($data1 = mysqli_fetch_assoc($result1)){
													$b = $data1['ID_item'];
													$_SESSION['ID_item'] = $data['ID_item'];}
										}

									?>

									</form>
								</div>
								
								
							</div>
							<h3>Transaction client-vendeur</h3>
							<div class="row elements">
								<?php
								$sql = "SELECT * FROM item WHERE Categorie='Transaction vendeur-client'";
								$result = mysqli_query($db_handle, $sql);
										
								while ($data = mysqli_fetch_assoc($result)) { ?>
								
								<div class="row elements">
										<div class="col-lg-12"> <?php
											$a = $data['Image'];
											echo "<a href='$a'><img src='$a' align=left></a>";
											echo "<p>".$data['Description']."</p><br>";
											echo "<input type='submit' class='button' name='button' value='Ajouter au panier'>";
										}
									?>
									
								</div>
								
							
							<h3>Meilleure offre</h3>
							<div class="row elements">
								<?php
								$sql = "SELECT * FROM item WHERE Categorie='Meilleure offre'";
								$result = mysqli_query($db_handle, $sql);
										
								while ($data = mysqli_fetch_assoc($result)) {?>
								<div class="row elements">
										<div class="col-lg-12"> <?php
											$a = $data['Image'];
											echo "<a href='$a'><img src='$a' align=left></a>";
											echo "<p>".$data['Description']."</p><br>";
											echo "<input type='submit' class='button' name='button' value='Ajouter au panier'>";
										}
									?>
									
								</div>
							</div>
						</div>
						</div>
					</form>
						<div class="col-lg-3" id="rightPart">
							
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