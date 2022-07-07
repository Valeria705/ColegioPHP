<?php
include './CapaDatos/CursoData.php';
class CursoNegocio
{
    public function ConsultarCursos()
    {
        $capaDatos = new CursoData();
        return $capaDatos->ConsultarCursos();
    }
    public function ConsultarCurso($idAl)
    {
        $capaDatos = new CursoData();
        return $capaDatos->ConsultarCurso($idAl);
    }
    public function InsertarCurso($Curso)
    {
        $capaDatos = new CursoData();
        return $capaDatos->InsertarCurso($Curso);
    }
    public function ModificarCurso($Curso)
    {
        $capaDatos = new CursoData();
        return $capaDatos->ModificarCurso($Curso);
    }
    public function EliminarCurso($id)
    {
        $capaDatos = new CursoData();
        return $capaDatos->EliminarCurso($id);
    }


}

?>