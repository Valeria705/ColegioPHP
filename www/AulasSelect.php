<?php

include './CapaNegocio/AulaNegocio.php';

$capaNegocio = new AulaNegocio();

$list = $capaNegocio->ConsultarAulas();
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
    
 
<h2>Aulas</h2>
<a href="AulasInsert.php">Agregar</a>
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
        <td><?php echo $item->getIdAula() ?></td>
        <td><?php echo $item->getNomAula()?></td>
        <td><a href="AulasModificar.php?Id=<?php echo $item->getIdAula() ?>">modificar</a></td>
        <td><a href="AulasDeleteAction.php?Id=<?php echo $item->getIdAula() ?>">eliminar</a></td>
    </tr>
<?php }?>
    </table>
  <!-- FIN DEL CONTENDIO -->

  <?php include("PlantillaFooter.php")?>

   

</body>
</html>