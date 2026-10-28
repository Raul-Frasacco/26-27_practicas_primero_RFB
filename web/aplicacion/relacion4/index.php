<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
include_once(__DIR__ . "/../../scripts/InstrumentoBase.php");
include_once(__DIR__ . "/../../scripts/InstrumentoViento.php");
include_once(__DIR__ . "/../../scripts/Flauta.php");

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
    // $pruebaBase = new InstrumentoBase("Prueba base");   Comentado despues de probarla sin el abstract
    $pruebaViento = new InstrumentoViento("piedra", 20);
    $pruebaViento2 = new InstrumentoViento("cobre", 200);
    $pruebaFlauta = Flauta::CrearDesdeArray(["material" => "plata"]);
//dibuja la plantilla de la vista
inicioCabecera("RELACION 4");
cabecera();
finCabecera();
inicioCuerpo("RELACION4", $barraUbi);
cuerpo($pruebaViento, $pruebaViento2,$pruebaFlauta); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($pruebaViento, $pruebaViento2, $pruebaFlauta)
{
?>

    <h3>Prueba clase Instrumento viento</h3>
<?php

    echo $pruebaViento->sonido() . "<br>";
    echo $pruebaViento->afinar() . "<br>";
    echo "El oreden de creacion es: " . $pruebaViento->getOrden() . "<br>";
    echo $pruebaViento->__toString();
    echo "<h4>---------------------</h4>";

    echo $pruebaViento2->sonido() . "<br>";
    echo $pruebaViento2->afinar() . "<br>";
    echo "El oreden de creacion es: " . $pruebaViento2->getOrden() . "<br>";
    echo $pruebaViento2->__toString() . "<br>";
    echo "La edad actual es de: " . $pruebaViento2->getEdad() . "<br>";
    $pruebaViento2->envejecer();
    echo "La edad despues de envejercer el instrumento es de: " . $pruebaViento2->getEdad();

?>

 <h3>Prueba clase Flauta</h3>

<?php

    echo $pruebaFlauta->__toString() . "<br>";
    $clonFlauta = clone($pruebaFlauta);
    echo "<h4>---------------------</h4>";
    echo $clonFlauta->__toString();

}
