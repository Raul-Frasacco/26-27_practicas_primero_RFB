<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
include_once(__DIR__ . "/../../scripts/InstrumentoBase.php");
include_once(__DIR__ . "/../../scripts/InstrumentoViento.php");

//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"Relacion 4",
        "LINK" =>""
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("RELACION 4");
cabecera();
finCabecera();
inicioCuerpo("RELACION4", $barraUbi);
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
    $pruebaViento = new InstrumentoViento("piedra", 20);

    echo $pruebaViento->__toString();


}