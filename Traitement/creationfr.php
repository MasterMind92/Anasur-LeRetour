<?php  
	require '../Controller/Mgr_feuille.php';
	require '../Controller/Mgr_depot.php';
	require '../Connexion/Connexion.php';
	require '../Controller/Finder.php';


	$conx= new Connexion();
	$manF= new Mgr_feuille();
	$manD= new Mgr_depot();

	$Depot = array();
	$Donnees = array();
	$rep;


	$val=explode("&", $_POST['donnee']);

	$spot = array('idspot'=>0,'etat'=>0);

	$idprest=sscanf($val[0],"prest= %d");



	/*for ($i=1; $i < count($val) ; $i++) { 


		
		list($idspot,$etat)= sscanf($val[1],"%d=%d");

		$Feuille=new Feuille();
	}*/
	$idf;
	
	list($spot['idspot'],$spot['etat']) = sscanf($val[1],"%d = %d");


	$spot['idspot']=(int) $spot['idspot'];


	$idf= $manF->ajout_feuille();
	$idf[0]=(int) $idf[0];

	/*var_dump($idf);
	exit();*/

	$rep= $manD->aFR($idf[0],$spot['idspot']);

	if (!$rep) {
		echo "Impossible de creer la feuille de route";
	}else {
		echo "feuille de route creee avec succes";
	}

?>