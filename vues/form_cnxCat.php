<?php
	if(!$_SESSION['id_admin']){
		header('location:?c=admin');
	}
	
	
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mon formulaire</title>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
		<style>h1{text-align:center;}</style>
	</head>

	<body>
		<div class="container" style="margin-top:150px;">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<button type="button" class="btn btn-primary btn-lg btn-block">CREEZ VOTRE COMPTE</button>
				</div>
				<div class="col-md-4"></div>
			</div>		

			<form style="margin-top:30px;" method="POST" action="" enctype="multipart/form-data">
				<label></label>
              <select name="nom_cat" class="field small-field" >
                <option value="Hommes">Hommes</option>
                <option value="Femmes">Femmes</option>
                <option value="Enfants">Enfants</option>
                <option value="Mixtes">Mixtes</option>
              </select>

				<button type="submit" class="btn btn-default" name="envoyer">Enregistrer</button>
			</form>
		</div>	

  <!------------------------------------------>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.js"></script>
	</body>
</html>