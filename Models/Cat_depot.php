<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cat_depot
 *
 * @author Axel
 */
class Cat_depot {
    //put your code here
    private $id_csp;
    private  $lib_csp;
    
    function __construct(array $data) {
        $this->hydratation($data);
    }
    function setId_csp($id_csp) {
        $this->id_csp = $id_csp;
    }

    function setLib_csp($lib_csp) {
        $this->lib_csp = $lib_csp;
    }

        function getId_csp() {
        return $this->id_csp;
    }

    function getLib_csp() {
        return $this->lib_csp;
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
