<?php
class Persona
{
  public $nombre;
  public $apellidos;
  public $dni;
  function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
  function getNombre()
  {
    return $this->nombre;
  }
  function setApellidos($apellidos)
  {
    $this->apellidos = $apellidos;
  }
  function getApellidos()
  {
    return $this->apellidos;
  }
  function setDni($dni)
  {
    $this->dni = $dni;
  }
  function getDni()
  {
    return $this->dni;
  }
}
