<?php

class Alumno
{
  private $IdAlumno;
  private $NomAlumno;
  private $DirAlumno;
  private $TelAlumno;
  private $GrpAlumno;
  
  public function setIdAlumno($IdAlumno)
  {
    $this->IdAlumno = $IdAlumno;
  }
  public function setNomAlumno($NomAlumno)
  {
    $this->NomAlumno = $NomAlumno;
  }
  public function setDirAlumno($DirAlumno)
  {
    $this->DirAlumno = $DirAlumno;
  }
  public function setTelAlumno($TelAlumno)
  {
    $this->TelAlumno = $TelAlumno;
  }
  public function setGrpAlumno($GrpAlumno)
  {
    $this->GrpAlumno = $GrpAlumno;
  }

  public function getIdAlumno()
  {
    return $this->IdAlumno;
  }
 
  public function getNomAlumno()
  {
    return $this->NomAlumno;
  }
 
  public function getDirAlumno()
  {
    return $this->DirAlumno;
  }

  public function getTelAlumno()
  {
    return $this->TelAlumno;
  }

  public function getGrpAlumno()
  {
    return $this->GrpAlumno;
  }
}
?>