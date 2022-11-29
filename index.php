<?php
//ini_set('display_errors', 'off');
// Start the session
session_start();

if(isset($_GET['c'])){
	$ctrl = $_GET['c'];
	
}

else {
	$ctrl = NULL;
}


include('connexionBdd/connexionBdd.php');
//Chargement des pages
switch($ctrl){
	case 'pro'://controleur
		include('controleurs/client/controleurProduits.php');
	break;
	
	case 'pan'://controleur panier
		include('controleurs/client/controleurPanier.php');
	break;
	
	
	case 'contact':
		include('controleurs/client/controleurContact.php');
	break;
	
	case 'commande':
		include('controleurs/client/controleurCommande.php');
	break;
	
	case 'Comm'://inscription 
		include('controleurs/client/controleur_Comm.php');
	break;
	
	
	case 'dcx_client':
		include('controleurs/client/controleur_dcxClient.php');
	break;
	
	case 'insc':
		include('controleurs/client/controleurInscription.php');
	break;
	
	
	//Gestion de l'administrateur
	case 'admin'://connexion de l'administrateur
		include('controleurs/admin/controleur_cnxAdmin.php');
	break;
	
	case 'cnxCat'://inscription 
		include('controleurs/admin/controleur_categorie.php');
	break;
	
	case 'produits'://inscription 
		include('controleurs/admin/controleur_listeProduits.php');
	break;
	
	case 'cnxComm'://inscription 
		include('controleurs/admin/controleur_cnxComm.php');
	break;

	case 'ins'://inscription 
		include('controleurs/admin/controleur_inscription.php');
	break;

	
	case 'espadmin'://Espace de travail administrateur
		include('controleurs/admin/controleur_espAdmin.php');
	break;

	case 'affMbre'://Afficher les membres du site
		include('controleurs/admin/controleur_listeMembres.php');
	break;

	case 'affMsg'://Afficher les membres du site
		include('controleurs/admin/controleur_listeMessages.php');
	break;
	
	case 'affComm'://Afficher les membres du site
		include('controleurs/admin/controleur_listeCommande.php');
	break;
	
	case 'modif'://
		include('controleurs/admin/controleur_modif.php');
	break;


	case 'modifCommande'://
		include('controleurs/admin/controleur_modifCommande.php');
	break;
	
	case 'modifProduits'://
		include('controleurs/admin/controleur_modifProduits.php');
	break;
	
	case 'modifComm'://Afficher les membres du site
		include('controleurs/admin/controleur_modifComm.php');
	break;

	case 'modifMsg'://Afficher les membres du site
		include('controleurs/admin/controleur_modifMsg.php');
	break;

	case 'supprClient'://Afficher les membres du site
		include('controleurs/admin/controleur_supprimerClient.php');
	break;

	case 'supprMsg'://Afficher les membres du site
		include('controleurs/admin/controleur_supprimerMsg.php');
	break;

	case 'dcnx_ad'://Espace membre administrateur
		include('controleurs/admin/controleur_dcxAdmin.php');
	break;
	
	case 'dcxCat'://Espace membre administrateur
		include('controleurs/admin/controleur_dcxCat.php');
	break;

//=========================================================================		
	

	
	
	default:
		include('controleurs/client/controleurAcceuil.php');
	break;
}

?>