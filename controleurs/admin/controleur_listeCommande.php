<?php

	include('modeles/admin/classe_commande.php');

	$listeCommande = new Commande(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
	$affCommande = $listeCommande->affichageCommande();

	include('vues/admin/listeCommande.php');

?>

 	 	 	




