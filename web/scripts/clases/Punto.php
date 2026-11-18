<?php
include_once __DIR__ . '/../Librerias/validacion.php';

class Punto{
    public const COLORES = ["black"=>["nombre"=>"negro", "rgb" =>[0,0,0]],
                            "red"=>["nombre"=>"rojo", "rgb" =>[255,0,0]],
                            "blue"=>["nombre"=>"azul", "rgb" =>[0,0,255]],
                            "green"=>["nombre"=>"verde", "rgb" =>[0,128,0]]];

    public const GROSORES = [1 =>"fino", 2 => "medio", 3 => "grueso"];

    private int $x;
    private int $y;
    private string $color;
    private int $grosor;

    public function __construct(int $x, int $y, string $color, int $grosor)
    {
        if (!$this->setX($x))
            throw new Exception("No se puede asignar el valor X");
        if (!$this->setY($y))
            throw new Exception("No se puede asignar el valor Y");
        if (!$this->setColor($color))
            throw new Exception("No se puede asignar el valor Color");
        if (!$this->setGrosor($grosor))
            throw new Exception("No se puede asignar el valor Grosor");
    }

    public function setX(int $x): bool {
        if(validaEntero($x, 0, 20000, 0)=== false)
            return false;

        $this->x = $x;
        return true;
    }

     public function getX(): int {
        return $this->x;
     }

    public function setY(int $y): bool {
        if(validaEntero($y, 0, 20000, 0)=== false)
            return false;

        $this->y = $y;
        return true;
    }

    public function getY(): int {
        return $this->y;
     }

    public function setColor(string $color): bool {

        foreach(self::COLORES as $coIng => $array){
            if (mb_strtolower($color) === mb_strtolower($coIng)){
                $this->color = mb_strtolower($color);
                return true;
            }
        }

        return false;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setGrosor(int $grosor): bool{

        foreach(self::GROSORES as $numero => $gros){
            if ($numero === $grosor){
                $this->grosor = $grosor;
                return true;
            }

        }

        return false;
    }

    public function getGrosor(): int {
        return $this->grosor;
    }

    public function __set($name, $value)
    {
        throw new Exception("No se pueden crear propiedades dinamicas");
    }

    public function __get($name)
    {
        throw new Exception("No se pueden ver propiedades creadas dinamicamente");
    }

}
