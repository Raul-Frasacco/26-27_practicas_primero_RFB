<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
include("libreria.php");
//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"Relacion 3",
        "LINK" =>""
    ]
];

$vector=array();//el vector vacio
$numero=0;

//dibuja la plantilla de la vista
inicioCabecera("RELACION 3");
cabecera();
finCabecera();
inicioCuerpo("RELACION3", $barraUbi);
cuerpo($vector, $numero); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($vector, $numero)
{
?>  

  <h3>Ejercicio1 </h3>  
<?php
    

    cuentaVeces($vector,"1osición",7,$numero);
    echo $numero . "<br>";
    cuentaVeces($vector,"otra",2,$numero);
    echo $numero . "<br>";

    foreach($vector as $pos =>$valor)
        echo "La posicion es " . $pos . " valor " . $valor . "<br>";

}