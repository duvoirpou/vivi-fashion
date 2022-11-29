<?php
	if(!empty($_SESSION['nom_cat'])){
		session_destroy();
		header('Location:?c=espadmin');
	}
?>