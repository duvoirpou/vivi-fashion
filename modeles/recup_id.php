<?php 
	//on recupere l'id de l'utilisateur
 		$req = $bdd->prepare("SELECT id_client FROM client WHERE ORDER BY id_client DESC ");
 		$rep = $req->execute();
 		$rep = $req->fetchAll();

 		//affectation de l'id
 		$id_client = $rep[0]['id_client'];
 ?>










