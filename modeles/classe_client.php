<?php 
	class client
	{
		public $id_client;
		public $nom_client;
		public $prenom_client;
		public $sexe_client;
		public $email_client;
		public $login;
		public $mp_client;
		public $adresse_client;
		public $ville_client;
		public $tel_client;
		public $date_insc;

		public function __construct($id_client,$nom_client,$prenom_client,$sexe_client,$email_client,$login,$mp_client,$adresse_client,$ville_client,$tel_client)
					{
						$this->id_client 		= $id_client;
						$this->nom_client 		= $nom_client ;
						$this->prenom_client 		= $prenom_client ;
						$this->sexe_client 		= $sexe_client ;
						$this->email_client 	= $email_client;
						$this->login 	= $login;
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

		public function getLogin()
		{
			return $this->login;
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

		public function setLogin($login)
		{
			$this->login = $login;
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
				$bdd = new PDO('mysql:host=localhost;dbname=test_mvc;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMessage());
			}
		} */

		/*METHODE QUI PERMET D'AJOUTER UN CLIENT*/
		public function ajoutClient(){
			
			$bdd = connexionBdd();
			//requête pour éviter la redendance des noms
			$request = $bdd->prepare("SELECT * FROM client WHERE email_client = :email_client");
			$result = $request->execute(array(
												':email_client'=>$this->email_client
											));
											
			$result=$request->fetchobject();

			//vérification pour s'avoir si l'objet existe
			if(!is_object($result)){

				$request = $bdd->prepare("INSERT INTO client(id_client,nom_client,prenom_client,sexe_client,email_client,login,mp_client,adresse_client,ville_client,tel_client,date_insc) VALUES (:id_client,:nom_client,:prenom_client,:sexe_client,:email_client,:login,:mp_client,:adresse_client,:ville_client,:tel_client,CURRENT_DATE())");

				$reponse = $request->execute(array(
													'id_client'	 => $this->id_client,			
													'nom_client' => $this->nom_client,
													'prenom_client' => $this->prenom_client,
													'sexe_client' => $this->sexe_client,
													'email_client' => $this->email_client,
													'login' => $this->login,
													'mp_client' => $this->mp_client,
													'adresse_client' => $this->adresse_client,
													'ville_client' => $this->ville_client,
													'tel_client' => $this->tel_client
												));	
					 
				return $bdd->lastInsertId();//dernier id enregistré
					
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				}
		}

		//METHODE QUI PERMET DE SUPPRIMER EMPLOYE
			public function supprimerClient(){
				//connexion à la bdd
				
				$bdd = connexionBdd();
				$code=$_GET['code'];
				$request=$bdd->prepare("DELETE FROM client WHERE id_client=? LIMIT 1");
				
				$params=array($code);
				
				$request->execute($params);
				
				return $request;
		}

		/*METHODE QUI PERMET DE SE CONNECTER AU SITE*/

			public function connexionSiteClient($login,$mp_client){

				$bdd = connexionBdd();

				$request = $bdd->prepare("SELECT * FROM client WHERE  login=? AND mp_client=?");

				$request->execute(array($_POST['login'],$_POST['mp_client']));

				$reponse = $request->fetchObject();

				return $reponse;

				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
				unset($bdd);
		}

		//METHODE QUI PERMET DE MODIFIER LE MEMBRE/ETUDIANT
		public function ModifierMembre(){
			/* if($this->photo_client==""){ */
					$bdd = connexionBdd();
					$request=$bdd->prepare("UPDATE `client` SET `nom_client`=?,`prenom_client`=?,`email_client`=?,`mp_client`=?,`adresse_client`=?,`ville_client`=?,`tel_client`=? WHERE id_client =?");
					
							$nom_client		= $this->nom_client;
							$prenom_client	= $this->prenom_client;
							$sexe_client	= $this->sexe_client;
							$email_client	= $this->email_client;
							$mp_client	= $this->mp_client;
							$adresse_client	= $this->adresse_client;
							$ville_client	= $this->ville_client;
							$tel_client	= $this->tel_client;
							/* $photo_client	= $this->photo_client; */
							$id_client		= $this->id_client;
					
					$params=array($nom_client,$prenom_client,$sexe_client,$email_client,$mp_client,$adresse_client,$ville_client,$tel_client,$id_client);
					$request->execute($params);
			/* }else{
				$bdd = connexionBdd();
				//tmp_name est un dossier temporaire
				$photo_client=$_FILES['photo_client']['tmp_name'];
				
				//chemin pour recevoir les photos du site
				//images nom du dossier et $nomPhoto fichier temporaire
				move_uploaded_file($photo_client, 'images/'.$photo_client);
				
				$request=$bdd->prepare("UPDATE `client` SET `nom_client`=?,`email_client`=?,`photo_client`=? WHERE id_client =?");
							$nom_client		= $this->nom_client;
							$email_client	= $this->email_client;
							$photo_client	= $this->photo_client;
							$id_client		= $this->id_client;
				
				$params=array($nom_client,$email_client,$photo_client,$id_client);
				$request->execute($params);
				
			} */
			return $request;
		}

		//RECUPERER UN MEMBRE PAR L'ID
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