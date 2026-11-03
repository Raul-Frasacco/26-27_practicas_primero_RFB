<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
include_once(dirname(__FILE__) . "/../../aplicacion/librerias/val_normal.php");
//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"Relacion 5",
        "LINK" =>""
    ]
];
    
//dibuja la plantilla de la vista
inicioCabecera("RELACION 5");
cabecera();
finCabecera();
inicioCuerpo("RELACION5", $barraUbi);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo()
{
?>
<h2>Prueba Libreria Normal</h2>
<?php

?>
<h4>Validar Fecha</h4>
<?php
 $fecha = "2/11/2002";

 validaFecha($fecha, "01/01/2000");

 echo $fecha;

}