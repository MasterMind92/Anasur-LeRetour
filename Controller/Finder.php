<?php
require_once 'Mgr_commune.php';
require_once 'Mgr_zone.php';
require_once 'Mgr_ville.php';
require_once 'Mgr_district.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Finder
 *
 * @author Axel
 */
class Finder {
    function __construct() {
         $this->conx = Connexion::getconnexion();

    }

    function fcz($id) {
        $mz= new Mgr_zone();
        $zone=array();
        $zone=$mz->recup_zone($id);
        $mc= new Mgr_commune();
        $com=$mc->recup_com($zone["id_com"]);
        $loc= $com['lib_com'].", ".$zone['lib_zone'];
        return $loc;
    }
    
    function fdv($id) {
        $mv= new Mgr_ville();
        $ville=array();
        $ville=$mv->recup_ville($id);
        $md= new Mgr_district();
        $dist=$md->recup_dist($ville["id_dist"]);
        $loc= $dist['lib_dist'].", ".$ville['lib_vil'];
        return $loc;
    }
    
}
