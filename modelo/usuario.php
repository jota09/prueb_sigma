<?php

class Usuario {
    var $id;
    var $nombre;
    var $edad;
    
    function __construct($id, $nombre, $edad ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }


}

