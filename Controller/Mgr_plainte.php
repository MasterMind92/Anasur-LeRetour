<?php
require_once '../Models/Plainte.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_plainte
 *
 * @author Axel
 */
class Mgr_plainte {
    //put your code here
    function __construct() {
        $this->conx = Connexion::getconnexion();
    }
    
    function add_pl(Plainte $pl) {
       
        $req="INSERT INTO plainte (id_pl,lib_pl,date_pl,id_zone,id_vil,id_prest) VALUES (?,?,NOW(),?,?,?)";
        $im=  $this->conx->prepare($req);
        $rep=$im->execute(
                array(
                    $pl->getId_pl(),
                    $pl->getLib_pl(),
                    $pl->getId_zone(),
                    $pl->getId_vil(),
                    $pl->getId_prest(), 
                ));

        if (!$rep) {
            $ok=" impossible d'enregistre";
        }else{
            $ok="plainte enregistree avec succes ";
        }
        return $ok;
    }
    
    function list_plainte() {
        $list= array();
        $req = "SELECT * FROM plainte";
        $exe = $this->conx->query($req);
        if($exe->fetch()){
            while ($res = $exe->fetch()) {
            $list = new Plainte($res);
            }
            return $list;
        }  
        else {
            $rep= "aucune plainte disponible";
            return $rep;
        }
        

    }
    function npl_rec($i) {
        $req = "SELECT count(id_pl) FROM plainte WHERE MONTH(date_pl) =".$i;
        $exe=  $this->conx->query($req);
        $res = $exe->fetch(PDO::FETCH_NUM);
        $nb=$res[0];
        return $nb;
    }
    
    function npl_tr($i) {   
        $req = "SELECT count(id_pl) FROM plainte WHERE etat_pl = 1 AND MONTH(date_pl) =".$i;
        $exe=  $this->conx->query($req);
        $res = $exe->fetch(PDO::FETCH_NUM);
        $nb=$res[0];
        return $nb;
    }
}
