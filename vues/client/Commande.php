<?php
// require 'modeles/classe_commande.php';

// $commande = new client();
//echo '<br><span style="color:red"><b>Table vaccination</b></span><br>';
	// $commande->connexionBdd();
	// $commande->ajoutClient();
?>



<!DOCTYPE html>
<html>

<head>
	<title>Vivi Fashion</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="layout/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->

<link type="text/css" rel="stylesheet" href="layout/csstyle.css"/>
<link type="text/css" rel="stylesheet" href="layout/styleI.css"/>
<link type="text/css" rel="stylesheet" href="layout/css/styleMenu.css"/>
<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="layout/sweetalert2/dist/sweetalert2.min.css"/>
<!-- <link rel="stylesheet" href="layout/mon_bootstrap.css"> -->
		<link rel="stylesheet" href="layout/bootstrap4/css/dataTables.bootstrap4.min.css">

	<!--===============================================================================================-->
	<!-- Favicon  -->
    <link rel="icon" href="images/vivicon.png"/>
			<!-- -->

	<!--===============================================================================================-->
	<script src="layout/fontawesome_free_5_2_0_web/js/all.js" type="text/javascript"></script><!-- icon -->
	
	<style>
		.input {
			width: 300px;

		}

		
	</style>

</head>

<body>
	<!-- <div class="container-fluid" style="background-color:#FAEBD7; height:120px; position:absolute; z-index:4; opacity:0.7;"></div> -->
	<div class="shell" style="width: 980px; height: auto">

		<?php if(isset($_SESSION['nom_client'])){ echo '
  <div id="header" classe="header" style="margin-top:10px; ">';}else{echo '
	<div id="header">';}?>

		<div id="header">
			<!--<h1 id="logo" style="color:white; font-size:50px"><a href="#">shoparound</a></h1>-->
			<div class="vivi" style="">
				<nav class="navbar navbar-light " style="background-color: #778899;">
				<span class="navbar-brand" href="#" style="color:white; font-size:29px; margin-top:-13px; margin-left:-16px; font-family: Verdana; text-shadow: 2px 2px 4px black; ">

						<b>Vivi-Fashion</b>
					</span>
				</nav>
			</div>
			<!-- Cart -->
			<div id="cart" style="width: 190px; height: 64px;"> <a href="?c=pan" class="cart-link"><i class="fab fa-opencart" style="font-size:16px;"></i>Voir le panier</a>
				<div class="cl">&nbsp;</div><?php
	  
	  
	  //compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["list"]))
{
  $panier_count = sizeof($_SESSION["list"]);
}?>
				<span>
					<center>Articles: <strong><?php print $panier_count; ?></strong></center>
				</span>
			</div>
			<!-- End Cart -->
			<!-- Navigation -->


			<div class="client" style="width:177px;">
				<?php

				if(isset($_SESSION['nom_client'])){
				echo '<div style="background-color:; margin-left:55px"><b>'.$_SESSION['nom_client'].'</b>| <a href="?c=dcx_client">déconnexion</a></div>';}
			?>
			</div>

			<div id="navigation">
				<ul>
					<li><a href="?c" class="a">Accueil</a></li>
					<li><a href="produits.php" class="a">Produits</a></li>

					<?php
									if(!isset($_SESSION['id_client'])){
									echo '<li><a href="?c=commande" class="active a">Mon Compte</a></li>';}
									?>

					<?php
									if(isset($_SESSION['id_client'])){
									echo '<li><a href="#" class="a">FAQ</a></li>';}
									?>

					<li><a href="?c=pan" class="a">Mon Panier</a></li>
					<li><a href="?c=contact" class="a">Contact</a></li>
				</ul>
			</div>
			<!-- End Navigation -->
		</div>


	</div><!-- Container fermé -->
	<br>

<!-- <div class="jumbotron">
	<h1 class="display-4">Title</h1>
	<p class="lead">Subtitle</p>
	<hr class="my-4">
	<p>Veuillez vous connecter avec votre identifiant(Login) et mot de passe afin de pouvoir effectuer une commande. Si vous n'avez pas de compte nous vous recommandons d'en créer un en vous inscrivant ; pour cela il suffit de cliquer sur le lien qui se trouve juste après le formulaire d'inscription.</p>
</div> -->

	<div class="card">
		<div class="card-body">
			<h4 class="card-title text-center">Connexion</h4>
			<!-- <p class="card-text">Content</p> -->
			<form id="" style="margin-top:30px;" method="POST" action="" enctype="multipart/form-data">

			<div class="form-group">
				<label for="identifiant">Login</label>
				<input id="identifiant" class="form-control" type="text" name="login" placeholder="votre login">
			</div>
			<div class="form-group">
				<label for="mdp">Mot de passe</label>
				<input id="mdp" class="form-control" type="password" name="mp_client" placeholder="votre mot de passe">
			</div>
			<div class="form-group">
					<input id="submitform" class="btn btn-primary" name="enregistrer" style="margin-left: 0px" type="submit" value="Valider" />
					&nbsp;
					<input id="resetform" style="margin-left: 0px" class="btn btn-danger" name="resetform" type="reset" value="Reset" />
			</div>

			</form>
		</div>
		<!--<div class="card-footer">
		 <?php
	  if(!isset($_SESSION['id_client'])){
	  echo '<p class="card-text text-center"><a href="?c=insc" style="text-decoration: none;">Cliquer ici pour creer un compte</a></p>';} ?>
		</div> -->
	</div>
	<br><br><br>
	<div class="card">
		<div class="card-body">
			<h4 class="card-title text-center">Inscription</h4>
			<!-- <p class="card-text">Content</p> -->
			<form method="POST" action="" id="insc">
				<div class="form-group">
					<label for="nom_client">Nom</label>
					<input type="text" class="form-control" name="nom_client" id="nom_client" placeholder="Votre nom" >
					<span id="erreur_nom_client" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label for="prenom_client">Prénom</label>
					<input type="text" class="form-control" name="prenom_client" id="prenom_client" placeholder="Votre prenom">
					<span id="erreur_prenom_client" class="text-danger"></span>
				</div>

				<div class="form-group">
						<label for="sexe_client">Sexe</label>
						<select id="sexe_client" class="form-control" name="sexe_client" id="sexe_client">
							<option value="">Sexe</option>
							<option value="M">M</option>
							<option value="F">F</option>
						</select>
						<span id="erreur_sexe_client" class="text-danger"></span>
				</div>		
				
				<div class="form-group">
					<label for="email_client">Adresse mail</label>
					<input type="email" class="form-control" id="email_client" name="email_client" placeholder="Votre adresse mail">
					<span id="erreur_email_client" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label for="login">Identifiant(login)</label>
					<input type="text" class="form-control" id="login" name="login" placeholder="Votre login">
					<span id="erreur_login" class="text-danger"></span>
				</div>
				
				<div class="form-group">
					<label for="mp_client">Mot de passe</label>
					<input type="password" class="form-control" id="mp_client" name="mp_client" placeholder="Votre mot de passe">
					<span id="erreur_mp_client" class="text-danger"></span>
				</div> 

				<div class="form-group">
					<label for="confirm_mp_client">Confirmez le mot de passe</label>
					<input type="password" class="form-control" id="confirm_mp_client" name="confirm_mp_client" placeholder="Confirmez votre mot de passe">
					<span id="erreur_confirm_mp_client" class="text-danger"></span>
				</div> 

				<div class="form-group">
					<label for="adresse_client">Adresse</label>
					<input id="adresse_client" class="form-control" type="text" name="adresse_client" placeholder="Votre adresse">
					<span id="erreur_adresse_client" class="text-danger"></span>
				</div>
				
				<div class="form-group">
					<label for="ville_client">Ville</label>
					<input id="ville_client" class="form-control" type="text" name="ville_client" placeholder="Votre ville">
					<span id="erreur_ville_client" class="text-danger"></span>
				</div>

				<div class="form-group">
					<label for="tel_client">Téléphone</label>
					<input id="tel_client" class="form-control" type="text" name="tel_client" placeholder="Votre numero de téléphone">
					<span id="erreur_tel_client" class="text-danger"></span>
				</div>

				<!-- <div class="form-group">
					<label for="date_insc">Date</label>
					<input id="date_insc" class="form-control" type="date" name="date_insc" placeholder="">
				</div> -->

				<input id="submitform" class="btn btn-primary" name="ajouter" style="margin-left: 0px" type="submit" value="Enrégistrer" />
			</form>
		</div>
	</div>

	<!-- Footer -->
	<?php include('footer.php'); ?>
	</div>

	
	<!-- End Footer -->

	</div>



	<!-- SHELL FIN -->








	<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
	<script src="layout/bootstrap4/js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="layout/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="js/inscription.js"></script>
</body>

</html>