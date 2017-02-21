<?php
require_once '../Models/Commune.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_commune
 *
 * @author Axel
 */
class Mgr_commune {
    
    //put your code here
    function __construct() {
        $this->conx = Connexion::getconnexion();
    }
    
    function recup_com($idco) {
        $req = "SELECT lib_com FROM commune WHERE id_com=".(int)$idco;
        $exe = $this->conx -> query($req);
        $res = $exe -> fetch();
        $lib=$res;
        return $lib;
    }
}
