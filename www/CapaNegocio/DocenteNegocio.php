<?php
include './CapaDatos/DocenteData.php';
class DocenteNegocio
{
    public function ConsultarDocentes()
    {
        $capaDatos = new DocenteData();
        return $capaDatos->ConsultarDocentes();
    }
    public function ConsultarDocente($idAl)
    {
        $capaDatos = new DocenteData();
        return $capaDatos->ConsultarDocente($idAl);
    }
    public function InsertarDocente($Docente)
    {
        $capaDatos = new DocenteData();
        return $capaDatos->InsertarDocente($Docente);
    }
    public function ModificarDocente($Docente)
    {
        $capaDatos = new DocenteData();
        return $capaDatos->ModificarDocente($Docente);
    }
    public function EliminarDocente($id)
    {
        $capaDatos = new DocenteData();
        return $capaDatos->EliminarDocente($id);
    }


}

?>