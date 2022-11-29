<?php
session_start();
include('connexionBdd/connexionBdd.php');
$cnx = connexionBdd();
  

      $nom_client	 = htmlentities(trim($_POST['nom_client']));
			$prenom_client	 = htmlentities(trim($_POST['prenom_client']));
			$sexe_client	 = htmlentities(trim($_POST['sexe_client']));
			$email_client	 = htmlentities(trim($_POST['email_client']));
			$login	 = htmlentities(trim($_POST['login']));
			$adresse_client	 = htmlentities(trim($_POST['adresse_client']));
			$mp_client	 = htmlentities(trim($_POST['mp_client']));
			$ville_client	 = htmlentities(trim($_POST['ville_client']));
			$tel_client	 = htmlentities(trim($_POST['tel_client']));
			// $date_insc	 = htmlentities(trim($_POST['date_insc']));

$tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
$date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
$mois = $tab_mois[date("n")];

$annee = date('Y');
$date = date('Y-m-d');
$heure = date('H:i:s');

// $req=$db->prepare("INSERT INTO recette(id_client, montant, avance, date_recette, heure_recette, mois_recette, annee_recette, caissiere) VALUES($id_client,$total,$avance,'$date','$heure','$mois','$annee','$caissiere') ");
// $req->execute();

$req=$cnx->prepare("INSERT INTO client (nom_client, prenom_client, sexe_client, email_client, login, mp_client, adresse_client, ville_client, tel_client, date_insc) VALUES ('$nom_client','$prenom_client','$sexe_client','$email_client','$login','$mp_client','$adresse_client','$ville_client','$tel_client',CURRENT_DATE())");
// var_dump($req);die();
$req->execute();







	 ?>