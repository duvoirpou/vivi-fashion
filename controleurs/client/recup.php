<?php
require '../modeles/classeVaccination.php';
$ani2 = new panier();

/* echo '<br><span style="color:red"><b>Table vaccination</b></span><br>'; */
	$ani2->connect();
	if(isset($_GET['id'])){
		$ani2->TraitementProduits($_GET['id']);
	}
	/* $ani2->modifVa();
	$ani2->tableauVa(); */
	
	// echo '<a href="traitement.classeVa.php">retour formulaire</a>';
	// echo ' <a href="http://localhost/APC_PHP/MCD/POO/Nouveau%20dossier/Controleurs/acceuil.php">Deconnexion</a>';
?>