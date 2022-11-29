<?php

include('connexionBdd/connexionBdd.php');
$db = connexionBdd();

$request = $_REQUEST;

$col = array(
    0 =>'id_commande',
    1 => 'nom_commande',
    2 => 'photo',
    3 =>'prix',
    4 =>'nom_client',
    5 =>'prenom_client',
    6 =>'adresse_client',
    7 =>'mois_commande',
    8 =>'annee_commande',
    9 =>'date_commande',
    10 =>'date_livraison',
    11 =>'paye'

); // créer les colonnes comme dans la base de données

$sql ="SELECT * FROM commande";
$req = $db->prepare($sql);
$req->execute();
$totalData=$req->rowcount();

$totalFilter = $totalData;

$sql ="SELECT commande.id_commande, commande.nom_commande, commande.photo, commande.prix, client.nom_client, client.prenom_client, client.adresse_client, commande.mois_commande, commande.annee_commande, commande.date_commande, commande.date_livraison, commande.paye FROM `commande` INNER JOIN client ON commande.`id_client` = client.`id_client` HAVING 1=1 ";
if(!empty($request['search']['value'])){
    $sql.=" AND ( id_commande LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  nom_commande LIKE '".$request['search']['value']."%' ";
    $sql.=" OR  prix LIKE '".$request['search']['value']."%'  ";
    $sql.=" OR  nom_client LIKE '".$request['search']['value']."%'  ";
    $sql.=" OR  prenom_client LIKE '".$request['search']['value']."%'  ";
    $sql.=" OR  adresse_client LIKE '".$request['search']['value']."%'  ";
    $sql.=" OR  mois_commande LIKE '".$request['search']['value']."%'  ";
    $sql.=" OR  annee_commande LIKE '".$request['search']['value']."%'  ";
    $sql.=" OR  date_commande LIKE '".$request['search']['value']."%'  ";
    $sql.=" OR  date_livraison LIKE '".$request['search']['value']."%'  ";
    $sql.=" OR  paye LIKE '".$request['search']['value']."%' )";


}

$req = $db->prepare($sql);
$req->execute();
$totalData=$req->rowcount();

// ordre trie

$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".$request['start']."  ,".$request['length']."  ";
$req = $db->prepare($sql);
$req->execute();

$data = array();

while($row=$req->fetch()){

    $subdata = array();
    $subdata[]=$row[0];
    $subdata[]=$row[1];
    $subdata[]='<img src="images/'.$row[2].'" alt="" style="width:75px;height:80px;" >';
    $subdata[]=$row[3];
    $subdata[]=$row[4].' '.$row[5];
    $subdata[]=$row[6];
    $subdata[]=$row[7];
    $subdata[]=$row[8];
    $subdata[]=$row[9];
    $subdata[]=$row[10];
    if($row[11]=="Oui"){
    $subdata[]='<span style="color:green">'.$row[11].'</span>';
}else{
    $subdata[]='<span style="color:red">'.$row[11].'</span>';
}

        $subdata[]='<button class="btn btn-primary btn-sm edit" id="'.$row[0].'" title="modifier"><i class="ik ik-edit"></i></button>';
 
    $data[]=$subdata;
}

$json_data = array(
    "draw" => intval($request['draw']),
    "recordsTotal" => intval($totalData),
    "recordsFiltered" => intval($totalFilter),
    "data" => $data

);

echo json_encode($json_data);



?>
