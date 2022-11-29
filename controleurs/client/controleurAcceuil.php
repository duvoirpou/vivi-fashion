<?php
include ('modeles/classeFunction.php');


$produit = new imagePanier(NULL,NULL,NULL,NULL,NULL,NULL);


$aff2 = $produit->affichePro2();
$aff3 = $produit->affichePro3();
$aff4 = $produit->affichePro4();
$aff5 = $produit->affichePro5();
$aff6 = $produit->affichePro6();
$aff7 = $produit->affichePro7();


if(isset($_POST['recherche'])){
	//var_dump($_POST);exit;
	if(!empty($_POST['id_type']) OR !empty($_POST['id_cat'])){
		$_SESSION['id_type']		= htmlentities(trim($_POST['id_type']));
		$_SESSION['id_cat']		= htmlentities(trim($_POST['id_cat']));

	header('location:rechercher_produits.php');

}
}


	include ('vues/client/acceuil.php');
?>