<?php

class ClaseMisPropiedades implements Iterator
{
   
    private array $_propiedades = [];
    public mixed $propPublica;
    private mixed $_propPrivada = 25;


    private array $ordenIteracion = [];
    private int $posicion = 0;


    public function __construct()
    {
        
        $this->actualizarOrdenIteracion();
    }

    
    public function __set(string $nombre, mixed $valor): void
    {
        if ($nombre === '_propPrivada') {
     
            return;
        }

        $this->_propiedades[$nombre] = $valor;
        $this->actualizarOrdenIteracion();
    }

    public function __get(string $nombre): mixed
    {
        if (array_key_exists($nombre, $this->_propiedades)) {
            return $this->_propiedades[$nombre];
        }


        trigger_error("Propiedad '$nombre' no definida", E_USER_ERROR);
    }

    public function __isset(string $nombre): bool
    {
        return isset($this->_propiedades[$nombre]);
    }

    public function __unset(string $nombre): void
    {
        unset($this->_propiedades[$nombre]);
        $this->actualizarOrdenIteracion();
    }

    public function rewind(): void
    {
        $this->actualizarOrdenIteracion();
        $this->posicion = 0;
    }

    public function current(): mixed
    {
        $clave = $this->ordenIteracion[$this->posicion];
        return $this->obtenerValor($clave);
    }

    public function key(): string
    {
        return 'oi_' . $this->ordenIteracion[$this->posicion];
    }

    public function next(): void
    {
        $this->posicion++;
    }

    public function valid(): bool
    {
        return isset($this->ordenIteracion[$this->posicion]);
    }

    private function obtenerValor(string $clave): mixed
    {
        return match ($clave) {
            'propPublica' => $this->propPublica,
            '_propPrivada' => $this->_propPrivada,
            default => $this->_propiedades[$clave] ?? null
        };
    }

    private function actualizarOrdenIteracion(): void
    {
        $this->ordenIteracion = array_keys($this->_propiedades);
        $this->ordenIteracion[] = 'propPublica';
        $this->ordenIteracion[] = '_propPrivada';
    }
}