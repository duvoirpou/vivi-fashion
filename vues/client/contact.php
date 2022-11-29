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
	<link rel="icon" href="images/vivicon.png" />
	<title>Vivi-Fashion</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="layout/style.css" type="text/css" media="all" />

	<!-- Favicon  -->
	<link rel="icon" href="images/vivicon.png" />
	<!-- -->

	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->

	<link type="text/css" rel="stylesheet" href="layout/csstyle.css" />
	<link type="text/css" rel="stylesheet" href="layout/styleI.css" />
	<link type="text/css" rel="stylesheet" href="layout/css/styleMenu.css" />
	<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="layout/mon_bootstrap.css"> -->
	<link rel="stylesheet" href="layout/bootstrap4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="layout/sweetalert2/dist/sweetalert2.min.css"/>
	<script src="layout/fontawesome_free_5_2_0_web/js/all.js" type="text/javascript"></script><!-- icon -->
	

	

</head>

<body>
	<!-- <div class="container-fluid" style="background-color:#FAEBD7; height:120px; position:absolute; z-index:4; opacity:0.7;"></div> -->
	<div class="shell" style="width: 980px; height: auto">

	<?php if(isset($_SESSION['nom_client'])){ echo '
  <div id="header" class="header" style="margin-top:10px; ">';}else{echo '
  <div id="header">';}?>




		
			<!--<h1 id="logo" style="color:white; font-size:50px"><a href="#">shoparound</a></h1>-->
			<div class="vivi">
			<nav class="navbar navbar-light " style="background-color: #778899;">
				<span class="navbar-brand" href="#"
					style="color:white; font-size:29px; margin-top:-13px; margin-left:-16px; font-family: Verdana; text-shadow: 2px 2px 4px black; ">

					<b>Vivi-Fashion</b>
				</span>
			</nav>
		</div>
		<!-- Cart -->
		<div id="cart" style="width: 190px; height: 64px;"> <a href="?c=pan" class="cart-link" style="color: white;"><i class="fab fa-opencart" style="font-size:16px;"></i>Voir le panier</a>
			<div class="cl">&nbsp;</div><?php
	  
	  
	  //compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["list"]))
{
  $panier_count = sizeof($_SESSION["list"]);
}?>
			<span>
				<center> Articles : <strong><?php print $panier_count; ?></strong></center>
			</span> &nbsp;&nbsp;



			<?php
	  ?>
		</div>
			<!-- End Cart -->
			<!-- Navigation -->

			<div class="client" style="width:177px">
				<?php

				if(isset($_SESSION['nom_client'])){
				echo '<div style="background-color:; margin-left:" class="nom_client" ><b>'.$_SESSION['nom_client'].'</b>|<a href="?c=dcx_client"><b>déconnexion</b></a></div>';}
			?>
			</div>

			<div id="navigation">
				<ul>
					<li><a href="?c" class="a">Accueil</a></li>
					<li><a href="produits.php" class="a">Produits</a></li>

					<?php
									if(!isset($_SESSION['id_client'])){
									echo '<li><a href="?c=commande" class="a">Mon Compte</a></li>';}
									?>

					<?php
									if(isset($_SESSION['id_client'])){
									echo '<li><a href="?c=Comm" class="a">Mes commandes</a></li>';}
									?>

					<li><a href="?c=pan" class="a">Mon Panier</a></li>
					<li><a href="?c=contact" class="active a">Contact</a></li>
				</ul>
			</div>
			<!-- End Navigation -->
		
			</div>

	
	<br><br><br><br><br>

	<div class="card" style="border: none">
		<div class="card-body" style="text-align: center">
			<h2 class="card-title" style="font-size:26px">Contact Info</h2><br>
			<p class="card-text">APC Inc. <br><br> Nous sommes au 132 rue Lekana Moungali,<br><br>Brazzaville Congo <br><br> Mobile: +242 06 9897169 <br><br> Fax: 1-714-252-0026 <br><br> Email: apc@gmail.com</p>
		</div>
	</div>
	<br><br><br>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title text-center">Ecrivez-nous en cas de besoin</h5>
			<form action="" method="post" id="insc">
			<br>
			<div class="form-group">
				<label for="identite">Nom(s) et prénom(s)</label>
				<input id="identite" class="form-control" type="text" name="identite">
			</div>
			<br>
			<div class="form-group">
				<label for="mail">Email</label>
				<input id="mail" class="form-control" type="text" name="mail">
			</div>
			<br>
			<div class="form-group">
				<label for="tel">Tel</label>
				<input id="tel" class="form-control" type="text" name="tel">
			</div>
			<br>
			<div class="form-group">
				<label for="msg">Message</label>
				<textarea id="msg" class="form-control" type="text" name="msg" cols="40" rows="4"></textarea>
			</div>
			<br>
			<div class="form-group" style="">
			<!-- <button style="margin-left: 0px" type="submit" name="ajouter" id="" class="btn btn-primary btn-sm " >Envoyez</button> -->
				
			<input id="submitform" class="btn btn-primary" name="ajouter" style="margin-left: 0px" type="submit" value="Enrégistrer" />
				<!-- <button type="reset" class="btn btn-danger btn-sm btn-block">Annuler</button> -->
				</div>
				</form>
		</div>
	</div>


	

<?php include('footer.php'); ?>
	


	</div>
	</div><!-- SHELL FIN -->

	






	<!-- <script src="js/jquery-3.3.1.min.js"></script> -->
	<script src="layout/bootstrap4/js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="layout/sweetalert2/dist/sweetalert2.min.js"></script>
	<script src="js/contact.js"></script>

</body>

</html>