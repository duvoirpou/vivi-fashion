<?php 
	class commande
	{
		public $id_commande;
		public $nom_commande;
		public $prix;
		public $mois_commande;
		public $annee_commande;
		public $date_commande;
		public $photo;
		public $paye;
		public $id_client;
		

		public function __construct($id_commande,$nom_commande,$prix,$mois_commande,$annee_commande,$date_commande,$photo,$paye,$id_client)
					{
						$this->id_commande 		= $id_commande;
						$this->nom_commande 		= $nom_commande;
						$this->prix 		= $prix;
						$this->mois_commande 		= $mois_commande;
						$this->annee_commande 		= $annee_commande;
						$this->date_commande 		= $date_commande;
						$this->photo 		= $photo;
						$this->paye 		= $paye;
						$this->id_client 		= $id_client;
						
					}
				
		/*LISTE DES GETTERS*/
		
		public function getId_commande()
		{
			return $this->id_commande;
		}
		
		public function getNom_commande()
		{
			return $this->nom_commande;
		}	

		public function getPrix()
		{
			return $this->prix;
		}	
		
		public function getMois_commande()
		{
			return $this->mois_commande;
		}
		
		public function getAnnee_commande()
		{
			return $this->annee_commande;
		}		
		
		public function getDate_commande()
		{
			return $this->date_commande;
		}	
		
		public function getPaye()
		{
			return $this->paye;
		}	
		
		public function getPhoto()
		{
			return $this->photo;
		}	
		
		public function getId_client()
		{
			return $id_client->id_client;
		}		


		/*LISTE DES SETTERS*/
		
		public function setId_commande($id_commande)
		{
			$this->id_commande = $id_commande;
		}
		
		public function setNom_commande($nom_commande)
		{
			$this->nom_commande = $nom_commande;
		}	

		public function setPrix($prix)
		{
			$this->prix = $prix;
		}	
		
		public function setMois_commande($mois_commande)
		{
			$this->mois_commande = $mois_commande;
		}	
		
		public function setDate_commande($date_commande)
		{
			$this->date_commande = $date_commande;
		}
		
		public function setAnnee_commande($annee_commande)
		{
			$this->annee_commande = $annee_commande;
		}	
		
		public function setPaye($paye)
		{
			$this->paye = $paye;
		}	
		
		public function setPhoto($photo)
		{
			$this->photo = $photo;
		}	
		
		public function setId_client($id_client)
		{
			$this->id_client = $id_client;
		}		
		
		/*Connexion à la base de Données*/
		/* public function connexionBdd()
		{			
			try{
				$bdd = new PDO('mysql:host=localhost;dbname=maboutique;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMessage());
			}
		} */
		
		/*METHODE QUI PERMET DE SE CONNECTER AU SITE*/

			public function connexionAdmin($mois_commande,$annee_commande){

				$bdd = connexionBdd();

				$request = $bdd->prepare("SELECT * FROM commande WHERE  mois_commande=? AND annee_commande=?");

				$request->execute(array($_POST['mois_commande'],$_POST['annee_commande']));

				$reponse = $request->fetchObject();

				return $reponse;

				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
				unset($bdd);
		}
		
		
		
		
		//METHODE QUI PERMET DE MODIFIER LE MEMBRE/ETUDIANT
		public function ModifierCommande(){
			if($this->photo==""){
					$bdd = connexionBdd();
					$request=$bdd->prepare("UPDATE `commande` SET `nom_commande`=?,`prix`=?,`mois_commande`=?,`annee_commande`=?,`date_commande`=?,`paye`=?,`id_client`=? WHERE id_commande =?");
					
							$nom_commande		= $this->nom_commande;
							$prix		= $this->prix;
							$mois_commande		= $this->mois_commande;
							$annee_commande		= $this->annee_commande;
							$date_commande	= $this->date_commande;
							
							
							$paye	= $this->paye;
							$id_client	= $this->id_client;
							$id_commande		= $this->id_commande;
					
					$params=array($nom_commande,$prix,$mois_commande,$annee_commande,$date_commande,$paye,$id_client,$id_commande);
					$request->execute($params);
			}else{
				$bdd = connexionBdd();
				//tmp_name est un dossier temporaire
				$photo=$_FILES['photo']['tmp_name'];
				
				//chemin pour recevoir les photos du site
				//images nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($photo, 'images/'.$photo);
				
				$request=$bdd->prepare("UPDATE `commande` SET `nom_commande`=?,`prix`=?,`mois_commande`=?,`annee_commande`=?,`date_commande`=?,`photo`=?,`paye`=?,`id_client`=? WHERE id_commande =?");
							$nom_commande		= $this->nom_commande;
							$prix		= $this->prix;
							$mois_commande		= $this->mois_commande;
							$annee_commande		= $this->annee_commande;
							$date_commande	= $this->date_commande;
							
							$photo	= $this->photo;
							$paye	= $this->paye;
							$id_client	= $this->id_client;
							$id_commande		= $this->id_commande;
				
				$params=array($nom_commande,$prix,$mois_commande,$annee_commande,$date_commande,$photo,$paye,$id_client,$id_commande);
				$request->execute($params);
				
			}
			return $request;
		}
		
		
		
		
		
		

		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES COMMANDES */
		public function affichageCommande(){
			$bdd = connexionBdd();
			$client = $_SESSION['id_client'];
			$requete = $bdd->prepare("SELECT * FROM `commande` WHERE `id_client` = $client AND paye = 'Non'");
			$requete->execute();
			
			return $requete;
		}
		
		public function affichageCommandeTri(){
			$bdd = connexionBdd();
			$mois = $_SESSION['mois_commande'];
			$annee = $_SESSION['annee_commande'];
			$client = $_SESSION['id_client'];
			$requete = $bdd->prepare("SELECT * FROM `commande` WHERE `id_client` = $client AND mois_commande='$mois' AND annee_commande='$annee' ORDER BY id_commande DESC ");
			$requete->execute();
			
			return $requete;
		}
		
		
		
		//RECUPERER UN MEMBRE PAR L'ID
		public function getIdCommande($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `commande` WHERE id_commande=?");
			$params=array($code);
			$request->execute($params);
			$commande=$request->fetch();

			return $commande; 
		}
//======================================================================	
	}
?>