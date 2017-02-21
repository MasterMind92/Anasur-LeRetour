<?php  
	
	require '../connexion/Connexion.php';
	require '../Controller/Mgr_depot.php';
	require '../Controller/Mgr_agent.php';
	require '../Controller/Mgr_feuille.php';
	require '../Controller/Mgr_prest.php';
	require '../Controller/Mgr_commune.php';
	require '../Controller/Mgr_zone.php';
	
	session_start();


	/*if (!is_object($_SESSION['agent'])) {
		header("Location:connexion.php");
	}*/

	

	switch ($_SESSION['agent']->getId_tagent()) {
		
		case '1':
			require 'Dg_view.php';
			break;

		case '2':
			require 'DT.php';
			break;

		case '3':
			require 'sup_view.php';
			break;

		case '4':
			require 'cont_view.php';
			break;

		case '5':
			require 'AssistCont.php';
			break;
		
	}


	

?>