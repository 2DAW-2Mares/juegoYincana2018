<?php
class Equipo
{
    // Declaración de propiedades
    private $id;
    private $nombre;
    private $categoria;
    private $puntuacion;
    const PEQUENYOS = 1;
    const GRANDES = 2;

    // getId()
    public function getId() {
        return $this->id;
    }
    
    // setId(int $id)
    public function setId($id) {
        $this->id = $id;
    }

    // getNombre()
    public function getNombre() {
        return $this->nombre;
    }
    
    // setNombre(String $nombre)
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // getCategoria()
    public function getCategoria() {
        return $this->categoria;
    }
    
    // setCategoria(int $categoria)
    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    // getPuntuacion()
    public function getPuntuacion() {
        return $this->puntuacion;
    }
    
    // setPuntuacion(int $puntuacion)
    public function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }


}
