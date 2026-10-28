<?php

final class Flauta extends InstrumentoViento{

    private function __construct(string $material = "madera", int $ed = 15)
    {
        parent::__construct($material, $ed);
    }

    public static function CrearDesdeArray(array $asociativo): self{
        $material = $asociativo["material"] ?? "madera";

        $edad = $asociativo["edad"] ?? 15;

        $flautaNueva = new Flauta($material, $edad);
        return $flautaNueva;
    }

    public function __clone()
    {
        $this->edad = 0;
        self::$contElem++;
        $this->ordenCreacion = self::$contElem;        
    }

}