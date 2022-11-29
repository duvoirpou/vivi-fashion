<?php

	include('modeles/classe_client.php');

	if(isset($_POST['enregistrer'])){
		//var_dump($_POST);exit;

		if(!empty($_POST['login']) AND !empty($_POST['mp_client'])){
		
		$login	= htmlentities(trim($_POST['login']));
		$mp_emp		= htmlentities(trim($_POST['mp_client']));
		
		
		$cnxClient = new Client (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
		$reponse = $cnxClient->connexionSiteClient($login,$mp_emp);
			
		if($reponse){

			//ajout des sessions
						$_SESSION['id_client']		=$reponse->id_client;
						$_SESSION['nom_client']		=$reponse->nom_client;
						$_SESSION['prenom_client']		=$reponse->prenom_client;
						
						
						$_SESSION['email_client']	=$reponse->email_client;
						$_SESSION['login']	=$reponse->login;
						$_SESSION['mp_client']		=$reponse->mp_client;
						$_SESSION['adresse_client']		=$reponse->adresse_client;
						$_SESSION['ville_client']		=$reponse->ville_client;
						$_SESSION['tel_client']		=$reponse->tel_client;

			header('location:?c');
		}else{
			header('location:?c=commande');
		}
	
	}}



	// if(isset($_POST['ajouter']))
	// 	{
			
	// 		if(!empty($_POST['nom_client']) AND !empty($_POST['prenom_client']) AND !empty($_POST['email_client']) AND !empty($_POST['login']) AND !empty($_POST['adresse_client']) AND !empty($_POST['mp_client']) AND !empty($_POST['ville_client']) AND !empty($_POST['tel_client'])){
			
	// 		$nom_client	 = htmlentities(trim($_POST['nom_client']));
	// 		$prenom_client	 = htmlentities(trim($_POST['prenom_client']));
	// 		$sexe_client	 = htmlentities(trim($_POST['sexe_client']));
	// 		$email_client	 = htmlentities(trim($_POST['email_client']));
	// 		$login	 = htmlentities(trim($_POST['login']));
	// 		$adresse_client	 = htmlentities(trim($_POST['adresse_client']));
	// 		$mp_client	 = htmlentities(trim($_POST['mp_client']));
	// 		$ville_client	 = htmlentities(trim($_POST['ville_client']));
	// 		$tel_client	 = htmlentities(trim($_POST['tel_client']));
			
	// 		$Ins_clients = new client(NULL,$nom_client,$prenom_client,$sexe_client,$email_client,$login,$mp_client,$adresse_client,$ville_client,$tel_client);
		
	// 		$reponse = $Ins_clients->ajoutClient();
	// 		//$_SESSION['id_client'] = $reponse;
			
	// 		if($reponse){
	// 				header('location:?c=commande');
	// 			}else
	// 				{
	// 				header('location:?c=commande');
	// 				}
					
	// 				}
	// 		}

	include('vues/client/Commande.php');

?>

 	 	 	




