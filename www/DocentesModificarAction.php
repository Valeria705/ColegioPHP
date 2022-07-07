



<?php
include './CapaNegocio/DocenteNegocio.php';
$al = new Docente();
$al->setIdDocente($_REQUEST["ID_Docente"]);
$al->setDirDocente($_REQUEST["Dire_Docente"]);
$al->setNomDocente($_REQUEST["Nom_Docente"]);
$al->setTelDocente($_REQUEST["Tel_Docente"]);

$capaNegocio = new DocenteNegocio();
$capaNegocio->ModificarDocente($al);

header('Location: DocentesSelect.php');
?>