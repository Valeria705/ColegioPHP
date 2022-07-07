<?php
include './CapaDatos/AulaData.php';
class AulaNegocio
{
    public function ConsultarAulas()
    {
        $capaDatos = new AulaData();
        return $capaDatos->ConsultarAulas();
    }
    public function ConsultarAula($idAl)
    {
        $capaDatos = new AulaData();
        return $capaDatos->ConsultarAula($idAl);
    }
    public function InsertarAula($Aula)
    {
        $capaDatos = new AulaData();
        return $capaDatos->InsertarAula($Aula);
    }
    public function ModificarAula($Aula)
    {
        $capaDatos = new AulaData();
        return $capaDatos->ModificarAula($Aula);
    }
    public function EliminarAula($id)
    {
        $capaDatos = new AulaData();
        return $capaDatos->EliminarAula($id);
    }


}

?>