<?php 


if(isset($_POST['Valider']))
		{
			
			if(!empty($_POST['nom_client']) AND !empty($_POST['prenom_client']) AND !empty($_POST['sexe_client']) AND !empty($_POST['email_client']) AND !empty($_POST['adresse_client']) AND !empty($_POST['mp_client']) AND !empty($_POST['ville_client']) AND !empty($_POST['tel_client'])){
			if ($_POST['mp_client']==$_POST['confirm_mp_client']){
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
			
			if(isset($_POST['Valider']))
		{if($reponse){
					echo '<div style="position: absolute; color: green;"><b>Inscription effectuée avec succès ! Vous pouvez désormais vous connecter.</b></div>';
				}else
					{
					echo '<div style="position: absolute; color: red;"><b>L\'adresse email que vous avez saisie existe déjà, prière de bien vouloir la changer !</b></div>';
					}
					}
					}else
					{
					echo '<div style="position: absolute; color: red;"><b>mot de passe mal saisi</b></div>';
					}
}else
					{
					echo '<div style="position: absolute; color: red;"><b>Inscription non effectuée. Veuillez remplir tous les champs svp !</b></div>';
					}
			} ?>




<?php
if(!isset($_SESSION['nom_client'])){ echo '
<div id="topbar" style="margin-top:-10px; ">
    <div id="slidepanel">

      <div class="topbox">
        <h2>Nullamlacus dui ipsum</h2>
        <p class="top">Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>

        	
        		<form action="#" method="post" hidden class="boxtop">
		          <fieldset>
		            <legend>Teachers Login Form</legend>
		            <label for="nom_client">Nom :
		              <input type="text" class="form-control" name="nom_client" id="nom" placeholder="Votre nom">
		            </label>
		            <label for="prenom_client">Prénom :
		              <input type="text" class="form-control" name="prenom_client" id="nom" placeholder="Votre prénom">
		            </label>
		            <label for="sexe_client">Sexe :
		              <select class="field small-field" id="sexe_client" name="sexe_client" style="width:80px">
						<option value="masculin">Masculin</option>
						<option value="feminin">Feminin</option>
						
					  </select>
		            </label>
		            <label for="mp_client">Adresse email:
		              <input type="email" class="form-control" id="email_client" name="email_client" placeholder="Votre adresse email">
		            </label>
		            <label for="mp_client">Mot de passe:
		              <input type="password" class="form-control" id="mp_client" name="mp_client" placeholder="Votre mot de passe">
		            </label>
		            <label for="confirm_mp_client">Confirmez le mot de passe:
		              <input type="password" class="form-control" id="confirm_mp_client" name="confirm_mp_client" placeholder="Votre mot de passe">
		            </label>
		            <label for="adresse_client">Adresse :
		              <input type="text" class="form-control" id="adresse_client" name="adresse_client" placeholder="Votre ville">
		            </label>
		            <label for="ville_client">Ville :
		              <input type="text" class="form-control" id="ville_client" name="ville_client" placeholder="Votre ville">
		            </label>
		            <label for="tel_client" class="control-label">Téléphone :
		              <input type="text" name="tel_client" class="form-control" id="tel_client" placeholder="Votre numéro de téléphone">
		            </label>
		            
		            <p>
		              <input type="submit" name="Valider" id="Valider" value="Valider" />
		              &nbsp;
		              <input type="reset" name="teacherreset" id="teacherreset" value="Annuler" />
		            </p>
		          </fieldset>
        		</form>
        	

        <p class="readmore"><a href="#">Cliquez</a></p>

      </div>
      <div class="topbox ">
        <h2>Administrateur ici</h2>';} ?>
		
		<?php
		include('modeles/admin/classe_admin.php');

	if(isset($_POST['cnx_admin'])){
		//var_dump($_POST);exit;

		$nom_admin	= htmlentities(trim($_POST['nom_admin']));
		$mp_admin	= htmlentities(trim($_POST['mp_admin']));
		
		$cnxAdmin = new Admin (NULL,NULL,NULL);
	
		$reponse = $cnxAdmin->connexionAdmin($nom_admin,$mp_admin);
			
		if($reponse){

			//ajout des sessions
						$_SESSION['id_admin']	=$reponse->id_admin;
						$_SESSION['nom_admin']	=$reponse->nom_admin;
						$_SESSION['mp_admin']	=$reponse->mp_admin;

			header('location:?c=espadmin');
		}else{
			header('location:?c');
		}
	
	}
		?>
		
		
		<?php
		if(!isset($_SESSION['nom_client'])){ echo '
        <form action="" method="post">
          <fieldset>
            <legend>Teachers Login Form</legend>
            <label for="nom_admin">Nom d\'admin:
              <input type="text" class="form-control" id="nom_admin" name="nom_admin" placeholder="votre nom">
            </label>
            <label for="mp_admin">Mot de passe:
              <input type="password" class="form-control" id="mp_admin" name="mp_admin" placeholder="Votre mot de passe">
            </label>
            <!-- <label for="teacherremember">
              <input class="checkbox" type="checkbox" name="teacherremember" id="teacherremember" checked="checked" />
              Se souvenir de moi</label> -->
            <p>
              <input type="submit" name="cnx_admin" value="Login" />
              &nbsp;
              <input type="reset" name="teacherreset" id="teacherreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
	  
	  
	  
	  
      <div class="topbox last">
        <h2>Membre ici</h2>';} ?>
		
		<?php

	// include('modeles/classe_client.php'); 

	if(isset($_POST['enregistrer'])){
		//var_dump($_POST);exit;

		if(!empty($_POST['email_client']) AND !empty($_POST['mp_client'])){
		
		$email_emp	= htmlentities(trim($_POST['email_client']));
		$mp_emp		= htmlentities(trim($_POST['mp_client']));
		
		
		$cnxClient = new Client (NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
		$reponse = $cnxClient->connexionSiteClient($email_emp,$mp_emp);
			
		if($reponse){

			//ajout des sessions
						$_SESSION['id_client']		=$reponse->id_client;
						$_SESSION['nom_client']		=$reponse->nom_client;
						$_SESSION['prenom_client']		=$reponse->prenom_client;
						
						
						$_SESSION['email_client']	=$reponse->email_client;
						$_SESSION['mp_client']		=$reponse->mp_client;
						$_SESSION['adresse_client']		=$reponse->adresse_client;
						$_SESSION['ville_client']		=$reponse->ville_client;
						$_SESSION['tel_client']		=$reponse->tel_client;

			header('location:?c');
		}else{
			header('location:?c=commande');
		}
	
	}} ?>
		
		
		
		<?php
		if(!isset($_SESSION['nom_client'])){ echo '
        <form action="" method="post">
          <fieldset>
            <legend>Pupils Login Form</legend>
            <label for="emailaddress">Email:
              <input id="emailaddress" name="email_client" type="text" value="" placeholder="votre email"/>
            </label>
            <label for="pupilpass">Mot de passe:
              <input id="mp_client" name="mp_client" type="password" value="" placeholder="votre mot de passe"/>
            </label>
            <!-- <label for="pupilremember">
              <input class="checkbox" type="checkbox" name="pupilremember" id="pupilremember" checked="checked" />
              Se souvenir de moi</label> -->
            <p>
              <input type="submit" name="enregistrer" id="enregistrer" value="Login" />
              &nbsp;
              <input type="reset" name="pupilreset" id="pupilreset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        
        <b><li class="" id="toggle" style=""><a id="slideit" href="#slidepanel" style="text-decoration:none; margin-left:30px">Inscription/Connexion</a><center><a id="closeit" style="display: none; text-decoration:none;" href="#slidepanel" >Fermer</a></center></li></b>
      </ul>
    </div>
    <br class="clear" />
  </div>';}?>