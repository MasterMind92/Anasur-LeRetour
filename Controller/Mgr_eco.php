<?php
require_once '../Models/Ecocitoyen.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_eco
 *
 * @author Axel
 */
class Mgr_eco {
    //put your code here
    function __construct() {
        $this->conx= Connexion::getconnexion();
    }

    function add_eco(Ecocitoyen $eco ) {
        $req="INSERT INTO ecocitoyen (nom_eco, prm_eco, cont_eco,email) VALUE(?,?,?,?)";
        $im=  $this->conx->prepare($req);
        $im->execute(
                array(
                    $eco->getNom_eco_eco(),
                    $eco->getPrm_eco_eco(),
                    $eco->getCont_eco_eco(),
                    $eco->getEmail_eco_eco()
                )
                );
                if ($im) {
                    $rep= 'Enregistrement reussi';
                }  else {
                    $rep= 'Une Erreur est survenue';
                }
                return $rep;
    }
    
    function recup_eco($log,$mdp) {
        $log = $this->conx->quote($log);
        $mdp = $this->conx->quote($mdp);
        $req = "SELECT * FROM ecocitoyen WHERE login_ag = $log AND mdp_eco = $mdp ";
        $exe = $this->conx->query($req);
        $res = $exe->fetch();
        $eco = new Ecocitoyen($res);
        return $eco;
    }
    
    function liste_eco() {
        $liste=array();
        $req="SELECT * FROM ecocitoyen";
        $exe=  $this->conx->query($req);
        while ($res = $exe->fetch()) {
            $liste[] = new Ecocitoyen($res);
        }
        return $liste;
    }
    
}
