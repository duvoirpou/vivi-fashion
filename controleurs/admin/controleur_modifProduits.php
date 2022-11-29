<?php

	include('modeles/admin/classe_produits.php');

	/* $photo_client	   = NULL; */

	if(isset($_POST['modif'])){
		$id_produits      = htmlentities(trim($_POST['id_produits']));
		$id_cat	   	= htmlentities(trim($_POST['id_cat']));
		$nom_produits	   	= htmlentities(trim($_POST['nom_produits']));
		$type_produits	   	= htmlentities(trim($_POST['type_produits']));
		
		$prix	= htmlentities(trim($_POST['prix']));
		$photo	= $_FILES['photo']['name'];
		
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		//tmp_name est un dossier temporaire
		$fichierTempo=$_FILES['photo']['tmp_name'];
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		move_uploaded_file($fichierTempo, 'images/'.$photo);
		
		$ModifierProduits = new Produits($id_produits,$id_cat,$nom_produits,$type_produits,$prix,$photo);
	
		$reponse = $ModifierProduits->ModifierProduits();
		
		if($reponse){
			header('location:?c=produits');
		}
	}
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$Produits = new Produits(NULL,NULL,NULL,NULL,NULL,NULL);
		$produit = $Produits->getIdProduits($code);

	}

	include('vues/admin/formModif_produits.php');

?>

 	 	 	




