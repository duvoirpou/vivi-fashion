<?php
	
include('connexionBdd/connexionBdd.php');
$db = connexionBdd();



		if($_POST['action']=='afficher'){
			$id_commande = $_POST['id'];
			$rp = $db->query("SELECT * FROM commande JOIN client ON commande.id_client=client.id_client WHERE id_commande=$id_commande");
			$rep = $rp->fetchAll();

			foreach($rep AS $row){

			  $data['id_commande']=$row['id_commande'];
			  $data['nom_commande']=$row['nom_commande'];
			  $data['prix']=$row['prix'];
			  $data['mois_commande']=$row['mois_commande'];
			  $data['annee_commande']=$row['annee_commande'];
			  $data['date_commande']=$row['date_commande'];
			  $data['photo']=$row['photo'];
			  $data['paye']=$row['paye'];
			  $data['id_client']=$row['id_client'];
			  $data['nom_client']=$row['nom_client'];
			  $data['prenom_client']=$row['prenom_client'];
			}

			echo json_encode($data);

		  }

		   if($_POST['action']=='modifier'){
			$id_commande = $_POST['id_cache'];
			$nom_commande = htmlentities(trim(addslashes(strip_tags($_POST['nom_commande']))));
			$prix = htmlentities(trim(addslashes(strip_tags($_POST['prix']))));
			$mois_commande = htmlentities(trim(addslashes(strip_tags($_POST['mois_commande']))));
			$date_commande = htmlentities(trim(addslashes(strip_tags($_POST['date_commande']))));
			$date_livraison = htmlentities(trim(addslashes(strip_tags($_POST['date_livraison']))));

			$annee_commande = htmlentities(trim(strip_tags($_POST['annee_commande'])));
			$photo = htmlentities(trim(strip_tags($_POST['photo'])));
			$paye = htmlentities(trim(strip_tags($_POST['paye'])));
			$id_client = htmlentities(trim(strip_tags($_POST['id_client'])));

			$req = $db->exec("UPDATE `commande` SET `nom_commande`='$nom_commande',`prix`=$prix,`mois_commande`='$mois_commande',`annee_commande`='$annee_commande',`date_commande`='$date_commande',`date_livraison`='$date_livraison',`photo`='$photo',`paye`='$paye',`id_client`='$id_client' WHERE id_commande=$id_commande ");

			  echo  'modification effectuée....';

		  }


?>