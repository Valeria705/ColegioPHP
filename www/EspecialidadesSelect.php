<?php

include './CapaNegocio/EspecialidadNegocio.php';

$capaNegocio = new EspecialidadNegocio();

$list = $capaNegocio->ConsultarEspecialidades();
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
 
<h2>Especialidads</h2>
<a href="EspecialidadesInsert.php">Agregar</a>
<br/><br/>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
       
        <th colspan="2">Opciones</th>
    </tr>

 <?php
foreach ($list as $item) {

    ?>
    <tr>
        <td><?php echo $item->getIdEspecialidad() ?></td>
        <td><?php echo $item->getNomEspecialidad()?></td>
        <td><a href="EspecialidadesModificar.php?Id=<?php echo $item->getIdEspecialidad() ?>">modificar</a></td>
        <td><a href="EspecialidadesDeleteAction.php?Id=<?php echo $item->getIdEspecialidad() ?>">eliminar</a></td>
    </tr>
<?php }?>
    </table>
    <!-- FIN DEL CONTENDIO -->

    <?php include("PlantillaFooter.php")?>

   

</body>
</html>
