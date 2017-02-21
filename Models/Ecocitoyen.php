<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ecocitoyen
 *
 * @author Axel
 */
class Ecocitoyen {
    //put your code here
    private $id_eco;
    private $nom_eco;
    private $prm_eco;
    private $cont_eco;
    private $email;
    
    function __construct(array $data) {
        $this->hydratation($data);
    }
    function getNom_eco() {
        return $this->nom_eco;
    }

    function getPrm_eco() {
        return $this->prm_eco;
    }

    function setNom_eco($nom_eco) {
        $this->nom_eco = $nom_eco;
    }

    function setPrm_eco($prm_eco) {
        $this->prm_eco = $prm_eco;
    }
    
    function getCont_eco() {
        return $this->cont_eco;
    }

    function setCont_eco($cont_eco) {
        $this->cont_eco = $cont_eco;
    }
    
    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

            function getId_eco() {
        return $this->id_eco;
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
