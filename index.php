<?php
include('funcion.php');

echo("FUE REALIZADO POR GIOVANNY SANCHEZ ");

echo "<br>";
echo("PUNTO 1");

echo "<br>";
$n1=300;
$n2=400;
$suma=$n1+$n2;
$resta=$n1-$n2;
$multiplicacion=$n1*$n2;
$divicion=$n1/$n2;

echo("<br> la suma de:".$n1."+".$n2."=".$suma);
echo("<br> la resta de:".$n1."-".$n2."=".$resta);
echo("<br> la multiplicacion de:".$n1."*".$n2."=".$multiplicacion);
echo("<br> la divicion de:".$n1."/".$n2."=".$divicion);

echo "<br>","<br>","<br>";
echo("PUNTO 2");
$resul=85/(1.78*1.78);
$peso=85;
$altura=1.78;
$IMC="";
echo "<br>";
echo("Señor usuario su estatura es de:".$altura. " M "."y su peso es de: $peso"." KG ");

echo "<br>";
echo ("Su indice de masa corporal es de : ".$resul." por lo tanto usted tiene $IMC");
$IMC=$peso/($altura*$altura);

    if ($IMC <= 18.4) {
        echo "Insuficiencia de peso";
    } elseif ($IMC>=18.5 && $IMC<=24.9) {
        echo "Peso normal ";
    } elseif ($IMC >=25  && $IMC<=29.9) {
        echo "Sobrepeso ";
    }elseif  ($IMC>=30 && $IMC<=34.9){
        echo "Obesidad 1";
    }elseif   ($IMC >=35 && $IMC<=39.9) {
        echo  "Obesidad 2  ";
    }elseif    ($IMC>=40) {
        echo ("Obesidad 3  ");
    }
   
    echo "<br>","<br>","<br>";
    echo("PUNTO 3");
    echo "<br>";
    $Numzapatos=5;
    $Precio=150000;
    $ValorTotal=0;
    $Valorneto=0;
    echo("Cantidad vendida: " .$Numzapatos."<br>");
    if ($Numzapatos ==3){
        $ValorTotal=$Numzapatos*$Precio;
        $Valorneto=$ValorTotal*(10/100);
        $neto=$ValorTotal-$Valorneto;
        echo("Cantidad vendida:" .$cant);
        echo("El valor  es : $ ".$ValorTotal."<br>". " Descuento: 10%  "."<br>"."Valor del Descuento: ".$Valorneto."<br>"."El valor total a pagar es de :".$neto);
    }elseif($Numzapatos >3 && $Numzapatos <=5 ){
        $ValorTotal=$Numzapatos*$Precio;
        $Valorneto=$ValorTotal*(20/100);
        $neto=$ValorTotal-$Valorneto;
        echo("El valor  es : $ ".$ValorTotal."<br>"."  Descuento: 20%  "."<br>"."Valor del Descuento: ".$Valorneto."<br>"."El valor total a pagar es de :".$neto);
    }elseif ($Numzapatos >5){
        $ValorTotal=$Numzapatos*$Precio;
        $Valorneto=$ValorTotal*(40/100);
        $neto=$ValorTotal-$Valorneto;
        echo("El valor  es : $ ".$ValorTotal."<br>". " Descuento: 40%  "."<br>"."Valor del Descuento: ".$Valorneto."<br>"."El valor total a pagar es de :".$neto);
    }


    echo "<br>","<br>","<br>";
    echo("PUNTO 4");
    echo "<br>"; 
    echo("Sueldo Mensual <br>");
    $Horastrab=36;
    $Pagosemanal1=20000;
   echo("Para un total de: .$Horastrab"."Horas."."se obtiene un valor hora de:."."$".$Pagosemanal1);
   echo "<br>";
    if($Horastrab<=40){
        $Pagosemanal=$Horastrab*20000;
        echo("El salario devengado en la semana es de : $Pagosemanal");
    }else{
        $Pagosemanal=$Horastrab*25000;
        echo("El salario devengado en la semana es de : $Pagosemanal");
    }


    echo "<br>","<br>","<br>";
    echo("PUNTO 5");
    echo "<br>"; 
    echo("Almacenar Datos <br>");

$sal1=1200000;
$sal2=1300000;
$sal3=1250000;
$sal4=1100000;
$sal5=1000000;
$sucursalA=0;
$sucursalB=20000000;
$sucursalC=15000000;

$sumatoriaSalarios=($sal1+$sal2+$sal3+$sal4+$sal5);
echo("Los usuarios registrados en la surcusal A son :");
echo "<br>"; 
if($sumatoriaSalarios>$sucursalB && $sumatoriaSalarios>$sucursalC ){
    echo("La surcusal A tiene mayor ingreso $sucursalA");
     $sucursalA=$sumatoriaSalarios;
}elseif($sucursalB>$sucursalC && $sucursalB>$sumatoriaSalarios){
    echo("La surcusal B tiene mayor ingreso $sucursalB");
}else
{
    echo("La surcusal C tiene mayor ingreso $sucursalC");
}



echo "<br>","<br>","<br>";
echo("PUNTO 6");
echo "<br>"; 

$pares=array('1'=>"2",'2'=>4,'3'=>6,'4'=>8,'5'=>10,'6'=>12,'7'=>14,'8'=>16,'9'=>18,'10'=>20);
foreach($pares as $clave=>$valor){
    echo("El $clave número par es: $valor"."<br>");
    
}



echo "<br>","<br>","<br>";
echo("PUNTO 7");
echo "<br>"; 

$salpicon=array('dulce1'=>"Banano",'dulce2'=>"Manzana",'dulce3'=>"Murazno",'acido1'=>"Pina",'acido2'=>"Naranja",'acido3'=>"Lulo");
echo("El salpicon esta compuesto por: ");
echo "<br>"; 
    print_r($salpicon);


echo "<br>","<br>","<br>";
echo("PUNTO 8");
echo "<br>"; 

calcularEdad(1991,2020);
calcularEdad(1995,2020);
calcularEdad(1987,2020);


echo "<br>","<br>","<br>";
echo("PUNTO 9");
echo "<br>"; 


biotipo($biotipo1=1.65);
biotipo($biotipo1=1.78);
biotipo($biotipo1=1.95);

echo "<br>","<br>","<br>";
echo("PUNTO 10");
echo "<br>"; 

$usuarios=array(
    'usuario1'=>array('Jugador1'=>"Radamel Falcao",'año'=>1986,'posicion'=>"Delantero",biotipo($biotipo=>1.77),
    'usuario2'=>array('Jugador2'=>"James Rodríguez",'año'=>2020-1991,'posicion'=>"Medio",'estatura'=>1.81),
    'usuario3'=>array('Jugador3'=>"Juan Cuadrado",'año'=>2020-1988,'posicion'=>"Delantero",'estatura'=>1.78),
    'usuario4'=>array('Jugador4'=>"Yerry Mina",'año'=>2020-1994,'posicion'=>"Defensor",'estatura'=>1.95),
    'usuario5'=>array('Jugador5'=>"David Ospina",'año'=>2020-1988,'posicion'=>"Portero",'estatura'=>1.83),
    'usuario6'=>array('Jugador6'=>"Davinsón Sanchez",'año'=>2020-1996,'posicion'=>"Delantero",'estatura'=>1.87),
    'usuario7'=>array('Jugador7'=>"Duvan Zapata",'año'=>2020-1991,'posicion'=>"Delantero",'estatura'=>1.86),
    'usuario8'=>array('Jugador8'=>"Wilmar Barrios",'año'=>2020-1993,'posicion'=>"Medio",'estatura'=>1.78),
    'usuario9'=>array('Jugador9'=>"Mateus Uribe",'año'=>2020-1991,'posicion'=>"Medio",'estatura'=>1.80));  
echo("<br>");
//print_r($usuarios);


echo("<br>....................................<br>");
foreach($usuarios as $clavesArreglosUnidimensionales=>$arreglosUnidimensionales){
   // echo($clavesArreglosUnidimensionales);

    //print_r($arreglosUnidimensionales);
    echo("<br>");
    foreach($arreglosUnidimensionales  as $valorers){
        
       echo($valorers);
       echo("<br>");


    }
}


?>

