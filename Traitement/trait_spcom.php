<?php  
require '../Controller/Mgr_commune.php';
require '../Controller/Mgr_depot.php';
require '../Connexion/Connexion.php';

$conx= new Connexion();

$manC= new Mgr_depot();

$depots=$manC->spotCom('7');

var_dump($depots);

?>