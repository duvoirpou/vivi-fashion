<?php
	if(!$_SESSION['id_admin']){
		header('location:?c=admin');
	}
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="layout/bootstrap4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<title>Vivi-Fashion</title>
	</head>
	<body>
	<!------------------------------------------------>
		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
				<a class="navbar-brand">Vivi-Fashion | 
				<?php
								echo $_SESSION['nom_admin'];
							?>
				</a>
				<button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="my-nav" class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="?c=espadmin">Acceuil <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=cnxCat" tabindex="-1" aria-disabled="true">Enregistrer produits</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=produits" tabindex="-1" aria-disabled="true">Produits</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=affMbre" tabindex="-1" aria-disabled="true">Clients</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=cnxComm" tabindex="-1" aria-disabled="true">Commandes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=affMsg" tabindex="-1" aria-disabled="true">Message</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=dcnx_ad" tabindex="-1" aria-disabled="true">Déconnexion</a>
						</li>
					</ul>
				</div>
			</nav>
			<br>
			<br>
			<br>
			
			<div class="row">
				<div class="col-xs-16 col-sm-6 col-md-11">
					<h4 style="text-align:center">Commandes</h4>
					
				<form method="POST" action="">
					<label></label>
					<input type="text" class="field" style="width:200px"/><br>
					
					
					<label>Date</label>
					  
					  <select class="field small-field" name="mois_commande">
						<option value=""></option>
						<option value="Nov">Novembre</option>
						<option value="Dec">Décembre</option>
						<option value="Janv">Janvier</option>
					  </select>
					  
					  <select class="field small-field" name="annee_commande">
						<option value=""></option>
						<option value="2018">2018</option>
					  </select>
					  <br>
					  <a href="?c=commTri" class="btn btn-primary " role="button" name="">Recherche</a>
				</form>
				
						<table class="table table-condensed" style="background-color:white;" id="mydatatable">
							<thead>
								<tr>
									<th>CODE</th>
									<th>NOM(S)</th>
									<th>PHOTO</th>
									<th>NOM CLIENT</th>
									<th>DATES & HEURES</th>
									
									
								</tr>
							</thead>

							<tbody>
									<?php while($et=$affCommande->fetch()){?>
									<tr>
										<td><?php echo($et['id_commande'])?></td>
										<td><?php echo($et['nom_commande'])?></td>
										
										<!---affichage de la photo---->
										<td>
											<img src="images/<?php echo($et['photo'])?>" style="width:75px;height:80px;"/>
										</td>
										
										<td><?php echo($et['nom_client'])?></td>
										<td><?php echo($et['date_commande'])?></td>
										
			
										<!---MODIFICATION--
										<td style="text-align:center">
											<a class="a_lien" style="margin-left:5px;" href="?c=modif&code=<?php echo($et['id_client'])?>">
												MODIFIER
											</a>			-->			
										<!---SUPPRESSION--
											<a class="a_lien" style="margin-left:5px;" href="?c=supprClient&code=<?php echo($et['id_client'])?>">
												SUPPRIMER
											</a>
										</td>-->
									</tr>	
									<?php }?>
							</tbody>
						</table>
				</div>
			</div>
		</div>
		<script src="layout/bootstrap4/js/jquery.js"></script>
  <script src="layout/bootstrap4/js/bootstrap.min.js"></script>
  
  <script src="layout/bootstrap4/js/jquery.dataTables.min.js"></script>
   <script src="layout/bootstrap4/js/dataTables.bootstrap4.min.js"></script>
   <script>
			$('#mydatatable').DataTable()
			</script>
	</body>
</html>