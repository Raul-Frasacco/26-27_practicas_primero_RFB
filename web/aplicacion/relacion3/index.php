<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
include("libreria.php");
//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"Relacion 3",
        "LINK" =>""
    ]
];

$vector=array();//el vector vacio
$numero=0;

//dibuja la plantilla de la vista
inicioCabecera("RELACION 3");
cabecera();
finCabecera();
inicioCuerpo("RELACION3", $barraUbi);
cuerpo($vector, $numero); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($vector, $numero)
{
?>  

  <h3>Ejercicio1 </h3>  
<?php
    

    cuentaVeces($vector,"1osición",7,$numero);
    echo $numero . "<br>";
    cuentaVeces($vector,"otra",2,$numero);
    echo $numero . "<br>";

    foreach($vector as $pos =>$valor)
        echo "La posicion es " . $pos . " valor " . $valor . "<br>";

?>

  <h3>Ejercicio2 </h3>
  
<?php

    echo generarCadena(7);


?>

  <h3>Ejercicio3 </h3>
  
<?php

    echo operaciones(5,2,5,7,3,4);

?>

  <h3>Ejercicio4 </h3>
  
<?php
    // Los tres parámetros 
    $valor1=7;
    echo devuelve($valor1,4,5) . "<br>";
    echo $valor1 . "<br>";

    //El primer parámetro únicamente 
    $valor2=7;
    echo devuelve($valor2) . "<br>";
    echo $valor2 . "<br>"; 

    //  El primer y el segundo parámetro 
    $valor3=7;
    echo devuelve($valor3,4) . "<br>";
    echo $valor3 . "<br>";

    // El primer y el tercer parámetro 
    $valor4=7; 
    echo devuelve(num1: $valor4, num3: 5) . "<br>";
    echo $valor4 . "<br>";

    

}

