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
        "TEXTO"=>"Ejercicio 3",
        "LINK" =>""
    ]
];

$arrayej41 = [[1], [2,2], [3,3,3], [4,4,4,4], [5,5,5,5,5]];


const Filas = 5;
$arrayej42 = [];

for ($i=0; $i<Filas; $i++){
    $arrayAux = [];
    for ($j=0; $j<=$i; $j++){
       $arrayAux[] = ($i+1); 
    }
    $arrayej42[] = $arrayAux;
}


//dibuja la plantilla de la vista
inicioCabecera("RELACION 1");
cabecera();
finCabecera();
inicioCuerpo("RELACION1",$barraUbi);
cuerpo($arrayej41, $arrayej42); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($arrayej41, $arrayej42)
{
?>
    
<?php

echo "<h2>Primera Forma </h2>";
    foreach($arrayej41 as $i => $valor){
        echo "<br>";
        $salto = 0;
            for($j = 0; $j <count($valor); $j++){
                if ($salto == 0){
                    echo $valor[$j] . " ";
                    $salto++;
                }else{
                    echo $valor[$j] . " ";
                }
            }
        }

echo "<h2>Segunda Forma </h2>";
    foreach($arrayej42 as $i => $valor){
        echo "<br>";
        $salto = 0;
            for($j = 0; $j <count($valor); $j++){
                if ($salto == 0){
                    echo $valor[$j] . " ";
                    $salto++;
                }else{
                    echo $valor[$j] . " ";
                }
            }
        }
}