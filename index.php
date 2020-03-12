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
   echo("Para un total de: $Horastrab"."Horas."."se obtiene un valor hora de:."."$".$Pagosemanal1);
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

$sal1=3520000;
$sal2=4580000;
$sal3=1250000;
$sal4=3800000;
$sal5=6490000;
$sucursalA=0;
$sucursalB=20000000;
$sucursalC=15000000;

$user=array(
    'user1'=>array('user1'=>"Juan Perez",'tel'=>322456798,'direcion'=>"Cll 100 sur # 35a-25",'salario'=>3520000),
    'user2'=>array('user2'=>"Ana Gaviria",'tel'=>3014569852,'direcion'=>"Cll 90  # 10-80",'salario'=>4580000),
    'user3'=>array('user3'=>"Pedro Mesa",'tel'=>3108965474,'direcion'=>"Cll 85 # 25-10",'salario'=>1250000),
    'user4'=>array('user4'=>"Catalina Castaño",'tel'=>3148555555,'direcion'=>"Cll 100 sur # 35a-27",'salario'=>3800000),
    'user5'=>array('user5'=>"Gabriel Rodrigues",'tel'=>3001234879,'direcion'=>"Cr 37 # 100-20",'salario'=>6490000)
);
$sumatoriaSalarios=($sal1+$sal2+$sal3+$sal4+$sal5);
echo("Los usuarios registrados en la surcusal A son :");
echo "<br>"; 
    foreach($user as $clavedimen=>$sucursalA){
        echo "<br>";
        foreach($sucursalA as $clave=> $valor){
            echo( $valor." - " );  
        }
    }
    $sucursala=sumasalario(3520000,4580000,1250000,3800000,6490000);
    echo "<br>"; 

    if($sucursala>$sucursalB && $$sucursala>$sucursalC ){
        echo "<br>";
        echo("La surcusal A tiene mayor ingreso $sucursalA");
         $sucursalA=$sucursala;
    }elseif($sucursalB>$sucursalC && $sucursalB>$sucursala){
        echo "<br>"; 
        echo("La surcusal B tiene mayor ingreso $sucursalB ");

    }else
    {
        echo "<br>"; 
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

$Jugadores=array(
    'Jugadores1'=>array('Jugador1'=>"Radamel Falcao",'año'=>1986,'posicion'=>"Delantero",'estatura'=>1.77),
    'Jugadores2'=>array('Jugador2'=>"James Rodríguez",'año'=>1991,'posicion'=>"Medio",'estatura'=>1.81),
    'Jugadores3'=>array('Jugador3'=>"Juan Cuadrado",'año'=>1988,'posicion'=>"Delantero",'estatura'=>1.78),
    'Jugadores4'=>array('Jugador4'=>"Yerry Mina",'año'=>1994,'posicion'=>"Defensor",'estatura'=>1.95),
    'Jugadores5'=>array('Jugador5'=>"David Ospina",'año'=>1988,'posicion'=>"Portero",'estatura'=>1.83),
    'Jugadores6'=>array('Jugador6'=>"Davinsón Sanchez",'año'=>1996,'posicion'=>"Delantero",'estatura'=>1.87),
    'Jugadores7'=>array('Jugador7'=>"Duvan Zapata",'año'=>1991,'posicion'=>"Delantero",'estatura'=>1.86),
    'Jugadores8'=>array('Jugador8'=>"Wilmar Barrios",'año'=>1993,'posicion'=>"Medio",'estatura'=>1.78),
    'Jugadores9'=>array('Jugador9'=>"Mateus Uribe",'año'=>1991,'posicion'=>"Medio",'estatura'=>1.80));  
echo("<br>");
print_r($Jugadores)
foreach($usuarios as $clavesArreglosUnidimensionales=>$arreglosUnidimensionales){
   echo("<br>");
    foreach($arreglosUnidimensionales  as $valorers){
        
       echo($valorers);
       echo("<br>");


    }
}


?>

