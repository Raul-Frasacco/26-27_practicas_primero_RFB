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
        "TEXTO"=>"Ejercicio 6",
        "LINK" =>""
    ]
];

$vector = array("primera" => 12.56, 24 => true, 67 => 23.76);

//dibuja la plantilla de la vista
inicioCabecera("RELACION 1");
cabecera();
finCabecera();
inicioCuerpo("RELACION1", $barraUbi);
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

print_r($vector);
    echo "<br>";

    reset($vector);

    echo "<br>Con bucle for<br>";
    for (;key($vector) != NULL; next($vector)) {
        echo "Posición: " . key($vector) . " -> " . current($vector)."<br>";
    }

    echo "<br>Con bucle while<br>";

    reset($vector);
    while (key($vector) != NULL) {
        echo "Posición: " . key($vector) . " -> " . current($vector)."<br>";
        next($vector);
    }

    echo "<br>Con bucle do while<br>";
    
    reset($vector);
    do {
        echo "Posición: " . key($vector) . " -> " . current($vector)."<br>";
        next($vector);
    } while (key($vector) != NULL);


    echo "<br>Usando array_keys y array_values<br>";
    
    $claves=array_keys($vector);
    $valores=array_values($vector);


    for ($cont=0;$cont<count ($claves);$cont++)
    {
        echo "Posición:  $claves[$cont] -> $valores[$cont] <br>";
        
    }
}