<?php
	
	include('modeles/admin/classe_client.php');
	
	$listeMembres = new Client(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
	$aff = $listeMembres->affichageMembres();
	
	include('vues/admin/liste_membres.php');
?>

 	 	 	




