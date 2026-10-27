<?php

final class Flauta extends InstrumentoViento{

    private function __construct(string $material = "madera", int $ed = 15)
    {
        parent::__construct($material, $ed);
    }
}