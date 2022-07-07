

<?php
include './CapaNegocio/OficinaNegocio.php';
$al = new Oficina();
$al->setIdOficina($_REQUEST["Id_Oficina"]);
$al->setNomOficina($_REQUEST["Nom_Oficina"]);
$al->setTelOficina($_REQUEST["Tel_Oficina"]);

$capaNegocio = new OficinaNegocio();
$capaNegocio->InsertarOficina($al);

header('Location: OficinasSelect.php');
?>