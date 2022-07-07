<?php

class Especialidad
{
  private $IdEspecialidad;
  private $NomEspecialidad;
 
  
  public function setIdEspecialidad($IdEspecialidad)
  {
    $this->IdEspecialidad = $IdEspecialidad;
  }
  public function setNomEspecialidad($NomEspecialidad)
  {
    $this->NomEspecialidad = $NomEspecialidad;
  }


  public function getIdEspecialidad()
  {
    return $this->IdEspecialidad;
  }
 
  public function getNomEspecialidad()
  {
    return $this->NomEspecialidad;
  }
 
}
?>