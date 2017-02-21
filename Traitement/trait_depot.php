<?php  
require '../Models/Depot.php';
require '../Models/Feuille.php';
require '../Models/Agent.php';
require '../connexion/Connexion.php';
require '../Controller/Mgr_depot.php';
require '../Controller/Mgr_agent.php';
require '../Controller/Mgr_feuille.php';
require '../Controller/Finder.php';	



$idcom = new Connexion();

$F=new Finder($idcom);

/*$data= array('id_agent'=> mt_rand(1,14) ,'date_fr'=> ''.date("Y-m-d H:i:s").'');
*/

/*$feuille= new Feuille($data);*/
$manF= new Mgr_feuille($idcom);
$manD= new Mgr_depot($idcom);

/*$tabfeuille=$manF->add_feuille($feuille);
$nbf= $manF->nb_fr();*/




/*
$depot= new Depot($array);
$man = new Mgr_depot($idcom);
$rep = $manD->Add_depot($depot);
*/


/*
var_dump($rep);
var_dump($depot);
var_dump($nbf);
var_dump($feuille);
var_dump($tabfeuille);*/

if (isset($_POST)) {
	$array= array('lib_sp'=>$_POST['lib_sp'],'etat'=> "1",'id_zone'=> $_POST['id_zone'], 'id_agent'=> '2','id_csp'=>'2');
	$depot= new Depot($array);
	$man = new Mgr_depot($idcom);
	$rep = $manD->Add_depot($depot);

	echo "nouveau depot enregistre avec succes ";
	
}



//if (isset($_POST)) {
//	
//	$_POST['id_zone']=(int)$_POST['id_zone'];
//	$_POST['etat_sp']=(int) $_POST['etat_sp'];
//	
//           
//	$objD= new Depot($_POST);
//        
//        $manA= new Mgr_agent($idcom);
//        
//        $agent= $manA->recup_ag('Madi92','MadiChristian99892');
//
//	/*var_dump($obj);exit();*/
//
//	$man= new Mgr_depot($idcom);
//
//	$rep=$man->Add_depot($obj);
//
//	echo $rep;
//
//	/*var_dump($today);*/
//}



/*$depot = array('id_sp'=> 7,'lib_sp'=>"Depot Malsain",'etat_sp'=>1 ,'visit'=> 1,'val_sp'=>7 ,'date_sp'=> "2016-02-10",'id_zone'=>56);

$obj= new Depot($depot);

$man= new Mgr_depot($idcom->getconnexion());

$rep=$man->Add_depot($obj);

var_dump($obj);
var_dump($rep);
var_dump($man);*/

        
/*if (isset($_POST)) {

	var_dump($_POST);
    if ($_POST['instruction']="nouveau") {
        
    }
}*/
