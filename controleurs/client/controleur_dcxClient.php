<?php
	if(!empty($_SESSION['email_client'])){
		session_destroy();
		header('location:?c');
	}
?>