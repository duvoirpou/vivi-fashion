<!DOCTYPE html>
<html>

<head>
	<title>Vivi-Fashion</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

	<!-- Favicon  -->
	<link rel="icon" href="images/vivicon.png" />
	<!-- -->

	<link rel="stylesheet" href="layout/style.css" type="text/css" media="all" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->

	<link type="text/css" rel="stylesheet" href="layout/csstyle.css" />
	<link type="text/css" rel="stylesheet" href="layout/styleI.css" />
	<link type="text/css" rel="stylesheet" href="layout/css/styleMenu.css" />
	<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="layout/mon_bootstrap.css"> -->
	<link rel="stylesheet" href="layout/bootstrap4/css/dataTables.bootstrap4.min.css">

	<script src="layout/fontawesome_free_5_2_0_web/js/all.js" type="text/javascript"></script><!-- icon -->



</head>



<body style="">
	<!-- Shell -->
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
		<div id="cart" style="width: 190px; height: 64px;"> <a href="?c=pan" class="cart-link"><i
					class="fab fa-opencart" style="font-size:16px;"></i>Voir le panier</a>
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
				echo '<div style="" class="nom_client"><b>'.$_SESSION['nom_client'].'</b>|<a href="?c=dcx_client" style="text-decoration: none"><b>déconnexion</b></a></div>';}
			?>
		</div>


		<div id="navigation">
			<ul class="">
				<li><a href="?c" class="a">Accueil</a></li>
				<li><a href="produits.php" class="a">Produits</a></li>

				<?php
									if(!isset($_SESSION['id_client'])){
									echo '<li><a href="?c=commande" class="a">Mon Compte</a></li>';}
									?>

				<?php
									if(isset($_SESSION['id_client'])){
									echo '<li><a href="?c=Comm" class="active a">Mes commandes</a></li>';}
									?>

				<li><a href="?c=pan" class="a">Mon Panier</a></li>
				<li><a href="?c=contact" class="a">Contact</a></li>
			</ul>
		</div>
	</div>
	<!-- End Header 1080px-->
	<br>
	<div class="jumbotron">
		<h1 class="display-4">Mes commandes</h1>
		<!-- <p class="lead">Subtitle</p> -->
		<hr class="my-4">
		<p>Dans cet espace vous avez la possibilité de consulter la liste de vos dernieres commandes. Vous pourrez ainsi voir les produits qui ne vous sont pas encore livrés. Notez que la livraison de vos produits commandés doit se faire dans les 24h qui suivent ; au delà de ce delai nous vous prions de nous écrire depuis le menu <strong>Contact</strong> ou de nous téléphoner au 06 989 71 69. Merci !
		</p>
	</div>


	<div style="height: 950px">


		<div class="card" style="margin-top:40px;">
			<div class="card-body">
				<h5 class="card-title text-center">Mes commandes en cours...</h5>
				<!-- <p class="card-text">Content</p> -->
				<div class="table table-responsive">
					<table class="table table-sm table-light table-striped" style="width: 100%; text-align: center;" id="mydatatable">
						<thead>
							<tr>

								<th>N</th>
								<th>PRODUITS</th>
								<th>PHOTO</th>
								<th>PRIX</th>
								<th>MOIS</th>
								<th>ANNEE</th>
								<th>DATE</th>
								<th>LIVRé</th>


							</tr>
						</thead>

						<tbody>
						<?php $n=0; ?>
							<?php while($et=$affCommande->fetch()){?>
								<?php $n=$n+1; ?>
							<tr>

								<td><?php echo($n)?></td>
								<td><?php echo($et['nom_commande'])?></td>

								<!---affichage de la photo---->
								<td>
									<center><img src="images/<?php echo($et['photo'])?>"
											style="width:75px;height:80px;" /></center>
								</td>

								<td><?php echo number_format(($et['prix']),'0',',',' ')?></td>
								<td><?php echo($et['mois_commande'])?></td>
								<td><?php echo($et['annee_commande'])?></td>
								<td><?php $date=date_create($et['date_commande']); echo date_format($date,"d-m-Y");?>
								</td>

								<?php if($et['paye']=="Oui"){ echo '<td style="color:green">';} else {echo '<td style="color:red">';}
										?>
								<?php 
												
												echo($et['paye']) 
											?>

								</td>


								<!---MODIFICATION--
										<td style="text-align:center">
											<a class="a_lien" style="margin-left:5px;" href="?c=modif&code=<?php echo($et['id_client'])?>">
												MODIFIER
											</a>			-->
								<!---SUPPRESSION--
											<a class="a_lien" style="margin-left:5px;" href="?c=supprClient&code=<?php echo($et['id_client'])?>">
												SUPPRIMER
											</a>
										</td>-->
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<?php include('footer.php'); ?>
	</div>

	</div>



	<!------------------------------------------>
	<script src="layout/bootstrap4/js/jquery.js"></script>
	<script src="layout/bootstrap4/js/bootstrap.min.js"></script>

	<script src="layout/bootstrap4/js/jquery.dataTables.min.js"></script>
	<script src="layout/bootstrap4/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$('#mydatatable').DataTable({
			scrollY: 700,
			scrollX: true,
			scrollCollapse: true,
			paging: false,
		});
	</script>
</body>

</html>