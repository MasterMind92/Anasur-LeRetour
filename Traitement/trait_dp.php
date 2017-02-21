<?php
require_once '../Controller/Mgr_depot.php';
require_once '../Connexion/Connexion.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of trait_dp
 *
 * @author Axel
 */
$conx= new Connexion();
$manager= new Mgr_depot();
//var_dump($_POST);exit();
if ((isset($_POST["id"])) AND (isset($_POST["validation"])) ) {
    if($_POST["validation"]=="yes"){
        $id=$_POST["id"];
        $res=$manager->val_depot($id, $tag);
    }elseif ($_POST["validation"]=="no") {
        
    }
    echo $res;
}

