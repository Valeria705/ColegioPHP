

<?php
include './CapaNegocio/AlumnoNegocio.php';
$al = new Alumno();
$al->setIdAlumno($_REQUEST["Id_Alumno"]);
$al->setDirAlumno($_REQUEST["Dir_Alumno"]);
$al->setGrpAlumno($_REQUEST["Grp_Alumno"]);
$al->setNomAlumno($_REQUEST["Nom_Alumno"]);
$al->setTelAlumno($_REQUEST["Tel_Alumno"]);

$capaNegocio = new AlumnoNegocio();
$capaNegocio->InsertarAlumno($al);

header('Location: AlumnosSelect.php');
?>