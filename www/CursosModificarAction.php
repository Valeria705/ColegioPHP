



<?php
include './CapaNegocio/CursoNegocio.php';
$al = new Curso();
$al->setIdCurso($_REQUEST["Id_Curso"]);
$al->setNomCurso($_REQUEST["Nom_Curso"]);


$capaNegocio = new CursoNegocio();
$capaNegocio->ModificarCurso($al);

header('Location: CursosSelect.php');
?>