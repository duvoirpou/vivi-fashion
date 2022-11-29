<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mon formulaire</title>
		<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>
		<style>h1{text-align:center;}</style>
	</head>

	<body>
		<div class="container" style="margin-top:150px;">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<button type="button" class="btn btn-primary btn-lg btn-block">CONNEXION ADMINISTRATEUR</button>
				</div>
				<div class="col-md-4"></div>
			</div>		
	 	 
			<form style="margin-top:30px;" method="POST" action="">	
				<div class="form-group">
					<label for="aemail">Compte</label>
					<input type="text" class="form-control" id="aemail" name="nom_admin" placeholder="votre nom">
				</div>
				
				<div class="form-group">
					<label for="mp">Mot de passe</label>
					<input type="password" class="form-control" id="mp" name="mp_admin" placeholder="Votre mot de passe">
				</div>

				<button type="submit" class="btn btn-default" name="cnx_admin">Connexion</button>
			</form>
		</div>	

  <!------------------------------------------>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.js"></script>
	</body>
</html>