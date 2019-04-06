<?php

class Usuario {
    
    private $id;
    private $nombre;
    private $email;
    private $password;
    private $fecha_registro;
    private $activo;
    
    public function __construct ($id, $nombre, $email, $password, $fecha_registro, $activo){
        $this-> id = $id;
        $this-> nombre = $nombre;
        $this-> password = $password;
        $this-> fecha_registro = $fecha_registro;
        $this-> activo = $activo;
    }
    
    public function getId() {
        return $this-> id;
    }
    
    public function getNombre() {
        return $this-> nombre;
    }

    public function getPassword(){
        return $this-> password;
    }

    public function getFecha_Registro() {
        return $this-> fecha_registro;
    }
     
    public function esta_Activo() {
        return $this-> activo;
    }
    
      public function setId() {
        return $this-> id;
    }
    
    public function setNombre() {
        return $this-> nombre;
    }

    public function setPassword(){
        return $this-> password;
    }

    public function setFecha_Registro() {
        return $this-> fecha_registro;
    }
     
    public function setActivo() {
        return $this-> activo;
    }
}

