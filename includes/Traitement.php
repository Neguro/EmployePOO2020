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
        $e = new Employemploye(1, "Dupont", "Jacques", new DateTime("12/07/1980"), 1000.00);
        echo $e;
    }
    
    public static function instanciationUnEmployeErreur() : void{
        $e = new Employe(1, "Dupont", "Jacques", new DateTime("12/07/1980"), 800.00);
        echo $e;
    }
    
    public static function instanciationProjetV1(): void{
        $p = new Projet('PR7','Librairie Gelistout', 102);
        echo $p;
        echo '<br>';
        echo "Nom du projet = " . $p->getNomProjet();
    }
    
    public static function instanciationEmployeInformaticienV1(): void
    {
        $p = new Projet('PR7','Librairie Gelistout', 102);
        echo $p;
        $informaticien = new EmployeInformaticien(1, "Dupont", "Jacques", new DateTime("12/07/1980"), 1000.00,0.0,$p);
        echo "<p>";
        echo $informaticien;
        echo "<p>";
        $informaticien->setPrimeM(600);
        echo "Nouvelle prime = " . $informaticien->getPrimeM();
    }
    
    public static function instanciationEmployeNonInformaticienV1(): void
    {
        $ninformaticien = new EmployeNonInformaticien(5, "Roman", "Denis", new DateTime("07/02/1984"), 13000.00,0.0);
        echo "<p>";
        echo $ninformaticien;
        echo "<p>";
        $ninformaticien->setPrimeA(14000);
        echo "Nouvelle prime = " . $ninformaticien->getPrimeA();
    }
}

