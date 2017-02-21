<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Agent
 *
 * @author Axel
 */
class Agent {
    //put your code here
    private  $id_ag;
    private $nom_ag;
    private $prm_ag;
    private $cont_ag;
    private $login_ag;
    private $mdp_ag;
    private $sup_ag;
    private $id_tagent;
    
    function __construct(array $data) {
        $this->hydratation($data);
    }
    
    function getId_ag() {
        return $this->id_ag;
    }

    function getNom_ag() {
        return $this->nom_ag;
    }

    function getPrm_ag() {
        return $this->prm_ag;
    }

    function getCont_ag() {
        return $this->cont_ag;
    }

    function getLogin_ag() {
        return $this->login_ag;
    }

    function getMdp_ag() {
        return $this->mdp_ag;
    }

    function getSup_ag() {
        return $this->sup_ag;
    }

    function setSup_ag($sup_ag) {
        $this->sup_ag = $sup_ag;
    }
    function setId_ag($id_ag) {
        $this->id_ag = $id_ag;
    }

    function setNom_ag($nom_ag) {
        $this->nom_ag = $nom_ag;
    }

    function setPrm_ag($prm_ag) {
        $this->prm_ag = $prm_ag;
    }

    function setCont_ag($cont_ag) {
        $this->cont_ag = $cont_ag;
    } 

    function setLogin_ag($login_ag) {
        $this->login_ag = $login_ag;
    }

    function setMdp_ag($mdp_ag) {
        $this->mdp_ag = $mdp_ag;
    }

    function setId_tagent($id_tagent) {
        $this->id_tagent = $id_tagent;
    }

            function getId_tagent() {
        return $this->id_tagent;
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
