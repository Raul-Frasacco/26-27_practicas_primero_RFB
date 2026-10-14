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

$vector=array();
    $vector[1]="esto es una cadena";
    $vector["posi1"]=25.67;
    $vector[]=false;
    $vector["ultima"]=array(2,5,96);
    $vector[56]=23;


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

    foreach ($vector as $key => $valor) {
        echo "Posición " .  $key . " contenido (tipo): " . gettype($valor);

        switch (gettype($valor)) {
            case "array": {
                    echo "<br>Contenido del array: ";
        foreach ($valor as $val) {
            echo $val . ", ";
        }
    echo "<br>";
                    echo "<br>";
                };
                break;
            case "integer": {
                    echo "<br>Entero bonito valor " . $valor . " en binario " . decbin($valor) . "<br><br>";
                };
                break;
            case "double": {
                    echo "<br>Real " . $valor . " que al cuadrado es " . pow($valor, 2) . "<br><br>";
                };
                break;
            case "string": {
                    echo "<br>-" . $valor . "-<br><br>";
                };
                break;
            case "boolean": {
                    echo "<br>" . ($valor ? "true" : "false") . " su opuesto -> " . (!$valor ? "true" : "false") . "<br><br>";
                };
                break;
        }
    }


}