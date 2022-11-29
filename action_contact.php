<?php
session_start();
include('connexionBdd/connexionBdd.php');
$cnx = connexionBdd();
  

      $identite	 = htmlentities(trim($_POST['identite']));
			$mail	 = htmlentities(trim($_POST['mail']));
			$tel	 = htmlentities(trim($_POST['tel']));
			$msg	 = htmlentities(trim($_POST['msg']));
			
			// $date_insc	 = htmlentities(trim($_POST['date_insc']));

$tab_mois = array('', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
$date_jour = date("d") . '-' . $tab_mois[date("n")] . '-' . date("Y");
$mois = $tab_mois[date("n")];

$annee = date('Y');
$date = date('Y-m-d');
$heure = date('H:i:s');

// $req=$db->prepare("INSERT INTO recette(id_client, montant, avance, date_recette, heure_recette, mois_recette, annee_recette, caissiere) VALUES($id_client,$total,$avance,'$date','$heure','$mois','$annee','$caissiere') ");
// $req->execute();

$req=$cnx->prepare("INSERT INTO message (identite, mail, tel, msg) VALUES ('$identite','$mail','$tel','$msg')");
// var_dump($req);die();
$req->execute();







	 ?>