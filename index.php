<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">

 /* code javascript de monsieur Hina afin de pouvoir donner un effet dynamique au carrousel*/
	$(document).ready(function() {
		var $img = $('#carrousel img');
		var max = $img.length;
		var i = 0; // compteur
		$img.css('margin-left','0').css('display', 'none'); //on cache les images
		$img.eq(i).css('display', 'inline'); //on affiche l'image courante
$img.eq(i+1).css('margin-left','200px').css('display', 'inline');
$img.eq(i+2).css('margin-left','400px').css('display', 'inline');
$img.eq(i+3).css('margin-left','600px').css('display', 'inline');
//si on clique sur « next » ou « > »
$('.next').click(function () { // image suivante
 i+=4; // on incrémente le compteur
 if (i < max-4) {
 i = i+4;
 $img.css('margin-left','0').css('display', 'none'); //on cache
 $img.eq(i).css('display', 'inline'); //on affiche l'image courante
 $img.eq(i+1).css('margin-left','200px').css('display', 'inline');
 $img.eq(i+2).css('margin-left','400px').css('display', 'inline');
 $img.eq(i+3).css('margin-left','600px').css('display', 'inline');
} else {
 i = 0;
 }
 });
//si on clique sur « prev » ou « < »
 $('.prev').click(function () { // groupe des images précédentes
 i-=4; // on décrémente le compteur
 if (i >= 0) {
 $img.css('margin-left','0').css('display', 'none'); //on cache
 $img.eq(i).css('display', 'inline'); //on affiche l'image courante
 $img.eq(i+1).css('margin-left','200px').css('display', 'inline');
 $img.eq(i+2).css('margin-left','400px').css('display', 'inline');
 $img.eq(i+3).css('margin-left','600px').css('display', 'inline');
 } else {
 i = 0;
 }
 });
function slideImg() {
 setTimeout(function() {
 $img.eq(i).css('display', 'inline').css('transition-delay','0.25s');
 $img.eq(i + 1).css('margin-left','200px').css('display',
 'inline').css('transition-delay','0.5s');
 $img.eq(i + 2).css('margin-left','400px').css('display',
 'inline').css('transition-delay','0.75s');
 $img.eq(i + 3).css('margin-left','600px').css('display',
 'inline').css('transition-delay','1s');
 if (i < max-4) {
i = i+4;
 } else {
i = 0;
 }
 $img.css('margin-left','0').css('display', 'none');
 $img.eq(i).css('display', 'inline').css('transition-delay','1.25s');
 $img.eq(i + 1).css('margin-left','200px').css('display',
 'inline').css('transition-delay','1.5s');
 $img.eq(i + 2).css('margin-left','400px').css('display',
 'inline').css('transition-delay','1.75s');
 $img.eq(i + 3).css('margin-left','600px').css('display',
 'inline').css('transition-delay','2s');
slideImg();
}, 4000);
}
slideImg();
});

</script>




<body>


	<!-- Bloc de navigation situé au début de la page -->
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

     <br>

     <!-- Code de monsieur Hina permettant d'afficher le carrousel  -->
    <div id="wrapper">
		<div id="titre">
			<h1>Nos produits cultes</h1>
		</div>
		<div id="carrousel">
		<ul>
			<li><img src="ece.jpg" width="120" height="100"></li>
			<li><img src="fanchon.jpg" width="120" height="100"></li>
			<li><img src="bonnet.jpg" width="120" height="100"></li>
			<li><img src="meuble.jpg" width="120" height="100"></li>
			<li><img src="bague.jpg" width="120" height="100"></li>
			<li><img src="lotIphone.jpg" width="120" height="100"></li>
			<li><img src="naruto.jpg" width="120" height="100"></li>
			<li><img src="chemise.jpg" width="120" height="100"></li>
			<li><img src="chapeau.jpg" width="120" height="100"></li>
			<li><img src="piano.jpg" width="120" height="100"></li>
			<li><img src="ordinateur.jpg" width="120" height="100"></li>
			<li><img src="chaussure.jpg" width="120" height="100"></li>
		</ul>
		</div>
	</div>
	
	</div>

	<header>
		<h1>Bienvenue à ECE MarketPlace, le site pour faire les meilleures affaires !</h1>
	</header>
	<main>

		<!-- Partie permettant d'afficher le contenu explicatif de la page d'acceuil -->
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-lg-12" id="leftPart">
						
						<h2>Nos méthodes de ventes</h2>

						<div class="container">
							<div class="row elements">
								<div class="col-sm-4">
									<img src="achatimmediat.png" alt="logo">
								</div>
								<div class="col-sm-8">
									<h3>Achat immédiat</h3>
									<p>Vous avez besoin de gagner du temps ? Cette méthode de vente vous permez de directement acheter un article qui vous plait et le recevoir directement chez vous !</p>
									
								</div>
							</div>
							<div class="row elements">
								<div class="col-sm-4">
									<img src="clientvendeur.jpg" alt="logo">
								</div>
								<div class="col-sm-8">
									<h3>Transaction client-vendeur</h3>
									<p>Cette méthode permet de pouvoir négocier le prix d'un article directement avec le vendeur. Vous avez le droit à maximum 5 enchérissements successifs.</p>
									
								</div>
							</div>
							<div class="row elements">
								<div class="col-sm-4">
									<img src="enchere.jpg" alt="logo">
								</div>
								<div class="col-sm-8">
									<h3>Meilleure offre</h3>
									<p>Sortez les billets, cette méthode vous permet de pouvoir faire des enchères sur un article. </p>
									
								</div>
							</div>
						</div>
						<div class="col-lg-3" id="rightPart">
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</main>

	<footer class="py-2 bg-info fixed-bottom">
		<div class="container">
			<p class="m-0 text-center text-white">Coordonnées pour nous joindre - Téléphone : 01.22.33.44.55 - Email : <a href="mailto:a@gmail.com">redouane.idary@edu.ece.fr</a>
		<br><small>Copyright &copy; - 2021 - All Right Reserved</small></p>
		</div>
	</footer>
</body>
</html>