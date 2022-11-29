<?php
	if(!$_SESSION['id_admin']){
		header('location:?c=admin');
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css" />
	<link rel="stylesheet" href="layout/bootstrap4/css/dataTables.bootstrap4.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="layout/style.css"/> -->
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="layout/icon-kit/dist/css/iconkit.min.css">
	<link rel="stylesheet" href="layout/ionicons/dist/css/ionicons.min.css">
	<title>Vivi-Fashion</title>
	<style>a{text-decoration:none;}</style>
</head>

<body>
	<!------------------------------------------------>
	<div class="container">
		<div class="row">
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
						<li class="nav-item ">
							<a class="nav-link" href="?c=espadmin">Acceuil <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="?c=ins" tabindex="-1" aria-disabled="true">Enregistrer produits</a>
						</li>
						<li class="nav-item active">
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
			
		</div>

		<br>
		<br>
		<br>
		<div class="card">
			<div class="card-body">
				<h5 class="card-title text-center">Produits</h5>
				<!-- <p class="card-text">Content</p> -->
				<table class="table table-sm table-bordered table-striped" style="background-color:white;"
					id="mydatatable">
					<thead>
						<tr>
							<th>CODE</th>
							<th>PHOTO</th>
							<th>NOM DU PRODUITS</th>


							<th>CATEGORIE</th>
							<th>TYPE</th>
							<th>PRIX</th>

							<th style="text-align:center">ACTION</th>
						</tr>
					</thead>

					<tbody>
						<?php while($et=$aff->fetch()){?>
						<tr>
							<td><?php echo($et['id_produits'])?></td>
							<!---affichage de la photo---->
							<td>
								<img src="images/<?php echo($et['photo'])?>" style="width:75px;height:80px;" />
							</td>

							<td><?php echo($et['nom_produits'])?></td>
							<td><?php echo($et['nom_cat'])?></td>
							<td><?php echo($et['libelle'])?></td>




							<td><?php echo ($et['prix'])?></td>


							<!---MODIFICATION---->
							<td style="text-align:center">
								<a class="btn btn-primary btn-sm" style="margin-left:5px;" href="?c=modifProduits&code=<?php echo($et['id_produits'])?>">
								<i class="ik ik-edit"></i>MODIFIER
								</a>
								<!---SUPPRESSION---->
								<!--<a class="a_lien" style="margin-left:5px;" href="?c=supprProduits&code=<?php echo($et['id_produits'])?>">
												SUPPRIMER
											</a>-->
							</td>
						</tr>
						<?php }?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="5" class="text-right">Total : </th>
							<th colspan="6"></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

	</div>
	<script src="layout/bootstrap4/js/jquery.js"></script>
	<script src="layout/bootstrap4/js/bootstrap.min.js"></script>

	<script src="layout/bootstrap4/js/jquery.dataTables.min.js"></script>
	<script src="layout/bootstrap4/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$('#mydatatable').DataTable({
			dom: '<"top">rt<"bottom"lfp><"clear">',
			footerCallback: function (row, data, start, end, display) {
				var api = this.api(),
					data;

				var intVal = function (i) {
					return typeof i === 'string' ?
						i.replace(/[\$,]/g, '') * 1 :
						typeof i === 'number' ?
						i : 0;
				};
				total = api
					.column(5)
					.data()
					.reduce(function (a, b) {
						return intVal(a) + intVal(b);
					}, 0);

				pageTotal = api
					.column(5, {
						page: 'current'
					})
					.data()
					.reduce(function (a, b) {
						return intVal(a) + intVal(b);
					}, 0);

				$(api.column(5).footer()).html(
					pageTotal + ' FCFA ' + '( sur ' + total + ' FCFA total)'
				);



			}

		});
	</script>
</body>

</html>