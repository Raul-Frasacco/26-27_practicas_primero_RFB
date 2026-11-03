<?php
/*
function validaEntero(int &$var, int $min, int $max, int $defecto):bool Esta función
comprueba que $var contiene un entero cuyo valor está entre $min y $max. En $var se
devuelve el entero saneado (en caso de no cumplir las condiciones asigna a $var el valor
$defecto). La función devuelve true si es correcto y false en caso contrario.
*/
function validaEntero(int &$var, int $min, int $max, int $defecto):bool{
    if ($var < $min || $var > $max){
        $var = $defecto;
        return false;
    }
    return true;
}
 /*
 function validaReal(float &$var, float $min, float $max, float $defecto):bool Esta función
comprueba que $var contiene un real cuyo valor está entre $min y $max. En $var se devuelve
el real saneado (en caso de no cumplir las condiciones asigna a $var el valor $defecto). La
función devuelve true si es correcto y false en caso contrario.

 */
function validaReal(float &$var, float $min, float $max, float $defecto):bool {
    if ($var < $min || $var > $max){
        $var = $defecto;
        return false;
    }
    return true;
}

/*
function validaFecha(string &$var, string $defecto):bool Esta función comprueba que $var
contiene una fecha correcta en el formato dd/mm/aaaa. En $var se devuelve la fecha saneada
(2 cifras para dia y mes y cuatro para año- ej fecha 1/2/2023 es válida aunque se sanea y se
convierte en 01/02/2023). En caso de no cumplir las condiciones devuelve $defecto en
$var. La función devuelve true si es correcta y false en caso contrario.
*/
function validaFecha(string &$var, string $defecto):bool {
    $arrayFecha = explode("/" , $var);

    if (count($arrayFecha) !== 3) {
        $var = $defecto;
        return false;
    }

    $dia = sprintf("%02d" , (int)$arrayFecha[0]);
    $mes = sprintf("%02d" , (int)$arrayFecha[1]);
    $año = sprintf("%04d", (int)$arrayFecha[2]);

    if (!checkdate($mes, $dia, $año)){
        $var = $defecto;
        return false;
    }

    $var = "$dia/$mes/$año";
    return true;
}
?>