<?php
	
	include('modeles/admin/classe_messages.php');
	
	$listeMessages = new Message(NULL,NULL,NULL,NULL,NULL,NULL);
	
	$aff = $listeMessages->affichageMessages();
	
	include('vues/admin/liste_messages.php');
?>

 	 	 	




