<?php
	include('modeles/classe_client.php');

	$SupprimerMembre = new Client(NULL,NULL,NULL,NULL,NULL);

	$suppression = $SupprimerMembre->supprimerClient();
	
	if($suppression){
		header('location:?c=affMbre');
	}
?>