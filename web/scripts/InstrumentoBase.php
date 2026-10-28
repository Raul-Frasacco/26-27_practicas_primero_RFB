<?php
abstract class InstrumentoBase{

    protected string $descripcion;
    protected int $edad = 10;
    protected static int $contElem = 0;
    protected int $ordenCreacion;

    public function __construct(string $des, int $ed = 10)
    {
        $this->descripcion = $des;
        $this->edad = $ed;
        self::$contElem++;
        $this->ordenCreacion = self::$contElem; 

    }

    public function setDescripcion(string $descripcion): void{
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(): string{
        return $this->descripcion;
    }

    public function getEdad(): int{
        return $this->edad;
    }

    public function getCont(): int{
        return self::$contElem;
    }

    public function getOrden(): int{
        return $this->ordenCreacion;
    }

    abstract public function sonido(): string;
    abstract public function afinar(): string;


    public function envejecer(): void{
        $this->edad++;
    }

    public function __toString()
    {
        return "instrumento con descripcion " . $this->getDescripcion() . ", instancia <br>"
        . $this->getOrden() . " de un total de " . $this->getCont() . ". Tiene " . $this->getEdad() . " años. La clase es " . get_class($this);
    }

    // Evita que intenten escribir en propiedades no declaradas
    public function __set(string $name, mixed $value): void {
        throw new ErrorException("No se permite la sobrecarga dinámica. La propiedad '\$$name' no existe.");
    }

    // Evita que intenten leer propiedades no declaradas
    public function __get(string $name): mixed {
        throw new ErrorException("No se permite la sobrecarga dinámica. La propiedad '\$$name' no existe o es privada.");
    }

}
