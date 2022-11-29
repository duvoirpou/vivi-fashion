<?php

	include('modeles/admin/classe_categories.php');

	if(isset($_POST['envoyer'])){
		//var_dump($_POST);exit;

		$nom_cat		= htmlentities(trim($_POST['nom_cat']));
		
		
		

		

		$ajoutCat = new Categories (NULL,$nom_cat);
	
		$reponse = $ajoutCat->connexionSiteCategories($nom_cat);

			
		if($reponse){
			
			//ajout des sessions
						$_SESSION['id_cat']	=$reponse->id_cat;
						$_SESSION['nom_cat']	=$reponse->nom_cat;
			
			
			header('location:?c=ins');
		}else{
			header('location:?c=cnxCat');
		}
	
	}
	include('vues/form_cnxCat.php');
?>