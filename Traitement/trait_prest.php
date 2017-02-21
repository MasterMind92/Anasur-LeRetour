<?php
require_once '../Connexion/Connexion.php';
require_once '../Controller/Mgr_prest.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conx= new Connexion();

if ((isset($_POST["del"])) AND (isset($_POST["propr"])) AND (isset($_POST["eval"])) AND (isset($_POST["id"])) ) {
    $id= (int)$_POST["id"];
    $manag= new Mgr_prest($conx);
    $res= $manag->note_prest($id, $_POST["del"], $_POST["propr"], $_POST["eval"]);
    echo $res;
}
