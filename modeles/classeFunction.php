<?php
	class imagePanier {
	
		public function Produit($id){
						$cnx= connexionBdd();
		$reponses = $cnx->query("SELECT * FROM produits WHERE id_produits =$id");
	  $donnees=$reponses->fetch();
	  //var_dump($donnees) ;
	  return $donnees;
		}
		
		
		
	  
		
		
		public function TraitementProduits(){
		
		
		$cnx= connexionBdd();
		$reponses = $cnx->query("SELECT * FROM produits");
	  $donnees=$reponses->fetch();
	  
	  
	  
	 
	  
      // echo '<a href="produits.php?ajouter='.$donnees['img'].'"><i class="fa fa-cart-arrow-down" style="font-size:25px; margin-left:30px; margin-top:10px"></i></a>" />';
	}
	
	

	public function affichePro1(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM produits");
			$requete->execute();
			
			return $requete;
		}


		public function affichePro2(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM produits JOIN categories ON produits.id_cat=categories.id_cat JOIN type_produit ON produits.type_produits=type_produit.id_type ORDER BY id_produits DESC LIMIT 2");
			$requete->execute();
			
			return $requete;
		}


		public function affichePro3(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM produits JOIN categories ON produits.id_cat=categories.id_cat JOIN type_produit ON produits.type_produits=type_produit.id_type ORDER BY id_produits DESC LIMIT 2 , 1");
			$requete->execute();
			
			return $requete;
		}	


		public function affichePro4(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM produits JOIN categories ON produits.id_cat=categories.id_cat JOIN type_produit ON produits.type_produits=type_produit.id_type ORDER BY id_produits DESC LIMIT 3 , 2");
			$requete->execute();
			
			return $requete;
		}

		public function affichePro5(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM produits JOIN categories ON produits.id_cat=categories.id_cat JOIN type_produit ON produits.type_produits=type_produit.id_type ORDER BY id_produits DESC LIMIT 5 , 1");
			$requete->execute();
			
			return $requete;
		}

		public function affichePro6(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM produits JOIN categories ON produits.id_cat=categories.id_cat JOIN type_produit ON produits.type_produits=type_produit.id_type ORDER BY id_produits DESC LIMIT 6 , 19");
			$requete->execute();
			
			return $requete;
		}

		public function affichePro7(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM produits JOIN categories ON produits.id_cat=categories.id_cat JOIN type_produit ON produits.type_produits=type_produit.id_type ORDER BY id_produits DESC LIMIT 25 , 1");
			$requete->execute();
			
			return $requete;
		}




	public function getIdProduits($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `produits` WHERE id_produits=?");
			$params=array($code);
			$request->execute($params);
			$produit=$request->fetch();

			return $produit; 
		}
	
		
		
		public function index(){
			
		}
		
		
		
		
	}
?>