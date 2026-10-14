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
        "TEXTO"=>"Ejercicio 1",
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
    

    
<?php

echo "<h3>Hola que tal</h3>";
echo 'Mi nombre es Raúl <br>';

$insti = "Pedro Espinosa";

$cadena = <<<EOT
Actualmente estudio
en el instituto $insti 
EOT;

$cadNowdoc = <<<'EOD'
No se que escribir para 
poder hacer este ejemplo
Hola una hamburguesa,gracias
EOD;

echo $cadena . "<br>";
echo $cadNowdoc;
}