<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Type_agent
 *
 * @author Axel
 */
class Type_agent {
    //put your code here
    private $id_tagent;
    private $lib_tagent;
    
    function __construct(array $data) {
        $this->hydratation($data);
    }

    function getId_tagent() {
        return $this->id_tagent;
    }

    function getLib_tagent() {
        return $this->lib_tagent;
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
