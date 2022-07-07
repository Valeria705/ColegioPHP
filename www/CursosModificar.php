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
    
<h2>Modificar</h2>

<?php
    include './CapaNegocio/CursoNegocio.php';

    $capaNegocio = new CursoNegocio();
    $idAl= $_REQUEST["Id"];
    $item = $capaNegocio->ConsultarCurso($idAl);
    



?>

<form action="CursosModificarAction.php">
<div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Id</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Id_Curso" value="<?php echo $item->getIdCurso()?>">
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Nom_Curso" value="<?php echo $item->getNomCurso()?>">
    </div>
    
    <br /> <br />
    <input type="submit" value="Guardar" class="btn btn-primary btn-sm"/>
</form>
    <!-- FIN DEL CONTENDIO -->

    <?php include("PlantillaFooter.php")?>

   

</body>
</html>