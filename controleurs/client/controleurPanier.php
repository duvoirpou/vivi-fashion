<?php

include('modeles/classePanier.php');

if(isset($_SESSION['id_client'])){
if(isset($_POST['enregistrer'])){ if(isset($_SESSION['list']))
	{
		$nom_commande	 = htmlentities(trim($_POST['nom_commande']));
		$prix	 = htmlentities(trim($_POST['prix']));
		$mois_commande	 = htmlentities(trim($_POST['mois_commande']));
		$annee_commande	 = htmlentities(trim($_POST['annee_commande']));
		$date_commande	 = htmlentities(trim($_POST['date_commande']));
		$date_livraison	 = '';
		$paye	 = htmlentities(trim($_POST['paye']));
		$id_client = $_SESSION['id_client'];
		foreach ($_SESSION["list"] as $key =>$value){ //boucle pour envoyer les produits 1 à 1 dans la bdd
			$_SESSION['image']; 
			
			$Ins_table2 = new commande1(NULL,$_SESSION['nom_produits'],$prix,$mois_commande,$annee_commande,$date_commande,$date_livraison,$_SESSION['photo'],$paye,$_SESSION['id_client']);
			
			$reponse = $Ins_table2->ajoutPro();
		}

		if($reponse){
			
			unset($_SESSION['list']);
			//header('location:?c=pan'); 
			//echo "<script type='text/javascript'>document.location.replace('?c=pan');</script>";
			//echo "<script>alert('Effectué avec succès');</script>";
			echo "
			<script language='JavaScript'>
			alert('Effectué avec succès');
			document.location.replace('?c=pan');
			</script>
			";
			}
			
	}	else
				{
					//header('location:?c=pan');
					// echo "<script type='text/javascript'>document.location.replace('?c=pan');</script>";
					// echo "<script>alert('Impossible');</script>";
					echo "
					<script language='JavaScript'>
					alert('Validation impossible !');
					document.location.replace('?c=pan');
					</script>
					";
				}
		} }
		
		else{
			echo "<script>alert('Vous n\'etes pas connecté');</script>";
		} 
	include ('vues/client/panier.php');
?>