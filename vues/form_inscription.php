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
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css" />
		<style>a{text-decoration:none;}</style>
	</head>

	<body>
		<div class="container" style="margin-top:150px;">
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
						<li class="nav-item active">
							<a class="nav-link" href="?c=ins" tabindex="-1" aria-disabled="true">Enregistrer produits</a>
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
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<button type="button" class="btn btn-primary btn-lg btn-block">Ajoutez un produit</button>
				</div>
				<div class="col-md-4"></div>
			</div>		

			<form style="margin-top:30px;" method="POST" action="" enctype="multipart/form-data">
				<!-- <div class="form-group" hidden>
					<label for="id_cat"></label>
					<input type="number" class="form-control" id="id_cat" name="id_cat" value="<?php echo $_SESSION['id_cat'] ?>" placeholder="">
				</div> -->
			
				<div class="form-group">
					<label for="nom">Nom</label>
					<input type="text" class="form-control" name="nom_produits" id="nom" placeholder="nom du produit" required>
				</div>
				
				<div class="form-group">
             <label>Type de produit</label>
            <select class="form-control" name="type_produits" required>
            <option ></option>
                                            <?PHP $dbh = connexionBdd();
                                            $req_arrond = $dbh->prepare("SELECT * FROM type_produit ORDER BY id_type");
                                            $req_arrond->execute();
                                            while ($data = $req_arrond->fetch()) {
                                                echo "<option value=" . $data['id_type'] . ">" . $data['libelle'] . "</option>";
                                            }
                                            ?>
                     </select>                       
            
            <!-- <label> -->
			  </div>		
			  

			  <div class="form-group">
            <label>Categorie</label>
            <select class="form-control" name="id_cat" required>
              <option ></option>
              <?PHP
                  $req_type = $dbh->prepare("SELECT * FROM categories ORDER BY id_cat");
                  $req_type->execute();
                  while ($data = $req_type->fetch()) {
                       echo "<option value=" . $data['id_cat'] . ">" . $data['nom_cat'] . "</option>";
                                            }
                                            ?>
            </select>
            </div>
				
				
				
				<!-- <div class="form-group">
					<label for="quantite">quantite</label>
					<input type="number" class="form-control" id="quantite" name="quantite" placeholder="">
				</div>-->
				
				<div class="form-group">
					<label for="mp">prix</label>
					<input type="number" class="form-control" id="mp" name="prix" placeholder="prix du produit" required>
				</div> 

				<div class="form-group">
					<label for="photo_c" class="control-label">Photo : </label>
					<input type="file" name="photo" class="form-control"id="photo_c" placeholder="Photo" required/>
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