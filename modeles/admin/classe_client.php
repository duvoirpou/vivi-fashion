<?php 
	class client
	{
		public $id_client;
		public $nom_client;
		public $prenom_client;
		public $sexe_client;
		public $email_client;
		public $mp_client;
		public $adresse_client;
		public $ville_client;
		public $tel_client;

		public function __construct($id_client,$nom_client,$prenom_client,$sexe_client,$email_client,$mp_client,$adresse_client,$ville_client,$tel_client)
					{
						$this->id_client 		= $id_client;
						$this->nom_client 		= $nom_client ;
						$this->prenom_client 		= $prenom_client ;
						$this->sexe_client 		= $sexe_client ;
						$this->email_client 	= $email_client;
						$this->mp_client		= $mp_client;
						$this->adresse_client		= $adresse_client;
						$this->ville_client		= $ville_client;
						$this->tel_client		= $tel_client;
						
					}

		/*LISTE DES GETTERS*/
		
		public function getId_client()
		{
			return $this->id_client;
		}
		
		public function getNom_client()
		{
			return $this->nom_client;
		}	

		public function getPrenom_client()
		{
			return $this->prenom_client;
		}	
		

		public function getSexe_client()
		{
			return $this->sexe_client;
		}	

		public function getEmail_client()
		{
			return $this->email_client;
		}

		public function getMp_client()
		{
			return $this->mp_client;
		}
		
		public function getAdresse_client()
		{
			return $this->adresse_client;
		}
		
		public function getVille_client()
		{
			return $this->ville_client;
		}
		
		public function getTel_client()
		{
			return $this->tel_client;
		}		

		/*LISTE DES SETTERS*/
		
		public function setId_client($id_client)
		{
			$this->id_client = $id_client;
		}
		
		public function setNom_client($nom_client)
		{
			$this->nom_client = $nom_client;
		}

		public function setPrenom_client($prenom_client)
		{
			$this->prenom_client = $prenom_client;
		}	
		
		public function setEmail_client($email_client)
		{
			$this->email_client = $email_client;
		}			
		
		public function setMp_client($mp_client)
		{
			$this->mp_client = $mp_client;
		}	
		
		public function setAdresse_client($adresse_client)
		{
			$this->adresse_client = $adresse_client;
		}
		
		
		
		public function setVille_client($ville_client)
		{
			$this->ville_client = $ville_client;
		}
		
		public function setTel_client($tel_client)
		{
			$this->tel_client = $tel_client;
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
		}
 */
		/*METHODE QUI PERMET D'AFFICHER LA LISTE DES MEMBRES*/
		public function affichageMembres(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM client");
			$requete->execute();
			
			return $requete;
		}

		
		public function getIdClient($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `client` WHERE id_client=?");
			$params=array($code);
			$request->execute($params);
			$client=$request->fetch();

			return $client; 
		}
//======================================================================	
	}
	
?>