<?php

class Aula
{
  private $IdAula;
  private $NomAula;
 
  
  public function setIdAula($IdAula)
  {
    $this->IdAula = $IdAula;
  }
  public function setNomAula($NomAula)
  {
    $this->NomAula = $NomAula;
  }


  public function getIdAula()
  {
    return $this->IdAula;
  }
 
  public function getNomAula()
  {
    return $this->NomAula;
  }
 
}
?>