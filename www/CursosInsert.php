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
    
<h2>Insertar</h2>



<form action="CursosInsertAction.php">
<div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Id</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Id_Curso">
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="Nom_Curso">
    </div>
    <br /> <br />
    <input type="submit" value="Ingresar" class="btn btn-primary btn-sm"/>
</form>
    <!-- FIN DEL CONTENDIO -->

    <?php include("PlantillaFooter.php")?>

   

</body>
</html>