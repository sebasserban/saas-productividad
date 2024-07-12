<?php
//Clase Tarea<
class Tarea{
    // variables
    private $nombre = "";
    private $descripcion = "";
    private $vencimiento;
    private $estado = false;
    private $id = "";

    // constructor
    public function __construct($nombre, $descripcion, $vencimiento, $estado, $id){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->vencimiento = $vencimiento;
        $this->estado = $estado;
        $this->id = $id;
    }

    //getters y setters
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getVencimiento(){
        return $this->vencimiento;
    }
    public function setVencimiento($vencimiento){
        $this->vencimiento = $vencimiento;
    }

    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
}
