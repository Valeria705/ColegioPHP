<?php

include './CapaNegocio/CursoNegocio.php';

$capaNegocio = new CursoNegocio();

$list = $capaNegocio->ConsultarCursos();
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
<h2>Cursos</h2>

<br/><br/>
<table  class="table">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
       
        <th colspan="2">Opciones</th>
    </tr>

 <?php
foreach ($list as $item) {

    ?>
    <tr>
        <td><?php echo $item->getIdCurso() ?></td>
        <td><?php echo $item->getNomCurso()?></td>
        <td><a href="CursosModificar.php?Id=<?php echo $item->getIdCurso() ?>" class="btn btn-primary btn-sm">modificar</a></td>
        <td><a href="CursosDeleteAction.php?Id=<?php echo $item->getIdCurso() ?>" class="btn btn-primary btn-sm">eliminar</a></td>
    </tr>
<?php }?>
    </table>
    <a href="CursosInsert.php" class="btn btn-primary btn-sm">Agregar</a>


       <!-- FIN DEL CONTENDIO -->



       <?php include("PlantillaFooter.php")?>

   

</body>
</html>
