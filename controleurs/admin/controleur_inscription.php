<?php

	include('modeles/admin/classe_produits.php');

	if(isset($_POST['envoyer'])){
		//var_dump($_POST);exit;
		$id_cat		= htmlentities(trim($_POST['id_cat']));
		$nom_produits		= htmlentities(trim($_POST['nom_produits']));
		$type_produits		= htmlentities(trim($_POST['type_produits']));
		/* $quantite	= htmlentities(trim($_POST['quantite']));	 */
		$prix		= htmlentities(trim($_POST['prix']));
		$photo	= htmlentities(trim($_FILES['photo']['name']));
		

		//tmp_name est un dossier temporaire
		$fichierTempo=$_FILES['photo']['tmp_name'];
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		move_uploaded_file($fichierTempo, 'images/'.$photo);


		$ajoutProduit = new Produits (NULL,$id_cat,$nom_produits,$type_produits,$prix,$photo);/* $quantite, */
	
		$reponse = $ajoutProduit->ajoutProduit();

			
		if($reponse){
			
			
			
			// header('location:?c=espadmin');
			echo "
			<script language='JavaScript'>
			alert('Effectué avec succès');
			document.location.replace('?c=ins');
			</script>
			";
		}else{
			// header('location:?c=ins');
			echo "
			<script language='JavaScript'>
			alert('Echec');
			document.location.replace('?c=ins');
			</script>
			";
		}
	
	}
	include('vues/form_inscription.php');
?>