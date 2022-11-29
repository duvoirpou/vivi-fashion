<?php

	include('modeles/classe_client.php');

	/* $photo_client	   = NULL; */

	if(isset($_POST['modif'])){
		$id_client      = htmlentities(trim($_POST['id_client']));
		$nom_client	   	= htmlentities(trim($_POST['nom_client']));
		$prenom_client	   	= htmlentities(trim($_POST['prenom_client']));
		$sexe_client	 = htmlentities(trim($_POST['sexe_client']));
		$mp_client	   	= htmlentities(trim($_POST['mp_client']));
		/* $photo_client	= htmlentities(trim($_FILES['photo_client']['name'])); */
		$email_client	= htmlentities(trim($_POST['email_client']));
		$adresse_client	= htmlentities(trim($_POST['adresse_client']));
		$ville_client	= htmlentities(trim($_POST['ville_client']));
		$tel_client	= htmlentities(trim($_POST['tel_client']));
		
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		
		$ModifierMembre = new Client($id_client,$nom_client,$prenom_client,$sexe_client,$email_client,$mp_client,$adresse_client,$ville_client,$tel_client);
	
		$reponse = $ModifierMembre->ModifierMembre();
		
		if($reponse){
			header('location:?c=affMbre');
		}
	}
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierMembre = new Client(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		$client = $ModifierMembre->getIdClient($code);

	}

	include('vues/admin/formModif_client.php');

?>

 	 	 	




