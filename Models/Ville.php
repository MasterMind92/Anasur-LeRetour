<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ville
 *
 * @author Axel
 */
class Ville {
    //put your code here
    private $id_vil;
    private $lib_vil;
    private $id_dist;
    
    function __construct() {
        
    }

    function getId_vil() {
        return $this->id_vil;
    }

    function getLib_vil() {
        return $this->lib_vil;
    }

    function getId_dist() {
        return $this->id_dist;
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
