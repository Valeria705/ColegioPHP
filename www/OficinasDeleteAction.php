



<?php
include './CapaNegocio/OficinaNegocio.php';
$idAl= $_REQUEST["Id"];
$capaNegocio = new OficinaNegocio();
$capaNegocio->EliminarOficina($idAl);

header('Location: OficinasSelect.php');
?>