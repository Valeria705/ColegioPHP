<?php

class Oficina
{
  private $IdOficina;
  private $NomOficina;
  private $TelOficina;
 
  
  public function setIdOficina($IdOficina)
  {
    $this->IdOficina = $IdOficina;
  }
  public function setNomOficina($NomOficina)
  {
    $this->NomOficina = $NomOficina;
  }
  public function setTelOficina($TelOficina)
  {
    $this->TelOficina = $TelOficina;
  }
 

  public function getIdOficina()
  {
    return $this->IdOficina;
  }
 
  public function getNomOficina()
  {
    return $this->NomOficina;
  }
  public function getTelOficina()
  {
    return $this->TelOficina;
  }

}
?>