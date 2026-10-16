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
        "TEXTO"=>"Ejercicio 4",
        "LINK" =>""
    ]
];

$v1 = 17.5;
$v2 = 379987.24;

$datos = [0 => $v1, 1 => $v2];

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
function cuerpo($datos)
{
?>
    

    
<?php

    echo '-'.str_pad(number_format($datos[0], 1, ","), 15, 0, STR_PAD_LEFT).'-';
    echo "<br/>";
    echo number_format($datos[1], 2, ",", ".");

}