<?php
require_once '../Models/Depot.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mgr_depot
 *
 * @author Axel
 */
class Mgr_depot {
    //put your code here
    function __construct() {
        $this->conx = Connexion::getconnexion();
    }
    
    function add_depot(Depot $dep) {
        $req="INSERT INTO spot (lib_sp,etat,id_zone,date_sp,id_fr,id_vil,id_agent,id_csp) VALUES (?,?,?,NOW(),?,?,?,?)";
        $im=  $this->conx->prepare($req);
        $im->execute(
                array(
                    $dep->getLib_sp(),
                    $dep->getEtat(),
                    $dep->getId_zone(),
                    $dep->getId_vil(),
                    $dep->getId_fr(),
                    $dep->getId_agent(),
                    $dep->getId_csp()    
                ));
    }
    
    function list_dep(Feuille $fr){
        $liste =array();
        $req ="SELECT * FROM spot  Where id_fr=".(int)$fr->getId_fr()." AND id_csp=1";
        $exe =  $this->conx->query($req);
        while ($res =$exe->fetch()) {
            $liste[] = new Depot( $res);
        }
        return $liste;
    }
    
    function list_nvdep() {
        $liste=array();
        $req ="SELECT * FROM spot WHERE id_csp=2 ";
        $exe =  $this->conx->query($req);
        while ($res =$exe->fetch(PDO::FETCH_ASSOC)) {
            $liste[] = new Depot($res);
        }
        return $liste;
    }
    
    function val_depot($id,$tag) {
        switch ($tag) {
            case 4:
                $req="UPDATE spot SET val_sp =1 WHERE id_sp=?";
                break;
            case 3:
                $req="UPDATE spot SET val_sp = 2 WHERE id_sp=?";
                break;
            case 2:
                $req="UPDATE spot SET val_sp = 3 WHERE id_sp=?";
                break;   
            default:
                echo 'Vous n\'êtes pas un agent';
                break;
        }
        
        $im=  $this->conx->prepare($req);
        $im->execute(
                array($id,$val)
                );
                if ($im) {
                    $rep="reponse enregistrée";
                }else{
                    $rep="Erreur";
                }
        return $rep;
    }
    
    function ndep_cont($i) {
        $req = "SELECT count(id_sp) FROM spot WHERE visit=1 AND MONTH(date_sp) =".$i;
        $exe=  $this->conx->query($req);
        $res = $exe->fetch(PDO::FETCH_NUM);
        $nb=$res[0];
        return $nb;
    }
    
    function ndp_ncont($i) {
        $req = "SELECT count(id_sp) FROM spot WHERE visit = 0 OR visit IS NULL AND MONTH(date_sp) =".$i;
        $exe=  $this->conx->query($req);
        $res = $exe->fetch(PDO::FETCH_NUM);
        $nb=$res[0];
        return $nb;
    }
    
    function ndep($i) {
        $req = "SELECT count(id_sp) FROM spot WHERE id_csp = 1 AND MONTH(date_sp) =".$i;
        $exe=  $this->conx->query($req);
        $res = $exe->fetch(PDO::FETCH_NUM);
        $nb=$res[0];
        return $nb;
    }

    // methode de validation de spot

    function validSp($id){
        $req = "UPDATE spot set val_sp=2 where id_sp=".$id;
        $exe=  $this->conx->exec($req);
        return $exe;
    }


    //methode de recherche des depots par communes

    
    function aFr($idfr,$id_sp){

        $req = "UPDATE spot set id_fr=$idfr where id_sp=$id_sp";
        $exe = $this->conx->exec($req);

        return true;
    }
}
