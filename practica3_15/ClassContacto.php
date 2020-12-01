<?php

//creamos clase sencilla para los vuelos
class Contacto
{
    //propiedades
    // como se trata de una clase de paso,
    //es decir, solo servirá como una clase contenedora
    // necesitamos que las propiedades sean públicas
    public $nombre;
    public $apellidos;
    public $fecha_nac;
    public $estado_civil;
    public $origen;
    public $correo;
    public $redes;

    //constructor
    public function __construct(string $nom, string $apellidos, string $fecha,
string $estado, string $orig, string $correo, string $redes)
    {
        $this->nombre = $nom;
        $this->apellidos = $apellidos;
        $this->fecha_nac = $fecha;
        $this->estado_civil = $estado;
        $this->origen = $orig;
        $this->correo = $correo;
        $this->redes = $redes;
    }
    //no necesitamos getters ni setters
}
?>
