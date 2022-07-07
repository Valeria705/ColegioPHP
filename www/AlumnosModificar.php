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
    include './CapaNegocio/AlumnoNegocio.php';

    $capaNegocio = new AlumnoNegocio();
    $idAl= $_REQUEST["Id"];
    $item = $capaNegocio->ConsultarAlumno($idAl);
    



?>

<form action="AlumnosModificarAction.php">
<div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Id</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Id_Alumno" value="<?php echo $item->getIdAlumno()?>">
        </div>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Nom_Alumno" value="<?php echo $item->getNomAlumno()?>">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Direccion</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Dir_Alumno" value="<?php echo $item->getDirAlumno()?>">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Telefono</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Tel_Alumno" value="<?php echo $item->getTelAlumno()?>">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Grupo</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Grp_Alumno"  value="<?php echo $item->getGrpAlumno()?>">
        </div>




    
    <br /> <br />
    <input type="submit" value="Guardar" class="btn btn-primary btn-sm" />
    
    <a href="index.php" class="btn btn-primary btn-sm">Regresar a inicio</a>
</form>
    <!-- FIN DEL CONTENDIO -->

    <?php include("PlantillaFooter.php")?>

   

</body>
</html>