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
				<div class="form-group">
					<label for="nom">Nom</label>
					<input type="text" class="form-control" name="nom_client" id="nom" placeholder="Votre nom">
				</div>		
				
				<div class="form-group">
					<label for="aemail">Adresse email</label>
					<input type="text" class="form-control" id="aemail" name="email_client" placeholder="Votre adresse email">
				</div>
				
				<div class="form-group">
					<label for="mp">Mot de passe</label>
					<input type="password" class="form-control" id="mp" name="mp_client" placeholder="Votre mot de passe">
				</div> 

				<div class="form-group">
					<label for="photo_c" class="control-label">Photo : </label>
					<input type="file" name="photo_client" class="form-control"id="photo_c" placeholder="Photo"/>
				</div>

				<button type="submit" class="btn btn-default" name="envoyer">Enregistrer</button>
			</form>
		</div>	

  <!------------------------------------------>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.js"></script>
	</body>
</html>