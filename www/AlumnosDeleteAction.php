



<?php
include './CapaNegocio/AlumnoNegocio.php';
$idAl= $_REQUEST["Id"];
$capaNegocio = new AlumnoNegocio();
$capaNegocio->EliminarAlumno($idAl);

header('Location: AlumnosSelect.php');
?>