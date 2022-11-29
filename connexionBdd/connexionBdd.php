<?php 
	
		/*Connexion à la base de Données*/
		function connexionBdd()
		{			
			try{
				$bdd = new PDO('mysql:host=localhost;dbname=vivi_fashion;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMessage());
			}
		}

		
		


		
//======================================================================	
	
	
?>