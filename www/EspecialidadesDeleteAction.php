



<?php
include './CapaNegocio/EspecialidadNegocio.php';
$idAl= $_REQUEST["Id"];
$capaNegocio = new EspecialidadNegocio();
$capaNegocio->EliminarEspecialidad($idAl);

header('Location: EspecialidadesSelect.php');
?>