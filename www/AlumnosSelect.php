<?php

include './CapaNegocio/AlumnoNegocio.php';

$capaNegocio = new AlumnoNegocio();

$list = $capaNegocio->ConsultarAlumnos();
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
    <table  class="table">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Grupo</th>
            <th colspan="2">Opciones</th>
        </tr>
    
    <?php
    foreach ($list as $item) {

        ?>
        <tr>
            <td><?php echo $item->getIdAlumno() ?></td>
            <td><?php echo $item->getNomAlumno()?></td>
            <td><?php echo $item->getDirAlumno()?></td>
            <td><?php echo $item->getTelAlumno()?></td>
            <td><?php echo $item->getGrpAlumno()?></td>
            <td><a href="AlumnosModificar.php?Id=<?php echo $item->getIdAlumno() ?>" class="btn btn-primary btn-sm">modificar</a></td>
            <td><a href="AlumnosDeleteAction.php?Id=<?php echo $item->getIdAlumno() ?>" class="btn btn-primary btn-sm">eliminar</a></td>
        </tr>
    <?php }?>
    </table>
    <a href="AlumnosInsert.php" class="btn btn-primary btn-sm">Agregar</a>

    <!-- FIN DEL CONTENDIO -->
<?php include("PlantillaFooter.php")?>

   

</body>
</html>