<?php
// Start the session
/* session_start(); */
// eventuellement vider le panier
if (isset($_GET["vider"]))
{
  //session_unset();
  unset($_SESSION['list']);
  unset($_SESSION['prix']);
}

if (isset($_GET["vide"]))
{
  unset($_SESSION['list'][$_GET['vide']]);
  
  header('location:?c=pan');
}

if (isset($_GET["send"]))
{
  unset($_SESSION['list'][$_GET['send']]);
}



?>

<!DOCTYPE html>
<html>

<head>
	<title>Vivi Fashion</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="layout/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->

	<link type="text/css" rel="stylesheet" href="layout/csstyle.css" />
	<link type="text/css" rel="stylesheet" href="layout/styleI.css" />
	<link type="text/css" rel="stylesheet" href="layout/css/styleMenu.css" />
	<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="layout/sweetalert2/dist/sweetalert2.min.css" />
	<!-- <link rel="stylesheet" href="layout/mon_bootstrap.css"> -->
	<link rel="stylesheet" href="layout/bootstrap4/css/dataTables.bootstrap4.min.css">

	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/vivicon.png" />

	<!--===============================================================================================-->
	<script src="layout/fontawesome_free_5_2_0_web/js/all.js" type="text/javascript"></script>
	<!-- icon -->



</head>

<body>
	<!-- Shell -->
	<div class="shell" style="width: 980px; height: auto">


		<?php if(isset($_SESSION['nom_client'])){ echo '
  <div id="header" classe="header" style="margin-top:10px">';}else{echo '
  <div id="header">';}?><?php echo '
    <!--<h1 id="logo" style="color:white; font-size:50px"><a href="#">shoparound</a></h1>-->
	<div class="vivi" style="" ><nav class="navbar navbar-light " style="background-color: #778899;">
	<span class="navbar-brand" href="#" style="color:white; font-size:29px; margin-top:-13px; margin-left:-16px; font-family: Verdana; text-shadow: 2px 2px 4px black; ">
    
								<b>Vivi-Fashion</b>
								</span>
								</nav></div>
    <!-- Cart -->'; ?>
		<!-- Header -->


		<!-- Cart --><?php
	  
	  
	  //compter elements dans panier
$panier_count = 0;
if (isset($_SESSION["list"]))
{
  $panier_count = sizeof($_SESSION["list"]);
  
  if ($panier_count < 1){
	  unset($_SESSION['prix']);
  }
  
  
}?><?php
									echo '
    <div id="cart" style="width: 190px; height: 64px;"> <a href="?c=pan" class="cart-link"><i class="fab fa-opencart" style="font-size:16px;"></i>Voir le panier</a>
      <div class="cl">&nbsp;</div>
      <span><center>Article(s): <strong>'; ?><?php print $panier_count; ?><?php
									echo '</strong></center></span> &nbsp;&nbsp; ';?>

		<?php /* $t=0; 
	
	
	if (isset($_SESSION["list"]) && isset($_SESSION["prix"])  ){
	  
	  $t = $_SESSION['prix'] * $panier_count;
		echo '<span>Prix: <strong>'.$t.'</strong> fcfa</span>';
	  
	  
	  
	 
	  } else {
	  
		echo '<span>Prix: <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</strong> fcfa</span>';
	  } */
	  ?>
		<?php echo ' </div>
    <!-- End Cart -->
    <!-- Navigation -->
	
	<div class="client" style="width:177px;">';?>
		<?php

				if(isset($_SESSION['nom_client'])){
				echo '<div style="background-color:; margin-left:; text-align:right; " class="nom_client"><b>'.$_SESSION['nom_client'].'</b>|<b><a href="?c=dcx_client" style="text-decoration:none">déconnexion</a></b></div>';}
			?><?php echo '
			</div>
	
    <div id="navigation">
      <ul>
        <li><a href="?c" >Accueil</a></li>
        <li><a href="produits.php" class="">Produits</a></li>'; ?>
		<?php
									if(!isset($_SESSION['id_client'])){
									echo '<li><a href="?c=commande" class="a">Mon Compte</a></li>';}
									?>

		<?php
									if(isset($_SESSION['id_client'])){
									echo '<li><a href="?c=Comm" class="a">Mes commandes</a></li>';}
									?>

		<li><a href="?c=pan" class="active">Mon Panier</a></li>
		<li><a href="?c=contact">Contact</a></li>
		</ul>
	</div>
	<!-- End Navigation -->
	</div> <br>


	<div class="jumbotron">
		<h1 class="display-4">Mon panier</h1>
		<!-- <p class="lead">Subtitle</p> -->
		<hr class="my-4">
		<p>Le panier est un espace provisoire où vous pouvez visualiser la liste totale de vos produits choisis avant de
			valider définitivement votre commande. Vous pourrez supprimer un ou plusieurs produits que vous avez choisis
			involontairement ou dont vous ne désirez plus, ou même vider tout le panier en cliquant sur le bouton rouge
			si vous voulez annuler votre commande et choisir d'autres produits.</p>
	</div>

	<form method="POST" action="">
		<div>
			<h1>

				<?php   
	
	
	if (isset($_SESSION["list"]) && isset($_SESSION["prix"])  && $panier_count >= 1 ){
	  
	  /* $t = $_SESSION['prix'] * $panier_count; */
		echo '<span style="float:right; font-size:20px">Prix total: <strong>'.number_format($_SESSION['total'],'0',',',' ').'</strong> fcfa</h1> </span></div>';
	  
	  
	  
	 
	  } else {
	  
		echo '<span style="float:right; font-size:20px"><a href="?c=pan" style="text-decoration: none;">Voir le prix total</a></span></h1></div>';
	  } 
	  ?>


				<br>

				<?php 
			// if(!isset($_SESSION['id_client'])) echo '<div class="" align="center"><h3>Vous n\'etes pas connecté</h3></div>';
		
				
			
			?>


				<div style="width:200px"><a class="btn btn-danger" href="?c=pan&vider=1" style="margin-left: 0px;"
						onclick="return confirm('Confirmer ?');">
						Vider le panier
					</a></div>
				<?php
if (isset($_SESSION["list"]) && isset($_SESSION["prix"])  && $panier_count >= 1 ){
echo '<a href="?c=pan" style="margin-top:-27px; float:right; text-decoration: none; font-size:20px" ><h6>Actualiser</h6></a>';
}
?>
				<br>

				<hr>
				<?php
require 'modeles/classeFunction.php';

$produit = new imagePanier();

	
	
	$t=0;
	
	// var_dump($_SESSION) ;

//afficher le contenu de la session
if(isset($_SESSION['id_client'])){
if (isset($_SESSION["list"]) )
{ if ($panier_count < 8){ echo '<div style="height: 707px">'; ?>
				<?php foreach ($_SESSION["list"] as $key =>$value){
	$image = $produit->Produit($value);
	$_SESSION['image']=$image;
	echo '<div style="border-bottom: 1px solid #DCDCDC; "><img style="width:100px; height:100px" src="images/'.$image['photo'].'"/> <div style="position: absolute; margin-left: 860px; margin-top: -50px"><a href="?c=pan&vide='.$key.'" class="btn btn-danger" style="margin-left: 0px" onclick="return confirm(\'Confirmer ?\');">supprimer</a></div></div>';
	echo '<input name="nom_commande" value="'.$image['nom_produits'].'" hidden/>';
	echo '<input name="prix" value="'.$image['prix'].'" hidden/>';
	//$d = date('j M Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
	
	$tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
	$date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
	$mois = $tab_mois[date("n")];

	$d = date('j').' '.$mois.' '.date('Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
	$annee = date('Y');
	echo '<input type="text" name="date_commande" value="'.$d.'" hidden/>';
	echo '<input type="text" name="mois_commande" value="'.$mois.'" hidden/>';
	echo '<input type="text" name="annee_commande" value="'.$annee.'" hidden/>';
	echo '<input type="text" name="paye" value="Non" hidden/>';
	echo '<div style="float: right; position: absolute; margin-left: 860px; margin-top: -70px">prix= <span style="color:red">'.number_format($image['prix'],'0',',',' ').'</span> fcfa</div>';
	/* echo '<a href="#">envoyer</a>'; */
	echo ' ';
	
			$_SESSION['photo']=$image['photo'];
			$_SESSION['nom_produits']=$image['nom_produits'];
			$_SESSION['prix']=$image['prix']; 
			/* $_SESSION['quantite']=$image['quantite']; */
			

			$t += $_SESSION['prix'];
			$_SESSION['total'] = $t; 
 
  
	
	
	   /* var_dump($_SESSION["list"]) ;
	  var_dump($value) ;
		*/
	  
    //print $value . "<br>";
  
  }echo '</div>';//END FOREACH?>

				<?php
} if ($panier_count >= 8){
 foreach ($_SESSION["list"] as $key =>$value){
	$image = $produit->Produit($value);
	$_SESSION['image']=$image;
	echo '<div style="border-bottom: 1px solid #DCDCDC; "><img style="width:100px; height:100px" src="images/'.$image['photo'].'"/> <div style="position: absolute; margin-left: 860px; margin-top: -50px"><a href="?c=pan&vide='.$key.'" class="btn btn-danger" style="margin-left: 0px" onclick="return confirm(\'Confirmer ?\');">supprimer</a></div></div>';
	echo '<input name="nom_commande" value="'.$image['nom_produits'].'" hidden/>';
	echo '<input name="prix" value="'.$image['prix'].'" hidden/>';
	
	$tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
	$date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
	$mois = $tab_mois[date("n")];

	$d = date('j').' '.$mois.' '.date('Y').' '.date('H').'h '.date('i').'m '.date('s').'s ';
	
	$annee = date('Y');
	echo '<input type="text" name="date_commande" value="'.$d.'" hidden/>';
	echo '<input type="text" name="mois_commande" value="'.$mois.'" hidden/>';
	echo '<input type="text" name="annee_commande" value="'.$annee.'" hidden/>';
	echo '<input type="text" name="paye" value="Non" hidden/>';
	echo '<div style="float: right; position: absolute; margin-left: 860px; margin-top: -70px">prix= <span style="color:red">'.number_format($image['prix'],'0',',',' ').'</span> fcfa</div>';
	/* echo '<a href="#">envoyer</a>'; */
	echo ' ';
	
			$_SESSION['photo']=$image['photo'];
			$_SESSION['nom_produits']=$image['nom_produits'];
			$_SESSION['prix']=$image['prix']; 
			/* $_SESSION['quantite']=$image['quantite']; */
			

			$t += $_SESSION['prix'];
			$_SESSION['total'] = $t;
 
 } } }//END isset($_SESSION["list"])
else{echo '<div style="height: 707px"></div>';}

}//END isset($_SESSION['id_client'])
else{echo '<div style="height: 707px"></div>';}

?>

				<hr><br>

				<!--<a href="?c=pro"><h2>Continue shopping</h2></a>-->


				<br>
				<!-- <input id="submitform" class="btn btn-primary" name="enregistrer" type="submit" value="Valider" onclick="return confirm('Confirmer ?');" style="width:100px; margin-left: 0px;"/> -->
				<button type="submit" class="btn btn-primary" name="enregistrer"
					onclick="return confirm('Confirmer ?');" style="width:100px; margin-left: 0px;">Valider</button>

				<?php if(isset($_POST['enregistrer']) AND isset($_POST['nom_commande'])){
					echo "<script>alert('Effectué avec succès');</script>";
				} ?>




	</form>






	<?php include('footer.php'); ?>

	</div>
	<!-- End Main -->

	<!-- Footer -->

	<!-- End Footer -->

	<!-- End Shell -->


	<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="layout/sweetalert2/dist/sweetalert2.min.js"></script>



</body>

</html>