<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
      <?php
      include 'classes/employe.php';
      include 'classes/projet.php';
      include 'classes/EmployeInformaticien.php';
      include 'classes/EmployeNonInformaticien.php';
      include 'includes/Traitement.php';
      
        try {
            Traitement::instanciationProjetV1();
            Traitement::instanciationEmployeInformaticienV1();
            Traitement::instanciationEmployeNonInformaticienV1();
       } catch (Exception $ex) {
            echo $ex->getMessage();            
        }
        
      ?>
  </body>
</html>
