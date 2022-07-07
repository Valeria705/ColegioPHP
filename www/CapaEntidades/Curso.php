<?php

class Curso
{
  private $IdCurso;
  private $NomCurso;
 
  
  public function setIdCurso($IdCurso)
  {
    $this->IdCurso = $IdCurso;
  }
  public function setNomCurso($NomCurso)
  {
    $this->NomCurso = $NomCurso;
  }


  public function getIdCurso()
  {
    return $this->IdCurso;
  }
 
  public function getNomCurso()
  {
    return $this->NomCurso;
  }
 
}
?>