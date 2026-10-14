<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"Relacion 2",
        "LINK" =>"/aplicacion/relacion2/index.php"
    ],
    [
        "TEXTO"=>"Ejercicio 2",
        "LINK" =>""
    ]
];

$cadena = "Está la niña en casa";

//dibuja la plantilla de la vista
inicioCabecera("RELACION 2");
cabecera();
finCabecera();
inicioCuerpo("RELACION2", $barraUbi);
cuerpo($cadena); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($cadena)
{
?>
    

    
<?php

$arrayLetras =  mb_str_split(trim($cadena), 1, "UTF-8");

foreach($arrayLetras as $pos => $valor){
    $contEs = 0;
    while ($contEs < $pos){
        echo "&nbsp";
        $contEs++;
    }
    echo $valor . "<br>";
}

echo "--------------------- <br>";

for($i = (count($arrayLetras)-1); $i >= 0; $i-- ){
    $contEs = 0;
    while ($contEs < $i){
        echo "&nbsp";
        $contEs++;
    }

    if ($i % 2 == 0)
        echo strtoupper($arrayLetras[$i]) . "<br>";
    else
        echo strtolower($arrayLetras[$i]) . "<br>";
    
}

}