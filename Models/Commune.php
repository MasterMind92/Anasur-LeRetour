<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commune
 *
 * @author Axel
 */
class Commune {
    //put your code here
    private $id_com;
    private $lib_com;
    function __construct(array $data) {
        $this->hydratation($data);
    }
    function getId_com() {
        return $this->id_com;
    }

    function getLib_com() {
        return $this->lib_com;
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
