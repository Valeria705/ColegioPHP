



<?php
include './CapaNegocio/CursoNegocio.php';
$idAl= $_REQUEST["Id"];
$capaNegocio = new CursoNegocio();
$capaNegocio->EliminarCurso($idAl);

header('Location: CursosSelect.php');
?>