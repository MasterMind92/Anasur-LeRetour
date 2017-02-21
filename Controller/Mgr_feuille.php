<?php
require_once '../Models/Feuille.php';
require_once '../Models/Agent.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_feuille
 *
 * @author Axel
 */
class Mgr_feuille {
    //put your code here
    function __construct() {
        $this->conx = Connexion::getconnexion();
    }
    
    function add_feuille(Feuille $feuille) {
        $req="INSERT INTO feuille_r (id_fr,date_fr,val_fr,id_agent,id_cont) VALUES(null,NOW(),null,?,null)";
        $im=  $this->conx->prepare($req);
        $im->execute(
                array(
                    'id_agent' => $feuille->getId_agent
                ));
        if ($im) {
            $rep="feuille de route créée";
        }else{
            $rep="Erreur";
        }
        return $rep;       
    }

   
    function recup_fr($id) {
        $req="SELECT fr.id_fr, fr.date_fr, fr.val_fr, fr.id_agent, fr.id_cont FROM feuille_r fr, agent a WHERE fr.id_agent = a.id_ag AND fr.id_agent =".$id." ORDER BY id_fr DESC LIMIT 1";
        $exe=  $this->conx->query($req);
        $res = $exe->fetch();
        if ($res) {
            $liste= new Feuille($res);
        
        return $liste;
        }else{
            $rep = "Aucune feuille de route éditée";
            return $rep; 
        }
        
    }
    
    function valid_fr($idc,$idfr,$tag) {
        $req="UPDATE feuille_r SET val_fr = 1, id_cont=? WHERE id_fr=? ";
       // var_dump($req);exit();
        $im= $this->conx->prepare($req);
//        $im->bindParam(':idcom',$idc);
//        $im->bindParam(':idfr',$idfr);
        $im->execute(
                   array(
                       $idc,
                       $idfr
                   )
                );
        if($im){
            $rep="feuille de route validée";
        }  else {
            $rep="feuille de route non validée";
        }
        return $rep;
    }
    
    function list_valid($id) {
        $list=array();
        $req="SELECT * FROM feuille_r WHERE id_agent=$id AND val_fr=1 ORDER BY id_fr DESC LIMIT 1";
        $exe=  $this->conx->query($req);
        while ($res = $exe->fetch()) {
            $list= new Feuille($res);
        }
        return $list;
    }

    //nouvelle methode de creation des feuilles de route

    function ajout_feuille() {
        $req="INSERT INTO feuille_r (date_fr,val_fr,id_agent) VALUES(NOW(),null,null)";
        $im=  $this->conx->query($req);
        $req="SELECT id_fr FROM feuille_r ORDER BY id_fr DESC LIMIT 1";
        $im= $this->conx->query($req);
        $id= $im->fetch(PDO::FETCH_NUM);
        return $id;       
    }



}
