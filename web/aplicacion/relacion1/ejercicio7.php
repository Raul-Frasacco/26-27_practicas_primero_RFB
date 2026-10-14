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
        "TEXTO"=>"Ejercicio 7",
        "LINK" =>""
    ]
];


$arrayDeVariables = array();


$fechaHoy = date("d/m/Y", time());

$arrayDeVariables[] = $fechaHoy;

$aFechFormLargo = (preg_split("/[,]+/", (date("d,F,Y,D", (time())))));


$cadFechaFormatoLargo = "Día " . $aFechFormLargo[0] . ", mes " . $aFechFormLargo[1] . ", año " . $aFechFormLargo[2] . ", día de la semana " . $aFechFormLargo[3];

$arrayDeVariables[] = $cadFechaFormatoLargo;


$hora = date("H:i:s", time());

$arrayDeVariables[] =  $hora;

$fechaDada = mktime(0, 12, 45, 3, 29, 2024);
$fechaCortaAp4 = date("d/m/Y", mktime(0, 0, 0, 3, 29, 2024));

$arrayDeVariables[] = $fechaCortaAp4;

$aFechLargAp4 = (preg_split("/[,]+/", (date("d,F,Y,D", $fechaDada))));
$cadFechLargAp4 = "Día " . $aFechLargAp4[0] . ", mes " . $aFechLargAp4[1] . ", año " . $aFechLargAp4[2] . ", día de la semana " . $aFechLargAp4[3];

$arrayDeVariables[] = $cadFechLargAp4;


$horaAp4 = date("H:i:s", $fechaDada);

$arrayDeVariables[] = $horaAp4;


$fechaDeHace12dias4horas = time() - (12 * 24 * 60 * 60) - (4 * 60 * 60);
$fechaCortaAp5 = date("d/m/Y", $fechaDeHace12dias4horas);

$arrayDeVariables[] = $fechaCortaAp5;


$aFechLargAp5 = (preg_split("/[,]+/", (date("d,F,Y,D", $fechaDeHace12dias4horas))));
$cadFechLargAp5 = "Día " . $aFechLargAp5[0] . ", mes " . $aFechLargAp5[1] . ", año " . $aFechLargAp5[2] . ", día de la semana " . $aFechLargAp5[3];

$arrayDeVariables[] = $cadFechLargAp5;

$hora5 = date("H:i:s", $fechaDeHace12dias4horas);

$arrayDeVariables[] = $hora5;



$arrayDeVariables2 = array();

$fechaActualDT = new DateTime();

$fechaCortaDT = $fechaActualDT->format("d/m/Y");

$arrayDeVariables2[] = $fechaCortaDT;


$fechaLargaDT = (preg_split("/[,]+/",($fechaActualDT-> format("d,F,Y,D"))));

$cadFechLargDT = "Día " . $fechaLargaDT[0] . ", mes " . $fechaLargaDT[1] . ", año " . $fechaLargaDT[2] . ", día de la semana " . $fechaLargaDT[3];

$arrayDeVariables2[] = $cadFechLargDT;



$horaActualDT = $fechaActualDT->format("H:i:s");

$arrayDeVariables2[] = $horaActualDT;



$fechaDadaDT =new DateTime("2024-03-29 12:45:00");
$fechaDadaDT =DateTime::createFromFormat("d/m/Y H:i:s", "29/03/2025 12:45:00");



$cadenafechaDadaCortaDT = $fechaDadaDT->format("d/m/Y");

$arrayDeVariables2[] = $cadenafechaDadaCortaDT;


$aFechaDadaLargaDT = (preg_split("/[,]+/",($fechaDadaDT-> format("d,F,Y,D"))));
$cadenafechaDadaLargaDT = "Día " . $aFechaDadaLargaDT[0] . ", mes " . $aFechaDadaLargaDT[1] . ", año " . $aFechaDadaLargaDT[2] . ", día de la semana " . $aFechaDadaLargaDT[3];

$arrayDeVariables2[] = $cadenafechaDadaLargaDT;

$horaDadaDT =  $fechaDadaDT ->format("H:i:s");

$arrayDeVariables2[] = $horaDadaDT;


$fechaDeHace12dias4horasDT = $fechaActualDT->sub(new DateInterval("P12DT4H"));


$cadenafechaHace12d4h = $fechaDeHace12dias4horasDT->format("d/m/Y");

$arrayDeVariables2[] = $cadenafechaHace12d4h;


$aFechLargAp5DateTime = (preg_split("/[,]+/",($fechaDeHace12dias4horasDT-> format("d,F,Y,D"))));
$cadFechLargAp5DT = "Día " . $aFechLargAp5DateTime[0] . ", mes " . $aFechLargAp5DateTime[1] . ", año " . $aFechLargAp5DateTime[2] . ", día de la semana " . $aFechLargAp5DateTime[3];

$arrayDeVariables2[] = $cadFechLargAp5DT;


$hora5DT =  $fechaDeHace12dias4horasDT ->format("H:i:s");

$arrayDeVariables2[] = $hora5DT;
//dibuja la plantilla de la vista
inicioCabecera("RELACION 1");
cabecera();
finCabecera();
inicioCuerpo("RELACION1", $barraUbi);
cuerpo($arrayDeVariables, $arrayDeVariables2); //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() {}
//vista
function cuerpo($arrayDeVariables, $arrayDeVariables2)
{
?>
    
<?php
 echo "<h4>Fechas con funciones</h4>";
    foreach ($arrayDeVariables as $fecha) {
        echo $fecha . "<br>";
        echo "<br>";
    }

    echo "<h4>Fechas con la clase DateTime</h4>";

    foreach ($arrayDeVariables2 as $fecha) {
        echo $fecha . "<br>";
        echo "<br>";
    }
}