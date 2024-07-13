<?php

//Este script crea las variables y se puede asignar valores

class Notas{

    //aqui cree las propiedades de la clase
    private $nombre_de_la_nota;
    private $descripcion_de_la_nota;
    private $fecha_de_la_nota;
    private $id;



    //creamos una funcion construct con los parametros de la propiedades
    public function __construct($nombre_de_la_nota,$descripcion_de_la_nota,$fecha_de_la_nota,$id)
    {
        $this->nombre_de_la_nota = $nombre_de_la_nota;
        $this->descripcion_de_la_nota = $descripcion_de_la_nota;
        $this->fecha_de_la_nota = $fecha_de_la_nota;
        $this->id = $id;

    }

    //usamos los get y los set ya que las propiedades estan encapsuladas

    public function getNombreNota(){
        return $this->nombre_de_la_nota;

    }

    public function setNombreNota($nombre_de_la_nota){
        $this->nombre_de_la_nota = $nombre_de_la_nota;

    }

    public function getDescripcionNota(){
        return $this->descripcion_de_la_nota;

    }

    public function setDescripcionNota($descripcion_de_la_nota){
        $this->descripcion_de_la_nota = $descripcion_de_la_nota;

    }

    public function getFechaNota(){
        return $this->fecha_de_la_nota;
        
    }

    public function setFechaNota($fecha_de_la_nota){
        $this->fecha_de_la_nota = $fecha_de_la_nota;
        
    }

    public function getIdNota(){
        return $this->id;
        
    }

    public function setIdNota($id){
        $this->id = $id;

    }

    // Creamos una función que nos enseñe la información en filas de tabla
    public function getTableRow() {
        $row = "<tr>
                    <td>" . $this->getNombreNota() . "</td>
                    <td>" . $this->getDescripcionNota() . "</td>
                    <td>" . $this->getFechaNota() . "</td>
                    <td>" . $this->getIdNota() . "</td>
                </tr>";
        return $row;
     }
}

?>
