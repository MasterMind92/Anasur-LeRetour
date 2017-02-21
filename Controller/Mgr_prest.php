<?php
require_once '../Models/Prestataire.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_prest
 *
 * @author Axel
 */
class Mgr_prest {
    //put your code here
    function __construct() {
        $this->conx = Connexion::getconnexion();
    }
    
    function add_prest(Prestataire $prest) {
        $req = "INSERT INTO prestataire (rs_prest) VALUE(?)";
        $im =  $this->conx->prepare($req);
        $im->execute(
                array(
                    $prest->getRs_prest()
                )
                );
                if ($im) {
                    $rep = "Prestataire ajouté avec succès";
                }  else {
                    $rep = "Une erreur est survenue";
                }
                return $rep; 
    }
    
    function recup_prest($log,$mdp) {
        $log = $this->conx->quote($log);
        $mdp = $this->conx->quote($mdp);
        $req = "SELECT * FROM prestataire WHERE login_prest = $log AND mdp_prest = $mdp ";
        $exe = $this->conx->query($req);
        $res = $exe->fetch();
        $prest = new Prestataire($res);
        return $prest;
    }
    
    function recup_prestC($com) {
        $liste=array();
        $req = "SELECT * FROM prestataire WHERE id_com =".(int) $com;
        $exe =  $this->conx->query($req);
        while ($res = $exe->fetch(PDO::FETCH_ASSOC)) {
            $liste[] = new Prestataire($res);
        }
        return $liste;
    }
    
    function grab_prest($id) {
        $req = "SELECT rs_prest FROM prestataire WHERE id_prest=".$id;
        $exe = $this->conx->query($req);
        if ($exe->fetch()) {
        $res = $exe->fetch();
        $rs = $res["rs_prest"];    
        }  else {
            $rs="Neant";
        }
        return $rs;
    }
    
    function liste_prest() {
        $liste=array();
        $req="SELECT * FROM prestataire";
        $exe =  $this->conx->query($req);
        while ($res = $exe->fetch()) {
            $liste[] = new Prestataire($res);
        }
        return $liste;
    }
    
    function note_prest($id,$del,$qlt,$ev) {
        $req="UPDATE prestataire SET del_prest=?, qlt_prest=?, ev_prest=? WHERE id_prest=?";
        $im= $this->conx->prepare($req);
        $im->execute(
                    $this->conx->quote($del),
                    $this->conx->quote($qlt),
                    $this->conx->quote($ev),
                    $id
                );
                if ($im) {
                    $res="note prise en compte";
                }  else {
                    $res="Erreur";
                }
        return $rep;        
    }
}
