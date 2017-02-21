<?php
require_once '../Connexion/Connexion.php';
require_once '../Controller/Mgr_feuille.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conx= new Connexion();
//var_dump($_POST);exit();

if ((isset($_POST['idcont'])) AND (isset($_POST['idfr'])) AND (isset($_POST['tagent']))) {
    
    $idc =(int) $_POST['idcont'];
    $idfr =(int) $_POST['idfr'];
    $tag =(int) $_POST['tagent'];
    //var_dump($idfr);exit();
    $val= new Mgr_feuille();
    $rep = $val->valid_fr($idc,$idfr,$tag);
    echo $rep;
}
