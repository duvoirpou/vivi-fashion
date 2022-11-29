<?php
include('modeles/classe_commande.php');

if(isset($_POST['enregistrer']))
		{
			
			if(!empty($_POST['nom_client']) AND !empty($_POST['prenom_client']) AND !empty($_POST['email_client']) AND !empty($_POST['adresse_client']) AND !empty($_POST['mp_client']) AND !empty($_POST['ville_client']) AND !empty($_POST['tel_client'])){
			
			$nom_client	 = htmlentities(trim($_POST['nom_client']));
			$prenom_client	 = htmlentities(trim($_POST['prenom_client']));
			$sexe_client	 = htmlentities(trim($_POST['sexe_client']));
			$email_client	 = htmlentities(trim($_POST['email_client']));
			$adresse_client	 = htmlentities(trim($_POST['adresse_client']));
			$mp_client	 = htmlentities(trim($_POST['mp_client']));
			$ville_client	 = htmlentities(trim($_POST['ville_client']));
			$tel_client	 = htmlentities(trim($_POST['tel_client']));
			
			$Ins_clients = new client(NULL,$nom_client,$prenom_client,$sexe_client,$email_client,$mp_client,$adresse_client,$ville_client,$tel_client);
		
			$reponse = $Ins_clients->ajoutClient();
			//$_SESSION['id_client'] = $reponse;
			
			if(isset($_POST['enregistrer']))
		{if($reponse){
					header('location:?c=commande');
				}else
					{
					header('location:?c=insc');
					}
					}
					}else{//sinon on affiche un message d'erreur
			echo '<div class="" style="background-color:; width:440px; text-align:center; margin-top:100px; position:absolute" align="center" >
			<b>Vous n\'avez pas rempli tous les champs du formulaire !</b>
		</div>';
		}
			}



	include ('vues/client/inscription.php');
?>