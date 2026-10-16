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
        "LINK" =>""
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("RELACION 2");
cabecera();
finCabecera();
inicioCuerpo("RELACION2", $barraUbi);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>
    <br>
    <a href="ejercicio1.php">Ejercicio 1</a><br>
    <a href="ejercicio2.php">Ejercicio 2</a><br>
    <a href="ejercicio3.php">Ejercicio 3</a><br>
    <a href="ejercicio4.php">Ejercicio 4</a><br>
    <a href="ejercicio5.php">Ejercicio 5</a><br>
    

    
<?php

}