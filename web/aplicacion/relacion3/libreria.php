<?php

/**
 * Undocumented function
 *
 * @param array $array
 * @param string $cadena
 * @param integer $num1
 * @param integer $num2
 * @return void
 * 1.- Función cuentaVeces(). A esta función se le pasan cuatro parámetros: un array, una cadena y dos
 * números. La función se encargará de añadir en el array el primer número a la posición asociativa
 * indicada por la cadena. Hay que tener en cuenta que el array debe quedar actualizado cuando se
 * salga de la función. Además, cada vez que se llama a la función, se devuelve en el segundo número
 * un valor que corresponde con el número de llamada actual (1 para la primera, 2 para la segunda
 * llamada, etc). Se devolverá true si todo ha ido bien y false si se ha detectado algún error. (se debe
 * dar error si se indica como posición“2daw”o “primera”)
 */
function cuentaVeces(array &$array, string $cadena, int $num1, int &$num2){
    static $contadorLlamadas = 0;
    $contadorLlamadas++;
    $num2 = $contadorLlamadas;

    if (strtolower($cadena) == "2daw" || strtolower($cadena) == "primera"){
        throw new Error("No se puedes utilizar dicha posicion");
        return false;
    }else{
        $array[$cadena] = $num1;
        return true;
    }
}

function generarCadena(int $caracteres = 10){
    $caracPermitidos = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789';
}

