<?php  
require_once '../Controller/Mgr_depot.php';
require_once '../Connexion/Connexion.php';

$conx = new Connexion();

if (isset($_GET)) {
	
	$id=$_GET['id_sp'];
	$manSp= new Mgr_depot($conx);

	$rep= $manSp->validSp($id);

	echo "Depot valide avec succes";


}

?>