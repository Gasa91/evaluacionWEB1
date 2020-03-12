<?php

function calcularEdad($nacimiento,$actual){
 $edad=$actual-$nacimiento;

 echo("<br> si nacio en  $nacimiento usted tiene : $edad años");
}

function sumasalario($sal1,$sal2,$sal3,$sal4,$sal5){
    $sucursala=$sal1+$sal2+$sal3+$sal4+$sal5;
    return $sucursala;
    
}
function biotipo($biotipo){
    $biotipo1="Biotipo Bajo";
    $biotipo2="Biotipo Promedio";
    $biotipo3="Biotipo Superior";
if ($biotipo<1.70){
        echo("Para la altura $biotipo su biotipo  es  de:  $biotipo1". "<br>");
    }elseif($biotipo>=1.70 && $biotipo<1.80) {
            echo("Para la altura $biotipo su biotipo  es  de:  $biotipo2". "<br>");
        }elseif($biotipo>=1.80){
            echo("Para la altura $biotipo biotipo  es  de:  $biotipo3". "<br>");
        }
        
    }
 
   ?>     
   
