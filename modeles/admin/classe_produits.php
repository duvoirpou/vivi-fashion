<?php 
	class produits
	{
		private $id_produits;
		private $id_cat;
		private $nom_produits;		
		private $type_produits;		
		/* private $quantite; */
		private $prix;
		private $photo;

		public function __construct($id_produits,$id_cat,$nom_produits,$type_produits,$prix,$photo)/* $quantite, */
					{
						$this->id_produits=$id_produits;
						$this->id_cat=$id_cat;
						$this->nom_produits= $nom_produits ;
						$this->type_produits= $type_produits ;
						/* $this->quantite=$quantite; */
						$this->prix=$prix;
						$this->photo= $photo ;
					}

		/*LISTE DES GETTERS*/
		
		public function getId_produits()
		{
			return $this->id_produits;
		}
		
		public function getId_cat()
		{
			return $this->id_cat;
		}
		
		public function getNom_produits()
		{
			return $this->nom_produits;
		}
		
		public function getType_produits()
		{
			return $this->type_produits;
		}
		
		public function getQuantite()
		{
			return $this->quantite;
		}	

		public function getPrix()
		{
			return $this->prix;
		}	
		
		

		public function getPhoto()
		{
			return $this->photo;
		}		
		
		/*LISTE DES SETTERS*/
		
		public function setId_produits($id_produits)
		{
			$this->id_produits = $id_produits;
		}
		
		
		public function setId_cat($id_cat)
		{
			$this->id_cat = $id_cat;
		}
		
		public function setNom_produits($nom_produits)
		{
			$this->nom_produits = $nom_produits;
		}	
		
		public function setType_produits($type_produits)
		{
			$this->type_produits = $type_produits;
		}	
		
		public function setPrix($type_prix)
		{
			$this->type_prix = $type_prix;
		}	
		
		public function setPhoto($photo)
		{
			$this->photo = $photo;
		}	
						
		
		/*Connexion à la base de Données*/
		/* public function connexioncnx()
		{			
			try {
  $cnx = new PDO('mysql:host=localhost;dbname=maboutique','root','',
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); return $cnx;
}
catch(Exception $e) {
  die($e->getMessage());
}
		} */

		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES Produits*/
		public function affichageProduits(){
			$cnx = connexionBdd();
			$requete = $cnx->prepare("SELECT * FROM produits INNER JOIN categories ON produits.id_cat = categories.id_cat JOIN type_produit ON produits.type_produits=type_produit.id_type ORDER BY id_produits");
			$requete->execute();
			
			return $requete;
		}

		/*METHODE QUI PERMET D'AJOUTER UN Produit*/
		public function ajoutProduit(){
			
			$cnx = connexionBdd();
			
			//requête pour éviter la redendance des noms
			/* $request = $cnx->prepare("SELECT * FROM produits WHERE nom_produits = :nom_produits");
			$result = $request->execute(array(
												':nom_produits'=>$this->nom_produits,
											));
			
			$result=$request->fetchobject(); */

			//vérification pour s'avoir si l'objet existe
			// if(!is_object($result)){
/* quantite, */
				$request = $cnx->prepare("INSERT INTO produits(id_produits,id_cat,nom_produits,type_produits,prix,photo) 
										  VALUES (:id_produits,:id_cat,:nom_produits,:type_produits,:prix,:photo)");/* :quantite, */

				$reponse = $request->execute(array(
													'id_produits'=> $this->id_produits,
													'id_cat'=> $this->id_cat,
													'nom_produits'=> $this->nom_produits,
													'type_produits'=> $this->type_produits,
																
													/* 'quantite'=> $this->quantite, */
													'prix'=> $this->prix,
													'photo'=> $this->photo
												));	
					 
				return $reponse;
					
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($cnx);
				/* } */
		}
		
		
		//METHODE QUI PERMET DE SUPPRIMER EMPLOYE
			public function supprimerProduits(){
				//connexion à la cnx
				
				$cnx = connexionBdd();
				$code=$_GET['code'];
				$request=$cnx->prepare("DELETE FROM produits WHERE id_produits=? LIMIT 1");
				
				$params=array($code);
				
				$request->execute($params);
				
				return $request;
		}

		
				/*METHODE QUI PERMET DE SE CONNECTER AU SITE*/

			public function connexionSiteproduits($email_produits,$mp_produits){

				$cnx = connexionBdd();

				$request = $cnx->prepare("SELECT * FROM produits WHERE  email_produits=? AND mp_produits=?");

				$request->execute(array($_POST['email_produits'],$_POST['mp_produits']));

				$reponse = $request->fetchObject();

				return $reponse;

				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
				unset($cnx);
		}
		
		//METHODE QUI PERMET DE MODIFIER 
		public function ModifierProduits(){
			if($this->photo==""){
					$cnx = connexionBdd();
					$request=$cnx->prepare("UPDATE `produits` SET `id_cat`=?, `nom_produits`=?,`type_produits`=?,`prix`=? WHERE id_produits =?");
							$id_cat		= $this->id_cat;
							$nom_produits		= $this->nom_produits;
							$type_produits	= $this->type_produits;
							$prix	= $this->prix;
							
							$id_produits		= $this->id_produits;
					
					$params=array($id_cat,$nom_produits,$type_produits,$prix,$id_produits);
					$request->execute($params);
			}else{
				$cnx =connexionBdd();
				//tmp_name est un dossier temporaire
				$photos=$_FILES['photo']['tmp_name'];
				
				//chemin pour recevoir les photos du site
				//images nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($photo, 'images/'.$photos);
				
				$request=$cnx->prepare("UPDATE `produits` SET `id_cat`=?, `nom_produits`=?,`type_produits`=?,`prix`=?,`photo`=? WHERE `id_produits`=?");
							$id_cat		= $this->id_cat;
							$nom_produits		= $this->nom_produits;
							$type_produits	= $this->type_produits;
							$prix	= $this->prix;
							$photo	= $this->photo;
							$id_produits		= $this->id_produits;
				
				$params=array($id_cat,$nom_produits,$type_produits,$prix,$photo,$id_produits);
				$request->execute($params);
				
			}
			return $request;
		}
		
		
		
		
		
		public function getIdProduits($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `produits` WHERE id_produits=?");
			$params=array($code);
			$request->execute($params);
			$produit=$request->fetch();

			return $produit; 
		}
//======================================================================	
	}
	
?>