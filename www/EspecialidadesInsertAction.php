

<?php
include './CapaNegocio/EspecialidadNegocio.php';
$al = new Especialidad();
$al->setIdEspecialidad($_REQUEST["Id_Especialidad"]);
$al->setNomEspecialidad($_REQUEST["Nom_Especialidad"]);


$capaNegocio = new EspecialidadNegocio();
$capaNegocio->InsertarEspecialidad($al);

header('Location: EspecialidadesSelect.php');
?>