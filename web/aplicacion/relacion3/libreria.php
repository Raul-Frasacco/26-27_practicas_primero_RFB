<?php

/**
 * @param array $array
 * @param string $cadena
 * @param integer $num1
 * @param integer $num2
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
/**
 * @param integer $caracteres
 * 2.- Función generarCadena(). A esta función se le pasa un parámetro con valor por defecto 10 y se 
 * encarga de devolver una cadena de longitud la indicada cuyos caracteres son generados de forma 
 * aleatoria (caracteres válidos: letras mayúsculas, minúsculas y números). Devolverá false si se ha 
 * indicado un número negativo o igual a 0.
 */
function generarCadena(int $caracteres = 10){

    if ($caracteres <= 0)
        return false;

    $caracPermitidos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-%';
    $cadeFinal = "";
    for ($i = 0; $i < $caracteres; $i++){
        $cadeFinal .= $caracPermitidos[mt_rand(0,(strlen($caracPermitidos)-1))]; 
    }

    return $cadeFinal;

}

/**
 * Función operaciones(). Esta función recibe al menos tres parámetros. El primero (entero) es el 
 * tipo de operación. Los demás son valores numéricos (los operandos). El tipo de operación puede ser 
 * 1, suma todos los operandos 
 * 2, al primer operando se restan el resto 
 * 3, multiplicación de todos los operandos. 
 * En cualquier otro caso se suman los operandos que ocupan las posiciones pares y se restan 
 * los de las posiciones impares (el primer operando es 1).
 */

function operaciones(int $operacion, float $val1, float $val2, ...$restoVal){
    switch($operacion){
        case 1:{
            $sumaTodo = $val1 + $val2;
            foreach($restoVal as $pos => $val)
                $sumaTodo += $val;
            return $sumaTodo;
            break;
        }

        case 2:{
            $restaTodo = $val1 - $val2;
            foreach($restoVal as $pos => $val)
                $restaTodo -= $val;
            return $restaTodo;
            break;
        }

        case 3:{
            $multTodo = $val1 * $val2;
            foreach($restoVal as $pos => $val)
                $multTodo *= $val;
            return $multTodo;
            break;
        }

        default:{
            $sumaPar = 0;
            $sumaImpar = 0;

            $arrayFus = array_merge([$val1, $val2] , $restoVal);

            foreach($arrayFus as $pos => $val){
                if(($pos + 1) % 2 !== 0)
                    $sumaImpar += $val;
                else
                    $sumaPar += $val;
            }

            return ($sumaPar - $sumaImpar);
            break;
                
        }

    }
}
/**
 * Función devuelve(). Esta función recibe como parámetros tres números (enteros) y devuelve la 
 * suma de los tres valores en el primer parámetro y como resultado de la función el producto de los 
 * tres valores. Los dos últimos parámetros tendrán definidos valor por defecto (el que queráis).
 *
 * @param integer $num1
 * @param integer $num2
 * @param integer $num3
 * 
 */
function devuelve(int &$num1, int $num2 = 10, int $num3 = 10){
    $valor1 = $num1;

    $num1 = $num1 + $num2 + $num3;

    return $valor1 * $num2 * $num3;

}

function hacerOperacion(string $cad, int $oper1, int $oper2){
    switch (strtolower($cad)){
        case "suma":
    }

}

function sumar(){

}

