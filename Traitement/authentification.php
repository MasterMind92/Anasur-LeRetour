<?php
require '../connexion/Connexion.php';
require '../Controller/Mgr_agent.php';

session_start();

$conx = new Connexion();

$agent = array();
$manA= new Mgr_agent();

if (isset($_POST['pseudo']) AND isset($_POST['mdp'])) {


	$agent= $manA->recup_ag($_POST['pseudo'],$_POST['mdp']);

	if (empty($agent)) {
		echo "Lui la on ne le connais pas ";
	}else {

		$_SESSION['agent']=$agent;
		/*var_dump($_SESSION['agent']->getId_tagent());*/
	}

}else {

	echo "Aucune donnee receptionnee";
}


?>