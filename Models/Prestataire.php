<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Prestataire
 *
 * @author Axel
 */
class Prestataire {
    //put your code here
    private  $id_prest;
    private  $rs_prest;
    private  $del_prest;
    private  $qlt_prest;
    private  $ev_prest;
    private  $login_prest;
    private  $mdp_prest;
    private  $id_ag;
    private $id_com;
    function __construct(array $data) {
        $this->hydratation($data);
    }
    
    function getId_prest() {
        return $this->id_prest;
    }
    
    function getRs_prest() {
        return $this->rs_prest;
    }

    function getDel_prest() {
        return $this->del_prest;
    }

    function getQlt_prest() {
        return $this->qlt_prest;
    }

    function getEv_prest() {
        return $this->ev_prest;
    }

    function getLogin_prest() {
        return $this->login_prest;
    }

    function getMdp_prest() {
        return $this->mdp_prest;
    }

    function getId_ag() {
        return $this->id_ag;
    }

    function setRs_prest($rs_prest) {
        $this->rs_prest = $rs_prest;
    }

    function setDel_prest($del_prest) {
        $this->del_prest = $del_prest;
    }

    function setQlt_prest($qlt_prest) {
        $this->qlt_prest = $qlt_prest;
    }

    function setEv_prest($ev_prest) {
        $this->ev_prest = $ev_prest;
    }

    function setLogin_prest($login_prest) {
        $this->login_prest = $login_prest;
    }

    function setMdp_prest($mdp_prest) {
        $this->mdp_prest = $mdp_prest;
    }

    function setId_ag($id_ag) {
        $this->id_ag = $id_ag;
    }
    function getId_com() {
        return $this->id_com;
    }

    function setId_com($id_com) {
        $this->id_com = $id_com;
    }

        
    function hydratation (array $data) {
        foreach ($data as $key => $value) {
          $method='set'.ucfirst($key);
          if (method_exists($this, $method)) {
              $this->$method($value);
          }
        }
    }
}
