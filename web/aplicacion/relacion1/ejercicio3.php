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

$arrayEj = [];

$arrayEj[1] = 123;
$arrayEj[16] = 300;
$arrayEj[54] = 543;

$arrayEj[] = 34;

$arrayEj["uno"] = "cadena";
$arrayEj["dos"] = true;
$arrayEj["tres"] = 1.345;

$arrayEj["ultima"] = [1,34,"nueva"];

$arrayEj2 = array(1 => 123, 16 => 300, 54 => 543, 34, "uno" => "cadena", 
                    "dos" => true, "tres" => 1.345, "ultima" => [1,34,"nueva"]);

$arrayEj3 = [1 => 123, 16 => 300, 54 => 543, 34, "uno" => "cadena", 
                    "dos" => true, "tres" => 1.345, "ultima" => [1,34,"nueva"]];

//dibuja la plantilla de la vista
inicioCabecera("RELACION 1");
cabecera();
finCabecera();
inicioCuerpo("RELACION1", $barraUbi);
cuerpo($arrayEj, $arrayEj2, $arrayEj3); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($arrayEj, $arrayEj2, $arrayEj3)
{
?>
    
<?php
echo "<h2>Usando varias sentencias </h2>";
foreach($arrayEj as $i => $valor){
    if(is_array($valor))
        print_r($valor) . "<br>";
    else
        echo $valor . "<br>";
    
}

echo "<h2>Usando una sentencia array </h2>";
foreach($arrayEj2 as $i => $valor){
    if(is_array($valor))
        print_r($valor) . "<br>";
    else
        echo $valor . "<br>";
    
}

echo "<h2>Usando una sentencia [] </h2>";
foreach($arrayEj3 as $i => $valor){
    if(is_array($valor))
        print_r($valor) . "<br>";
    else
        echo $valor . "<br>";
    
}
}