<!DOCTYPE html>
<html>
	<head>
		<title>mon formulaire</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>

	<body>
		<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
		
		  <div class="panel panel-default">
		  
			<div class="panel-heading">EDITER</div>
				
			<div class="panel-body">
				<form method="POST" action="" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" name="id_client" value ="<?php echo($client['id_client'])?>" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label class="control-label">Nom : </label>
						<input type="text" name="nom_client" value ="<?php echo($client['nom_client'])?>" class="form-control"/>
					</div>	
					
					<div class="form-group">
						<label class="control-label">Prénom : </label>
						<input type="text" name="prenom_client" value ="<?php echo($client['prenom_client'])?>" class="form-control"/>
					</div>					
					
					<div class="form-group">
						<label class="control-label">Email : </label>
						<input type="email" name="email_client" value ="<?php echo($client['email_client'])?>" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label class="control-label">Mot de passe : </label>
						<input type="text" name="mp_client" value ="<?php echo($client['mp_client'])?>" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label class="control-label">Adresse : </label>
						<input type="text" name="adresse_client" value ="<?php echo($client['adresse_client'])?>" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label class="control-label">Ville : </label>
						<input type="text" name="ville_client" value ="<?php echo($client['ville_client'])?>" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label class="control-label">Téléphone : </label>
						<input type="text" name="tel_client" value ="<?php echo($client['tel_client'])?>" class="form-control"/>
					</div>	
					
					<!--<div class="form-group">
						<label class="control-label">Photo : </label>
						<input type="file" name="photo_client" class="form-control"/>
						<img src="../images/<?php echo($client['photo_client']) ?>" style="width:80px;height:85px;"/>
					</div>-->
					
					<div>
						<button type="submit" name="modif" onclick="return confirm('Confirmer ?');">Modifier</button>
					</div>
				</form>	
			</div>
			</div>
		</div>
	</body>
</html>