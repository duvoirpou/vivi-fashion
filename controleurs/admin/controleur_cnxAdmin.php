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
			header('location:?c=admin');
		}
	
	}

	include('vues/admin/form_connexionAdmin.php');

?>

 	 	 	




