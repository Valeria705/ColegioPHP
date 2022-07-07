<?php
include './CapaDatos/AlumnoData.php';
class AlumnoNegocio
{
    public function ConsultarAlumnos()
    {
        $capaDatos = new AlumnoData();
        return $capaDatos->ConsultarAlumnos();
    }
    public function ConsultarAlumno($idAl)
    {
        $capaDatos = new AlumnoData();
        return $capaDatos->ConsultarAlumno($idAl);
    }
    public function InsertarAlumno($alumno)
    {
        $capaDatos = new AlumnoData();
        return $capaDatos->InsertarAlumno($alumno);
    }
    public function ModificarAlumno($alumno)
    {
        $capaDatos = new AlumnoData();
        return $capaDatos->ModificarAlumno($alumno);
    }
    public function EliminarAlumno($id)
    {
        $capaDatos = new AlumnoData();
        return $capaDatos->EliminarAlumno($id);
    }


}

?>