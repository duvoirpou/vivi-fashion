<!DOCTYPE html>
<html>
	<head>
		<title>mon formulaire</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="layout/bootstrap4/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="layout/style.css"/>
	</head>

	<body>
		<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
		<div class="card">
			<div class="card-header">
				Produit <?php echo($produit['id_produits'])?>
			</div>
			<div class="card-body">
				<h5 class="card-title text-center">EDITER</h5>
				<!-- <p class="card-text">Content</p> -->
				<form method="POST" action="" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" name="id_produits" value ="<?php echo($produit['id_produits'])?>" class="form-control"/>
					</div>
					
					<div class="form-group">
						<label for="id_cat">Catégorie</label>
					<select class="form-control" id="id_cat" name="id_cat" style="width:100px">
						<option value="<?php $bdd = connexionBdd();
						
						$type_cat=$produit['id_cat'];
                        $rec_type = $bdd->prepare("SELECT * FROM categories WHERE id_cat = $type_cat");
                        $rec_type->execute();
                        $lib_cat=$rec_type->fetch();
						
						echo($produit['id_cat'])?>"></option>
						

						<?PHP //$bdd = connexionBdd();
                                            $req_type = $bdd->prepare("SELECT * FROM categories ORDER BY id_cat");
                                            $req_type->execute();
                                            while ($data = $req_type->fetch()) {
                                                echo "<option value=" . $data['id_cat'] . ">" . $data['nom_cat'] . "</option>";
											}
											?>

						
					  </select>
					</div>	
					
					<div class="form-group">
						<label class="control-label">Nom : </label>
						<input type="text" name="nom_produits" value ="<?php echo($produit['nom_produits'])?>" class="form-control"/>
					</div>	
					
					<div class="form-group">
						<label for="type_produits">Type</label>
					<select class="form-control" id="type_produits" name="type_produits" style="width:100px">
						<option value="<?php echo($produit['type_produits'])?>"></option>
						<?PHP //$bdd = connexionBdd();
                                            $type = $bdd->prepare("SELECT * FROM `type_produit`  ORDER BY id_type");
                                            $type->execute();
                                            while ($data = $type->fetch()) {
                                                echo "<option value=" . $data['id_type'] . ">" . $data['libelle'] . "</option>";
											}
											?>
						
					  </select>
					</div>					
					
					<div class="form-group">
						<label class="control-label">Prix : </label>
						<input type="number" name="prix" value ="<?php echo($produit['prix'])?>" class="form-control"/>
					</div>
					
					
					
					<div class="form-group">
						<label class="control-label">Photo : </label>
						<input type="file" name="photo" class="form-control"/>
						<img src="images/<?php echo($produit['photo']) ?>" style="width:80px;height:85px;"/>
					</div>
					
					<div>
						<button type="submit" class="btn btn-primary" name="modif" onclick="return confirm('Confirmer ?');">Modifier</button>
					</div>
				</form>	
			</div>
		</div>
		  
		</div>
	</body>
</html>