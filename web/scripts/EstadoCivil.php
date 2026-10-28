<?php

enum EstadoCivil : int{
    case soltero = 10;
    case casado = 20;
    case pareja = 30;
    case viudo = 40;

    function descripcion() : string{
        

    }
}