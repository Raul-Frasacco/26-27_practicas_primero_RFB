<?php

class Persona{
    private string $nombre;
    private string $fecha_nacimiento;
    private string $domicilio;
    private string $localidad;
    private EstadoCivil $estado;

    //----------- Get de las propiedades-----------//
    public function getNombre() : string {
        return $this->nombre;
    }

    public function getFechaNacimiento() : string {
        return $this->fecha_nacimiento;
    }

    public function getDomicilio() : string {
        return $this->domicilio;
    }

    public function getlocalidad() : string {
        return $this->localidad;
    }

    public function getEstado() : EstadoCivil {
        return $this->estado;
    }

    //----------- Set de las propiedades-----------//

    public function setNombre(string $nombre) : void {
        $this->nombre = $nombre;
    }

    public function setFechaNacimiento(string $fecha_nacimiento) : void {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function setDomicilio(string $domicilio) : void {
        $this->domicilio = $domicilio;
    }

    public function setlocalidad(string $localidad) : void {
        $this->localidad = $localidad;
    }

    public function setEstado(EstadoCivil $estado) : void {
        $this->estado = $estado;
    }

    private function __construct()
    {
        $this->nombre = "prueba";
        $this->fecha_nacimiento = "01/01/2000";
        $this->domicilio = "carrera 12";
        $this->localidad = "antequera";
        $this->estado = EstadoCivil::soltero;
    }

    public static function registrarPersona(string $nombre, string $fecha_nacimiento,
                                            string $domicilio, string $localidad, EstadoCivil $estado) : self{
        $persona = new self();
        $persona->nombre = $nombre;
        $persona->fecha_nacimiento = $fecha_nacimiento;
        $persona->domicilio = $domicilio;
        $persona->localidad = $localidad;
        $persona->estado = $estado;

        return $persona;
    }

    public function __toString()
    {
        return $this->nombre . " es una persona " . $this->estado->descripcion() . 
                " nacida en " . $this->fecha_nacimiento . " y que vive en " . $this->localidad;
    }

}