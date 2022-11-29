<?php 
	ini_set('display_errors', 'off');
	try{
		$dbh = new PDO('mysql:host=localhost;dbname=vivi_fashion;charset=utf8', 'root', '');
		 
	}catch(PDOException $e){
		print "Erreur!: " . $e->getMessage() . "<br>";
		die();
	}

	$limit = ( isset($_GET['limit']) ) ? $_GET['limit'] : 6;
	$page = ( isset($_GET['page']) ) ? $_GET['page'] : 1;
	$links = ( isset($_GET['links']) ) ? $_GET['links'] : 7;

	$_SESSION['limit'] = $limit;
	$_SESSION['page'] = $page;

	if(isset($_POST['rechercher'])){
		//var_dump($_POST);die();
		if(!empty($_POST['id_type']) OR !empty($_POST['id_cat'])){
		$_SESSION['id_type']		= htmlentities(trim($_POST['id_type']));
		$_SESSION['id_cat']		= htmlentities(trim($_POST['id_cat']));
	
		header('location:rechercher_produits.php');
	
	}
}


	if($_SESSION['id_cat']==0 OR $_SESSION['id_type']==0){
		$var1 = $_SESSION['id_type']; $var2 = $_SESSION['id_cat'];
		$query = "SELECT * FROM `produits` JOIN categories ON produits.id_cat=categories.id_cat JOIN type_produit ON produits.type_produits=type_produit.id_type WHERE produits.id_cat LIKE '%$var2%' OR produits.type_produits LIKE '%$var1%' ORDER BY id_produits DESC";
	} else{
		$var1 = $_SESSION['id_type']; $var2 = $_SESSION['id_cat'];
		$query = "SELECT * FROM `produits` JOIN categories ON produits.id_cat=categories.id_cat JOIN type_produit ON produits.type_produits=type_produit.id_type WHERE produits.id_cat LIKE '%$var2%' AND produits.type_produits LIKE '%$var1%' ORDER BY id_produits DESC";
	}

	require_once 'paginator.class.php';
	$paginator = new Paginator($dbh, $query);
	$results = $paginator->getData($limit, $page);



		
//======================================================================	
	
	
?>