<?php

	include('modeles/classe_comm.php');

	
	$listeCommande = new Commande(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
	$affCommande = $listeCommande->affichageCommande();
	
	
	if(isset($_POST['cnx_comm'])){
		//var_dump($_POST);exit;

		$mois_commande	= htmlentities(trim($_POST['mois_commande']));
		$annee_commande	= htmlentities(trim($_POST['annee_commande']));
		
		$cnxAdmin = new Commande (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
		$reponse = $cnxAdmin->connexionAdmin($mois_commande,$annee_commande);
			
		if($reponse){

			//ajout des sessions
						$_SESSION['id_commande']	=$reponse->id_commande;
						$_SESSION['mois_commande']	=$reponse->mois_commande;
						$_SESSION['annee_commande']	=$reponse->annee_commande;

			header('location:?c=commTriC');
		}else{
			header('location:?c=Comm');
		}
	
	}

	include('vues/client/CommClient.php');

?>

 	 	 	




