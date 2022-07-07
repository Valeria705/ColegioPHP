<?php

include './CapaNegocio/DocenteNegocio.php';

$capaNegocio = new DocenteNegocio();

$list = $capaNegocio->ConsultarDocentes();
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
 
<h2>Docentes</h2>

<br/><br/>
<table  class="table">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
       
        <th colspan="2">Opciones</th>
    </tr>

 <?php
foreach ($list as $item) {

    ?>
    <tr>
        <td><?php echo $item->getIdDocente() ?></td>
        <td><?php echo $item->getNomDocente()?></td>
        <td><?php echo $item->getDirDocente() ?></td>
        <td><?php echo $item->getTelDocente()?></td>
        <td><a href="DocentesModificar.php?Id=<?php echo $item->getIdDocente() ?>" class="btn btn-primary btn-sm">modificar</a></td>
        <td><a href="DocentesDeleteAction.php?Id=<?php echo $item->getIdDocente() ?>" class="btn btn-primary btn-sm">eliminar</a></td>
    </tr>
<?php }?>
    </table>
    <a href="DocentesInsert.php"  class="btn btn-primary btn-sm">Agregar</a>
    <!-- FIN DEL CONTENDIO -->

    <?php include("PlantillaFooter.php")?>

   

</body>
</html>
