



<?php
include './CapaNegocio/DocenteNegocio.php';
$idAl= $_REQUEST["Id"];
$capaNegocio = new DocenteNegocio();
$capaNegocio->EliminarDocente($idAl);

header('Location: DocentesSelect.php');
?>