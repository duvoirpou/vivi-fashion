<?php

	include('modeles/admin/classe_commande.php');

	
	$listeCommande = new Commande(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
	$affCommande = $listeCommande->affichageCommande();
	
	
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierCommande = new Commande(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		$commande = $ModifierCommande->getIdCommande($code);

	}


	

	include('vues/admin/form_connexionComm.php');

?>

 	 	 	




