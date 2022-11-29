<!DOCTYPE html>
<html>
	<head>
		<title>Vivi-Fashion</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css"/>
	</head>

	<body>
		<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
		

		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Message</h5>
				<!-- <p class="card-text">Content</p> -->
				<form method="POST" action="" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="id_msg" value ="<?php echo($message['id_msg'])?>" class="form-control" readonly/>
					</div>
					
					<div class="form-group" >
						<!-- <label class="control-label">Nom : </label> -->
						<input type="text" name="identite" value ="<?php echo($message['identite'])?>" class="form-control" placeholder="Identité" readonly/>
					</div>	
					
					<div class="form-group" >
						<!-- <label class="control-label">Mail : </label> -->
						<input type="text" name="mail" value ="<?php echo($message['mail'])?>" class="form-control" placeholder="adresse mail" readonly/>
					</div>					
					
					<div class="form-group" >
						<!-- <label class="control-label">Tel : </label> -->
						<input type="text" name="tel" value ="<?php echo($message['tel'])?>" class="form-control" placeholder="Téléphone" readonly/>
					</div>
					
					<div class="form-group" hidden>
						<!-- <label for="msg">Text</label> -->
						<textarea id="msg" class="form-control" name="msg" rows="3" value ="<?php echo($message['msg'])?>"></textarea>
					</div>

					<div class="form-group" hidden>
						<!-- <label class="control-label">Tel : </label> -->
						<input type="text" name="statut" value ="Lu" class="form-control" readonly/>
					</div>
					
					<p class="card-text"><?php echo($message['msg'])?></p>
					
					<div class="form-group">
						<button class="btn btn-primary" type="submit" name="modif" onclick="return confirm('Confirmer ?');">Retour</button>
					</div>
				</form>	
				
			</div>
		</div>


		  
		</div>
	</body>
</html>