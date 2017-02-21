<?php
require_once '../Models/Ville.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_ville
 *
 * @author Axel
 */
class Mgr_ville {
    function __construct() {
        $this->conx = Connexion::getconnexion();
    }

    function recup_ville($idv) {
        $lib=array();
        $req = "SELECT lib_vil, id_dist FROM ville WHERE id_vil=$idv";
        $exe = $this->conx-> query($req);
        $res = $exe -> fetch();
        $lib=$res;
        return $lib;
    }
    
}
