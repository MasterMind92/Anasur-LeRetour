<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Plainte
 *
 * @author Axel
 */
class Plainte {
    //put your code here
    private $id_pl;
    private $lib_pl;
    private $date_pl;
    private $datef_pl;
    private $id_zone;
    private $id_vil;
    private $id_prest;
    private $etat_pl;
    private $descr_pl;
    

    function __construct(array $data) {
        $this->hydratation($data);
    }

    function getLib_pl() {
        return $this->lib_pl;
    }
    
    function getDate_pl() {
        return $this->date_pl;
    }

    function setDate_pl($date_pl) {
        $this->date_pl = $date_pl;
    }

    function getDatef_pl() {
        return $this->datef_pl;
    }

    function setDatef_pl($datef_pl) {
        $this->datef_pl = $datef_pl;
    }

        function getId_zone() {
        return $this->id_zone;
    }

    function getId_vil() {
        return $this->id_vil;
    }

    function getId_prest() {
        return $this->id_prest;
    }

    function setLib_pl($lib_pl) {
        $this->lib_pl = $lib_pl;
    }

    function setId_zone($id_zone) {
        $this->id_zone = $id_zone;
    }

    function setId_vil($id_vil) {
        $this->id_vil = $id_vil;
    }

    function setId_prest($id_prest) {
        $this->id_prest = $id_prest;
    }

    function getId_pl() {
        return $this->id_pl;
    }
    function getEtat_pl() {
        return $this->etat_pl;
    }

    function getDescr_pl() {
        return $this->descr_pl;
    }

    function setEtat_pl($etat_pl) {
        $this->etat_pl = $etat_pl;
    }

    function setDescr_pl($desc_pl) {
        $this->descr_pl = $desc_pl;
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
