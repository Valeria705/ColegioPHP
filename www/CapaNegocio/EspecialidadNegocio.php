<?php
include './CapaDatos/EspecialidadData.php';
class EspecialidadNegocio
{
    public function ConsultarEspecialidades()
    {
        $capaDatos = new EspecialidadData();
        return $capaDatos->ConsultarEspecialidades();
    }
    public function ConsultarEspecialidad($idAl)
    {
        $capaDatos = new EspecialidadData();
        return $capaDatos->ConsultarEspecialidad($idAl);
    }
    public function InsertarEspecialidad($Especialidad)
    {
        $capaDatos = new EspecialidadData();
        return $capaDatos->InsertarEspecialidad($Especialidad);
    }
    public function ModificarEspecialidad($Especialidad)
    {
        $capaDatos = new EspecialidadData();
        return $capaDatos->ModificarEspecialidad($Especialidad);
    }
    public function EliminarEspecialidad($id)
    {
        $capaDatos = new EspecialidadData();
        return $capaDatos->EliminarEspecialidad($id);
    }


}

?>