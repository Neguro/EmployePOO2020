<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeInformatitien
 *
 * @author User
 */
class EmployeInformaticien extends Employe {
    private float $primeM;
    
    public function __construct(string $pnumero, string $pnom, string $pprenom , DateTime $pdate, float $psalaire , float $pprimeM, Projet $unProjet)
    {
        Employe::__construct($pnumero,$pnom,$pprenom,$pdate,$psalaire);
        $this->primeM = $pprimeM;
    }

    public function setPrimeM(float $primeM): void 
    {
        if ($primeM > ($this->getSalaireM()*0.3)) {
            $this->primeM = $primeM;
        }
        else 
        {
            throw new Exception("La prime ne doit pas excéder 30% du salaire");
        }   
    }
    
    public function getPrimeM(): float 
    {
        return $this->primeM;
    }
   
    public function __toString(): string {
        return "Informaticien : " . $this->numero . " - " . $this->getNom() . " - " . $this->getPrenom(). " - "
                . $this->dateDeNaissance->format('d/m/Y') . " - ". $this->getSalaireM() . $this->getPrimeM();
    }
}
