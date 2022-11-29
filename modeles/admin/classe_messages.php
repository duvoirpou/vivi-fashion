<?php 
	class message
	{
		public $id_msg;
		public $identite;
		public $mail;
		public $tel;
		public $msg;
		public $statut;
		

		public function __construct($id_msg,$identite,$mail,$tel,$msg,$statut)
					{
						$this->id_msg 		= $id_msg;
						$this->identite 		= $identite ;
						$this->mail 		= $mail ;
						$this->tel 		= $tel ;
						$this->msg 	= $msg;
						$this->statut 	= $statut;
						
						
					}

		/*LISTE DES GETTERS*/
		
		public function getId_msg()
		{
			return $this->id_msg;
		}
		
		public function getIdentite()
		{
			return $this->identite;
		}	

		public function getmail()
		{
			return $this->mail;
		}	
		

		public function getTel()
		{
			return $this->tel;
		}	

		public function getMsg()
		{
			return $this->msg;
		}

		public function getStatut()
		{
			return $this->statut;
		}
	

		/*LISTE DES SETTERS*/
		
		public function setId_msg($id_msg)
		{
			$this->id_msg = $id_msg;
		}
		
		public function setIdentite($identite)
		{
			$this->identite = $identite;
		}

		public function setMail($mail)
		{
			$this->mail = $mail;
		}	
		
		public function setMsg($msg)
		{
			$this->msg = $msg;
		}	

		public function setStatut($statut)
		{
			$this->statut = $statut;
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
		public function affichageMessages(){
			$bdd = connexionBdd();
			$requete = $bdd->prepare("SELECT * FROM message");
			$requete->execute();
			
			return $requete;
		}


		public function ModifierMsg(){
			$bdd = connexionBdd();
					$request=$bdd->prepare("UPDATE `message` SET `identite`=?,`mail`=?,`tel`=?,`statut`=? WHERE id_msg =?");
					
							$identite		= $this->identite;
							$mail		= $this->mail;
							$tel		= $this->tel;
							$msg		= $this->msg;
							$statut		= $this->statut;
							
							$id_msg		= $this->id_msg;
					
					$params=array($identite,$mail,$tel,$statut,$id_msg);
					$request->execute($params);
		}
		

		public function supprimerMsg(){
			//connexion à la bdd
			
			$bdd = connexionBdd();
			$code=$_GET['code'];
			$request=$bdd->prepare("DELETE FROM message WHERE id_msg=? LIMIT 1");
			
			$params=array($code);
			
			$request->execute($params);
			
			return $request;
	}

		public function getIdMessage($code){
			$bdd =  connexionBdd();
			$request=$bdd->prepare("SELECT * FROM `message` WHERE id_msg=?");
			$params=array($code);
			$request->execute($params);
			$message=$request->fetch();

			return $message; 
		}
//======================================================================	
	}
	
?>