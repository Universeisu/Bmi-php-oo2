<?php
include "./model/HumanBeing.php";
include "./model/HealthAnalyZer.php";
include "./model/Bmidexer.php";


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
     $height = $_POST["height"];
     $weight = $_POST["weight"];

     $hb = new HumanBeing();
     $hb->setHeight(180);
     $hb->setWeight(90);
     $hb->calculateBMI();

     echo "BMI : ".$hb->getBmi();
     echo "<br> ";
     echo "Result :".$hb->analyzeBmi();
 }

?> 
           

