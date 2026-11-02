<?php

class SerieFibonacci implements Iterator
{
    
    private int $_limite;
    private int $_claveActual = 0;

    private int $anterior = 0;
    private int $actual = 1;

    public function __construct(int $limite)
    {
        $this->_limite = $limite;
    }


    public function rewind(): void
    {
        $this->_claveActual = 0;
        $this->anterior = 0;
        $this->actual = 1;
    }


    public function current(): int
    {
        return $this->_claveActual === 0 ? 0 :
               ($this->_claveActual === 1 ? 1 : $this->actual);
    }


    public function key(): int
    {
        return $this->_claveActual;
    }

    public function next(): void
    {
        $temp = $this->actual;
        $this->actual += $this->anterior;
        $this->anterior = $temp;
        $this->_claveActual++;
    }


    public function valid(): bool
    {
        return $this->_claveActual <= $this->_limite;
    }
}