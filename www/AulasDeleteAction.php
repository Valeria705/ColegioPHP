



<?php
include './CapaNegocio/AulaNegocio.php';
$idAl= $_REQUEST["Id"];
$capaNegocio = new AulaNegocio();
$capaNegocio->EliminarAula($idAl);

header('Location: AulasSelect.php');
?>