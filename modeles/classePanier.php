<?php
	class commande1 {
	public $id_commande;
	public $nom_commande;
	public $prix;
	public $mois_commande;
	public $annee_commande;
	public $date_commande;
	public $date_livraison;
	public $photo;
	public $paye;
	public $id_client;
	
	
	public function __construct($id_commande,$nom_commande,$prix,$mois_commande,$annee_commande,$date_commande,$date_livraison,$photo,$paye,$id_client)
					{
						$this->id_commande 		= $id_commande;
						$this->nom_commande 		= $nom_commande;
						$this->prix 		= $prix;
						$this->mois_commande 		= $mois_commande;
						$this->annee_commande 		= $annee_commande;
						$this->date_commande 		= $date_commande;
						$this->date_livraison 		= $date_livraison;
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

		public function getId_client()
		{
			return $this->id_client;
		}	
		
		

		/*LISTE DES SETTERS*/
		
		public function setId_commande($id_commande)
		{
			$this->id_client = $id_commande;
		}
		
		public function setNom_commande($nom_commande)
		{
			$this->nom_client = $nom_commande;
		}

		public function setId_client($id_client)
		{
			$this->id_client = $id_client;
		}	
		
		
	
	/* public function connect(){
try {
  $cnx = new PDO('mysql:host=localhost;dbname=maboutique','root','',
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(Exception $e) {
  die($e->getMessage());
}
return $cnx;
	}	 */
	

public function ajoutPro(){
			
			$cnx = connexionBdd();
			//requête pour éviter la redendance des noms
			/* $request = $cnx->prepare("SELECT * FROM commande WHERE nom_commande=:nom_commande");
			$result = $request->execute(array(
												':nom_commande'=>$this->nom_commande
											));
											
			$result=$request->fetchobject(); */

			//vérification pour s'avoir si l'objet existe
			

				$request = $cnx->prepare("INSERT INTO commande (id_commande,nom_commande,prix,mois_commande,annee_commande,date_commande,date_livraison,photo,paye,id_client) VALUES (:id_commande,:nom_commande,:prix,:mois_commande,:annee_commande,CURRENT_DATE(),'',:photo,:paye,:id_client)");

				$reponse = $request->execute(array(
													'id_commande'	 => $this->id_commande,			
													'nom_commande' => $this->nom_commande,
													'prix' => $this->prix,
													'mois_commande' => $this->mois_commande,
													'annee_commande' => $this->annee_commande,
													
													'photo' => $this->photo,
													'paye' => $this->paye,
													'id_client'  => $this->id_client
												));	
			return $reponse;
					
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($cnx);
				
		}	
	
	
	
	
	
	
	
	
	
	

	/* public function prepareInsert(){
		$cnx= $this->connect();
if(isset($_POST['nom'], $_POST['prenom'])){		
$nom_ve = $_POST['nom'];
$prenom_ve = $_POST['prenom'];
	

		$requete =$cnx->prepare( "INSERT INTO veterinaire(nom, prenom) VALUES(:nom, :prenom) " );

		$result=$requete->execute(array(':nom'=>$nom_ve, ':prenom'=>$prenom_ve));

	} */  }
?>