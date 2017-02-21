<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_zone
 *
 * @author Axel
 */
class Mgr_zone {
    //put your code here
    function __construct() {
        $this->conx = Connexion::getconnexion();
    }
    
    function recup_zone($idz) {
        $lib = array();
        $req = "SELECT lib_zone, id_com FROM zone WHERE id_zone=$idz";
        $exe = $this->conx-> query($req);
        $res = $exe -> fetch();
        $lib=$res;
        return $lib;
    }
}
