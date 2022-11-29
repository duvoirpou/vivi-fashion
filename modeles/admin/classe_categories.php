<?php 
	class categories
	{
		private $id_cat;
		private $nom_cat;		
		

		public function __construct($id_cat,$nom_cat)
					{
						$this->id_cat=$id_cat;
						$this->nom_cat= $nom_cat ;
						
					}

		/*LISTE DES GETTERS*/
		
		public function getId_cat()
		{
			return $this->id_cat;
		}
		
		public function getNom_cat()
		{
			return $this->nom_cat;
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

		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		public function affichageMembres(){
			$cnx = connexionBdd();
			$requete = $cnx->prepare("SELECT * FROM categories");
			$requete->execute();
			
			return $requete;
		}

		/*METHODE QUI PERMET D'AJOUTER UNe categories*/
		public function ajoutCategories(){
			
			$cnx = connexionBdd();
			
			//requête pour éviter la redendance des noms
			$request = $cnx->prepare("SELECT * FROM categories WHERE nom_cat = :nom_cat");
			$result = $request->execute(array(
												':nom_cat'=>$this->nom_cat,
											));
			
			$result=$request->fetchobject();

			//vérification pour s'avoir si l'objet existe
			if(!is_object($result)){

				$request = $cnx->prepare("INSERT INTO produits(id_cat,nom_cat) 
										  VALUES (:id_cat,:nom_cat)");

				$reponse = $request->execute(array(
													'id_cat'=> $this->id_cat,
													'nom_cat'=> $this->nom_cat
													
												));	
					 
				return $reponse;
					
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($cnx);
				}
		}
		
		
		//METHODE QUI PERMET DE SUPPRIMER EMPLOYE
			public function supprimerProduits(){
				//connexion à la cnx
				
				$cnx = connexionBdd();
				$code=$_GET['code'];
				$request=$cnx->prepare("DELETE FROM produits WHERE id_cat=? LIMIT 1");
				
				$params=array($code);
				
				$request->execute($params);
				
				return $request;
		}

		
				/*METHODE QUI PERMET DE SE CONNECTER AU SITE*/

			public function connexionSiteCategories($nom_cat){

				$cnx = connexionBdd();

				$request = $cnx->prepare("SELECT * FROM categories WHERE  nom_cat=?");

				$request->execute(array($_POST['nom_cat']));

				$reponse = $request->fetchObject();

				return $reponse;

				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
				unset($cnx);
		}
		
		//METHODE QUI PERMET DE MODIFIER LE MEMBRE/ETUDIANT
		public function ModifierMembre(){
			if($this->photo_client==""){
					$cnx = connexionBdd();
					$request=$cnx->prepare("UPDATE `client` SET `nom_client`=?,`email_client`=?,`photo_client`=? WHERE id_client =?");
					
							$nom_client		= $this->nom_client;
							$email_client	= $this->email_client;
							$photo_client	= $this->photo_client;
							$id_client		= $this->id_client;
					
					$params=array($nom_client,$email_client,$photo_client,$id_client);
					$request->execute($params);
			}else{
				$cnx =connexionBdd();
				//tmp_name est un dossier temporaire
				$photo_client=$_FILES['photo_client']['tmp_name'];
				
				//chemin pour recevoir les photos du site
				//images nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($photo_client, 'images/'.$photo_client);
				
				$request=$cnx->prepare("UPDATE `client` SET `nom_client`=?,`email_client`=?,`photo_client`=? WHERE id_client =?");
							$nom_client		= $this->nom_client;
							$email_client	= $this->email_client;
							$photo_client	= $this->photo_client;
							$id_client		= $this->id_client;
				
				$params=array($nom_client,$email_client,$photo_client,$id_client);
				$request->execute($params);
				
			}
			return $request;
		}
		
//======================================================================	
	}
	
?>