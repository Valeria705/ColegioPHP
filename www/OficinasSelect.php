<?php

include './CapaNegocio/OficinaNegocio.php';

$capaNegocio = new OficinaNegocio();

$list = $capaNegocio->ConsultarOficinas();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio en PHP</title>
    <link href="/Content/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

    <?php include("PlantillaMenu.php")?>

    <!-- INICIO DEL CONTENDIO -->
    
 
<h2>Oficinas</h2>
<a href="OficinasInsert.php">Agregar</a>
<br/><br/>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Telefono</th>
       
        <th colspan="2">Opciones</th>
    </tr>

 <?php
foreach ($list as $item) {

    ?>
    <tr>
        <td><?php echo $item->getIdOficina() ?></td>
        <td><?php echo $item->getNomOficina()?></td>
        <td><?php echo $item->getTelOficina()?></td>
        <td><a href="OficinasModificar.php?Id=<?php echo $item->getIdOficina() ?>">modificar</a></td>
        <td><a href="OficinasDeleteAction.php?Id=<?php echo $item->getIdOficina() ?>">eliminar</a></td>
    </tr>
<?php }?>
    </table>
    <!-- FIN DEL CONTENDIO -->

    <?php include("PlantillaFooter.php")?>

   

</body>
</html>
