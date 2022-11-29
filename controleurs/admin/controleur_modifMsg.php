<?php

	include('modeles/admin/classe_messages.php');

	/* $photo_client	   = NULL; */

	if(isset($_POST['modif'])){
		$id_msg      = htmlentities(trim($_POST['id_msg']));
		$identite	   	= htmlentities(trim($_POST['identite']));
		$mail	   	= htmlentities(trim($_POST['mail']));
		$tel	   	= htmlentities(trim($_POST['tel']));
		$msg	   	= htmlentities(trim($_POST['msg']));
		$statut	   	= htmlentities(trim($_POST['statut']));
		
		
		//chemin pour recevoir les photos du site
		//images nom du dossier et $nomPhoto fichier temporaire
		
		$ModifierMessage = new Message($id_msg,$identite,$mail,$tel,$msg,$statut);
	
		$reponse = $ModifierMessage->ModifierMsg();
		
		if($reponse){
			header('location:?c=affMsg');
		} else{
			header('location:?c=affMsg');
		}
	}
	if(isset($_GET['code'])){
	
		$code=$_GET['code'];
		
		$ModifierMessage = new Message(NULL,NULL,NULL,NULL,NULL,NULL);
		$message = $ModifierMessage->getIdMessage($code);

	}

	include('vues/admin/formModifMsg.php');

?>

 	 	 	




