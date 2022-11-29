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
						<input type="hidden" name="id_commande" value ="<?php echo($commande['id_commande'])?>" class="form-control"/>
					</div>
					
					<div class="form-group" hidden>
						<label class="control-label">Nom : </label>
						<input type="text" name="nom_commande" value ="<?php echo($commande['nom_commande'])?>" class="form-control"/>
					</div>	
					
					<div class="form-group" hidden>
						<label class="control-label">Mois : </label>
						<input type="text" name="mois_commande" value ="<?php echo($commande['mois_commande'])?>" class="form-control"/>
					</div>					
					
					<div class="form-group" hidden>
						<label class="control-label">Année : </label>
						<input type="text" name="annee_commande" value ="<?php echo($commande['annee_commande'])?>" class="form-control"/>
					</div>
					
					
					
					<div class="form-group" hidden>
						<label class="control-label">Date : </label>
						<input type="text" name="date_commande" value ="<?php echo($commande['date_commande'])?>" class="form-control"/>
					</div> 

					<div class="form-group" hidden>
						<label class="control-label">Date : </label>
						<input type="text" name="date_livraison" value ="<?php $date_livraison=date('Y-m-j'); echo($date_livraison)?>" class="form-control"/>
					</div>
					
					
					
					<div class="form-group">
						<label class="control-label">Payé : </label>
						
						
						<select class="field small-field" id="paye" name="paye" style="width:100px">
						<?php if($commande['paye']=="Oui"){?>
						<option value="<?php echo($commande['paye'])?>"><?php echo($commande['paye'])?></option>
						<option value="Non">Non</option>
						<?php }?>
						<?php if($commande['paye']=="Non"){?>
							<option value="<?php echo($commande['paye'])?>"><?php echo($commande['paye'])?></option>
						<option value="Oui">Oui</option>
							<?php }?>
						</select>
					</div>	
					
					<div class="form-group" hidden>
						<label class="control-label">Id_client : </label>
						<input type="text" name="id_client" value ="<?php echo($commande['id_client'])?>" class="form-control"/>
					</div>	
					
					<div class="form-group" hidden>
						<label class="control-label">Photo : </label>
						<input type="file" name="photo_commande" class="form-control"/>
						<img src="images/<?php echo($commande['photo']) ?>" style="width:80px;height:85px;"/>
					</div>
					
					<div>
						<button type="submit" name="modif" onclick="return confirm('Confirmer ?');">Modifier</button>
					</div>
				</form>	
			</div>
			</div>
		</div>
	</body>
</html>