<?php
include './CapaDatos/OficinaData.php';
class OficinaNegocio
{
    public function ConsultarOficinas()
    {
        $capaDatos = new OficinaData();
        return $capaDatos->ConsultarOficinas();
    }
    public function ConsultarOficina($idAl)
    {
        $capaDatos = new OficinaData();
        return $capaDatos->ConsultarOficina($idAl);
    }
    public function InsertarOficina($Oficina)
    {
        $capaDatos = new OficinaData();
        return $capaDatos->InsertarOficina($Oficina);
    }
    public function ModificarOficina($Oficina)
    {
        $capaDatos = new OficinaData();
        return $capaDatos->ModificarOficina($Oficina);
    }
    public function EliminarOficina($id)
    {
        $capaDatos = new OficinaData();
        return $capaDatos->EliminarOficina($id);
    }


}

?>