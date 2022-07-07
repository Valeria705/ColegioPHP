<?php

class Docente
{
  private $IdDocente;
  private $NomDocente;
  private $DirDocente;
  private $TelDocente;
 
  
  public function setIdDocente($IdDocente)
  {
    $this->IdDocente = $IdDocente;
  }
  public function setNomDocente($NomDocente)
  {
    $this->NomDocente = $NomDocente;
  }
  public function setDirDocente($DirDocente)
  {
    $this->DirDocente = $DirDocente;
  }
  public function setTelDocente($TelDocente)
  {
    $this->TelDocente = $TelDocente;
  }
 

  public function getIdDocente()
  {
    return $this->IdDocente;
  }
 
  public function getNomDocente()
  {
    return $this->NomDocente;
  }
 
  public function getDirDocente()
  {
    return $this->DirDocente;
  }

  public function getTelDocente()
  {
    return $this->TelDocente;
  }

}
?>