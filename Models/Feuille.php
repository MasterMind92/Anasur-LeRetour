<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Feuille
 *
 * @author Axel
 */
class Feuille {
    //put your code here
    private $id_fr;
    private $date_fr;
    private $val_fr;
    private $id_agent;
    private $id_cont;
    private $id_sup;    
    private $id_prest;
    
    function __construct(array $data) {
        $this->hydratation($data);
    }
    function getDate_fr() {
        return $this->date_fr;
    }

    function getVal_fr() {
        return $this->val_fr;
    }
    function setId_fr($id_fr) {
        $this->id_fr = $id_fr;
    }
    function getId_sup() {
        return $this->id_sup;
    }

    function getId_prest() {
        return $this->id_prest;
    }

    function setId_sup($id_sup) {
        $this->id_sup = $id_sup;
    }

    function setId_prest($id_prest) {
        $this->id_prest = $id_prest;
    }

            function getId_agent() {
        return $this->id_agent;
    }

    function getId_cont() {
        return $this->id_cont;
    }

    function setDate_fr($date_fr) {
        $this->date_fr = $date_fr;
    }

    function setVal_fr($val_fr) {
        $this->val_fr = $val_fr;
    }

    function setId_agent($id_agent) {
        $this->id_agent = $id_agent;
    }

    function setId_cont($id_cont) {
        $this->id_cont = $id_cont;
    }

    function getId_fr() {
        return $this->id_fr;
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
