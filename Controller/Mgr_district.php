<?php
require_once '../Models/District.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_district
 *
 * @author Axel
 */
class Mgr_district {
    function __construct() {
        $this->conx = Connexion::getconnexion();
    }

    function recup_dist($idd) {
        $req = "SELECT lib_dist FROM district WHERE id_dist=".(int)$idd;
        $exe = $this->conx -> query($req);
        $res = $exe -> fetch();
        $lib=$res;
        return $lib;
    }
}
