<?php

	include('modeles/admin/classe_commande.php');

	/* $photo_client	   = NULL; */

	if(isset($_POST['modif'])){
		$id_commande      = htmlentities(trim($_POST['id_commande']));
		$nom_commande	   	= htmlentities(trim($_POST['nom_commande']));
		$mois_commande	   	= htmlentities(trim($_POST['mois_commande']));
		$annee_commande	   	= htmlentities(trim($_POST['annee_commande']));
		$date_commande	   	= htmlentities(trim($_POST['date_commande']));
		$photo	= htmlentities(trim($_FILES['photo']['name'])); 
		$paye	   	= htmlentities(trim($_POST['paye']));
		
		
		$id_client	= htmlentities(trim($_POST['id_client']));
		
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		
		$ModifierProduits = new Commande($id_commande,$nom_commande,$mois_commande,$annee_commande,$date_commande,$photo,$paye,$id_client);
	
		$reponse = $ModifierProduits->ModifierCommande();
		
		if($reponse){
			header('location:?c=commTri');
		}
	}
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierCommande = new Commande(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		$commande = $ModifierCommande->getIdCommande($code);

	}

	include('vues/admin/formModifComm.php');

?>

 	 	 	




