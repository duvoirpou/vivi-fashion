<?php
	include('modeles/admin/classe_messages.php');

	$SupprimerMessage = new Message(NULL,NULL,NULL,NULL,NULL,NULL);

	$suppression = $SupprimerMessage->supprimerMsg();
	
	if($suppression){
		header('location:?c=affMsg');
	}
?>