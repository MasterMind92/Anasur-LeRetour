<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Depot
 *
 * @author Axel
 */
class Depot {
    //put your code here
    private $id_sp;
    private $lib_sp;
    private $etat;
    private $visit;
    private $val_sp;
    private $date_sp;
    private $id_zone;
    private $id_vil;
    private $id_fr;
    private $id_agent;
    private $id_csp;
    
    function __construct(array $data) {
        $this->hydratation($data);
    }
    function getEtat() {
        return $this->etat;
    }

    function getVisit() {
        return $this->visit;
    }
    function setId_sp($id_sp) {
        $this->id_sp = $id_sp;
    }

        function getVal_sp() {
        return $this->val_sp;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setVisit($visit) {
        $this->visit = $visit;
    }

    function setVal_sp($val_sp) {
        $this->val_sp = $val_sp;
    }
    
    function getId_sp() {
        return $this->id_sp;
    }
    function getId_zone() {
        return $this->id_zone;
    }

    function getId_vil() {
        return $this->id_vil;
    }

    function getId_fr() {
        return $this->id_fr;
    }

    function getId_agent() {
        return $this->id_agent;
    }

    function getId_csp() {
        return $this->id_csp;
    }

    function setId_zone($id_zone) {
        $this->id_zone = $id_zone;
    }

    function setId_vil($id_vil) {
        $this->id_vil = $id_vil;
    }

    function setId_fr($id_fr) {
        $this->id_fr = $id_fr;
    }

    function setId_agent($id_agent) {
        $this->id_agent = $id_agent;
    }

    function setId_csp($id_csp) {
        $this->id_csp = $id_csp;
    }
    function getLib_sp() {
        return $this->lib_sp;
    }

    function setLib_sp($lib_sp) {
        $this->lib_sp = $lib_sp;
    }

        
    function getDate_sp() {
        return $this->date_sp;
    }
    function setDate_sp($date_sp) {
        $this->date_sp = $date_sp;
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
