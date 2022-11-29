<?php
	if(!$_SESSION['id_admin']){
		header('location:?c=admin');
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Vivi-Fashion</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css" />
	<link rel="stylesheet" href="layout/bootstrap4/css/dataTables.bootstrap4.min.css">
	<!-- <link rel="stylesheet" href="layout/fontawesome_free_5_2_0_web/css/fontawesome.min.css"> -->
	<link rel="stylesheet" href="layout/icon-kit/dist/css/iconkit.min.css">
	<link rel="stylesheet" href="layout/ionicons/dist/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<style>a{text-decoration:none;}</style>
	<style>
		h1 {
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="container" style="margin-top:;">
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
						<li class="nav-item">
							<a class="nav-link" href="?c=espadmin">Acceuil <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=ins" tabindex="-1" aria-disabled="true">Enregistrer produits</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=produits" tabindex="-1" aria-disabled="true">Produits</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=affMbre" tabindex="-1" aria-disabled="true">Clients</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="?c=cnxComm" tabindex="-1" aria-disabled="true">Commandes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=affMsg" tabindex="-1" aria-disabled="true">Message</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="?c=dcnx_ad" tabindex="-1" aria-disabled="true">Déconnexion</a>
						</li>
					</ul>
				</div>
			</nav>
			<br>
			<br>
			<br>
		


		<div class="card">
			<div class="card-body">
				<h5 class="card-title text-center">Toutes les commandes</h5>
				<div class="table table-responsive">
				<table class="table table-sm table-condensed table-striped"	id="mydatatable">
					<thead>
						<tr>
							<th>CODE</th>
							<th>NOM(S)</th>
							<th>PHOTO</th>
							<th>PRIX</th>
							<th>NOM CLIENT</th>
							<th>ADRESSE CLIENT</th>
							<th>MOIS</th>
							<th>ANNEE</th>
							<th>DATES DE LA COMMANDE</th>
							<th>DATES DE LA LIVRAISON</th>
							<th>PAYE</th>
							<th>ACTION</th>


						</tr>
					</thead>

					<tbody>

					</tbody>
				</table>
				</div>
			</div>
		</div>

		<!-- debut modal-->
		<div class="modal fade" id="comm" tabindex="-1" role="dialog" aria-labelledby="ajoutLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="ajoutLabel">Edition Commande</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="" id="form_user" enctype="multipart/form-data">
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="id_commande" class="col-form-label">Code</label>
										<input type="text" name="id_commande" class="form-control form-control-sm"
											id="id_commande" readonly>
										<span id="erreur_id_commande" class="text-danger"></span>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="nom_commande" class="col-form-label">Produit</label>
										<input type="text" name="nom_commande" class="form-control form-control-sm"
											id="nom_commande" readonly>
										<span id="erreur_noms_commande" class="text-danger"></span>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="nom_client" class="col-form-label">Nom du client</label>
										<input id="nom_client" class="form-control form-control-sm" type="text" name="nom_client"
											readonly>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="prenom_client" class="col-form-label">Prénom du client</label>
										<input id="prenom_client" class="form-control form-control-sm" type="text" name="prenom_client"
											readonly>
									</div>
								</div>
							</div>





							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="mois_commande" class="col-form-label">Mois commande</label>
										<input type="text" name="mois_commande" class="form-control form-control-sm"
											id="mois_commande" readonly>
										<span id="erreur_mois_commande" class="text-danger"></span>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="annee_commande" class="col-form-label">Année commande</label>
										<input type="text" name="annee_commande" class="form-control form-control-sm"
											id="annee_commande" readonly>
										<span id="erreur_annee_commande" class="text-danger"></span>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="date_commande" class="col-form-label">Date commande</label>
										<input type="text" name="date_commande" class="form-control form-control-sm"
											id="date_commande" readonly>
										<span id="erreur_date_commande" class="text-danger"></span>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="date_livraison" class="col-form-label">Date livraison</label>
										<input id="date_livraison" class="form-control" type="text"
											name="date_livraison"
											value="<?php $date_livraison=date('Y-m-j'); echo($date_livraison)?>" readonly>
									</div>
								</div>
							</div>




							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="prix" class="col-form-label">Prix</label>
										<input id="prix" class="form-control" type="number" name="prix" readonly>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<!-- <label for="paye" class="col-form-label">Payé</label>
				<input type="text" name="paye" class="form-control form-control-sm" id="paye" > -->
										<label for="paye" class="col-form-label">Payé</label>
										<select id="paye" class="form-control form-control-sm" name="paye">
											<option></option>
											<option>Oui</option>
											<option>Non</option>
										</select>
										<span id="erreur_paye" class="text-danger"></span>
									</div>
								</div>
								<div class="col">
									<div class="form-group" hidden>
										<label for="id_client" class="col-form-label">Client</label>
										<input type="text" name="id_client" class="form-control form-control-sm"
											id="id_client">
										<span id="erreur_id_client" class="text-danger"></span>
									</div>
								</div>
								<div class="col">
									<div class="form-group" hidden>
									<label for="photo" class="col-form-label">Photo</label>
								<input type="text" name="photo" class="form-control form-control-sm" id="photo">
								<!-- <input type="file" name="photo" class="form-control form-control-sm" id="photo"> -->
								<span id="erreur_photo" class="text-danger"></span>
									</div>
								</div>
							</div>





							<div class="modal-footer">
								<div id="action_message" style="margin-right: 15px;"></div>
								<div id="erreur_mdp" class="text-danger" style="margin-right: 15px;"></div>
								<input type="hidden" name="action" id="action" value="modifier">
								<input type="hidden" name="id_cache" id="id_cache" value="id_cache">
								<input type="submit" name="form_users" id="form_users" class="btn btn-primary btn-sm"
									value="Enregister">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- fin modal-->


		</div>

		<!------------------------------------------>
		<script src="layout/bootstrap4/js/jquery.js"></script>
		<script src="layout/bootstrap4/js/bootstrap.min.js"></script>

		<script src="layout/bootstrap4/js/jquery.dataTables.min.js"></script>
		<script src="layout/bootstrap4/js/dataTables.bootstrap4.min.js"></script>
		<script src="layout/bootstrap4/js/dataTables.bootstrap4.min.js"></script>
		<!-- <script src="layout/fontawesome_free_5_2_0_web/js/fontawesome.min.css"></script> -->
		<script src="js/commande.js"></script>
		<script>
			//$('#mydatatable').DataTable()
		</script>
</body>

</html>