<?php
	
	include('modeles/admin/classe_produits.php');
	
	$listeProduits= new Produits(NULL,NULL,NULL,NULL,NULL,NULL);
	
	$aff = $listeProduits->affichageProduits();
	
	include('vues/admin/liste_produits.php');
?>

 	 	 	




