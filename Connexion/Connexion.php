<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connexion
 *
 * @author Axel
 */
class Connexion {
    //put your code here
    private static $conx;
    private static $user="root";
    private static $mdp="";
    private static $dns = "mysql:host=localhost;dbname=finalbdd";

    function __construct() {
        
    }
    
    static function getconnexion()
    {
        Connexion::$conx= new PDO(Connexion::$dns,  Connexion:: $user,  Connexion:: $mdp);
        return Connexion::$conx;
    }
    static function getUser() {
        return Connexion::$user;
    }

    static function getMdp() {
        return Connexion::$mdp;
    }

    static function getDns() {
        return Connexion::$dns;
    }


 
    
}
