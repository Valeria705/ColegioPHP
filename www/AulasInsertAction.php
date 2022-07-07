

<?php
include './CapaNegocio/AulaNegocio.php';
$al = new Aula();
$al->setIdAula($_REQUEST["Id_Aula"]);
$al->setNomAula($_REQUEST["Nom_Aula"]);


$capaNegocio = new AulaNegocio();
$capaNegocio->InsertarAula($al);

header('Location: AulasSelect.php');
?>