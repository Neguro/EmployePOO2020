<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Traitement
 *
 * @author ahmedali.nassim
 */
class Traitement {
    public static function instanciationUnEmploye() : void{
        $e = new employe(1, "Dupont", "Jacques", new DateTime("12/07/1980"), 1000.00);
        echo $e;
    }
    
    public static function instanciationUnEmployeErreur() : void{
        $e = new employe(1, "Dupont", "Jacques", new DateTime("12/07/1980"), 800.00);
        echo $e;
    }
}

