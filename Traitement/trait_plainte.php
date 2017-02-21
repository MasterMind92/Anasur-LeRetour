<?php  
	require '../Controller/Mgr_feuille.php';
	require '../Controller/Mgr_plainte.php';
	require '../Connexion/Connexion.php';
	require '../Controller/Finder.php';


	$conx= new Connexion();
	$manP= new Mgr_feuille();

	$Plainte =new Plainte($_POST) ;


	var_dump($Plainte);

?>