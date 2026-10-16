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
        "TEXTO"=>"Ejercicio 3",
        "LINK" =>""
    ]
];

$caracteres = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');

$conArray = "";
$conASCII = "";

for ($i = 0; $i < 20; $i++) {
    $conArray .= $caracteres[mt_rand(0, count($caracteres) - 1)];

    do
       $caracter=mt_rand(48, 122);
    while (($caracter >=58 &&$caracter<=64) ||
           ($caracter >=91 &&$caracter<=96));
    $conASCII.= chr($caracter);
}

$datos = [0 => $conArray, 1 => $conASCII];

//dibuja la plantilla de la vista
inicioCabecera("RELACION 2");
cabecera();
finCabecera();
inicioCuerpo("RELACION2", $barraUbi);
cuerpo($datos); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($datos){

    echo "Realizado con array <br>";
    echo $datos[0] . "<br>";

    echo "Realizado con codigo ASCII <br>";
    echo $datos[1]. "<br>";
?>
    

    
<?php

}