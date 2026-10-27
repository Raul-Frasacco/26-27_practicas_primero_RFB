<?php

class InstrumentoViento extends InstrumentoBase{

    protected string $material = "madera";


    public function __construct(string $material = "madera", int $ed = 15)
    {
        $des = "instrumento de viento";
        $this->material = $material;
        parent::__construct($des, $ed);
    }

    public function sonido(): string{
        return "Soplando estoy soplando vengo";
    }

    final public function afinar(): string{
        return "1. Coger el instrumeto <br>" 
        . "2. Afinar el instrumento <br>" 
        . "3. Disfrutar ";    
    }

    #[Override]
    public function __toString()
    {
        return parent::__toString() . " <br>Instrumento de material " . $this->material;
    }
}