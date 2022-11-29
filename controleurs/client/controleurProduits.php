<?php
	include ('modeles/classe_client.php');
	include ('modeles/classeFunction.php');


	$produit = new imagePanier(NULL,NULL,NULL,NULL,NULL,NULL);

	
	$aff1 = $produit->affichePro1();
	
	include ('vues/client/produits.php');
?>