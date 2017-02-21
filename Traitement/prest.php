<?php
    
require '../Controller/Mgr_prest.php';
require '../Connexion/Connexion.php';

$conx= new Connexion();

$manP= new Mgr_prest($conx);

/*var_dump($_GET);exit();*/

if (isset($_GET['idcom'])) { 

	$libPrest = array();

	$libPrest= $manP->recup_prestC($_GET['idcom']);

	/*var_dump($libPrest);
	exit();*/

	if (empty($libPrest)) {
		
		echo "Aucune donnee retrouvee en rapport a cette commune";
		
	}else{
 	
	 	for($i=0; $i< count($libPrest); $i++) {
	 	
		 	echo "<option value=".$libPrest[$i]->getId_prest()." >".$libPrest[$i]->getRs_prest()."</option>"; 	
		}
	
		/*var_dump($libPrest[0]);
		exit();*/

		/*var_dump($option);*/
	}
 
	
}else{

	echo "Aucune donnee retrouvee en rapport a cette commune ";
}




