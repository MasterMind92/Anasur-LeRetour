<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Zone
 *
 * @author Axel
 */
class Zone {
    //put your code here
    private $id_zone;
    private $lib_zone;
    private $id_com;
    
    function __construct(array $data) {
        $this->hydratation($data);
    }
    function getId_zone() {
        return $this->id_zone;
    }

    function getLib_zone() {
        return $this->lib_zone;
    }

    function getId_com() {
        return $this->id_com;
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
