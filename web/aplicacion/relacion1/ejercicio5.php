<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"Relacion 1",
        "LINK" =>"/aplicacion/relacion1/index.php"
    ],
    [
        "TEXTO"=>"Ejercicio 5",
        "LINK" =>""
    ]
];

$vector = array();
$vector[1]= "esto es una cadena";
$vector["posi1"] = 25.67;
$vector[]= false;
$vector["ultima"]= array(2,5,96);
$vector[56] = 23;

//dibuja la plantilla de la vista
inicioCabecera("RELACION 1");
cabecera();
finCabecera();
inicioCuerpo("RELACION1",$barraUbi );
cuerpo($vector); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($vector)
{
?>
    
<?php

foreach($vector as $i => $valor){
    echo "<h3>Posicion " . $i . " contenido " . gettype($valor). "</h3><br>";
    switch (gettype($valor)){
        case ("array"):
            echo "Mostrando valores del array: ";
            foreach($valor as $j => $val)
                echo $val . "  ";  
            echo "<br>";
            break;
        
        case ("integer"):
            echo "Entero con valor " . $valor . ", en binario " . decbin($valor);

        case ("double"):
            echo $valor . " que al cuadrado es " . sqrt($valor);

        case ("string"): 
            echo $valor;

        case ("boolean"):
            echo $valor;

         }
    }
}