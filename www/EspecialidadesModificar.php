<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Modificar</h2>

<?php
    include './CapaNegocio/EspecialidadNegocio.php';

    $capaNegocio = new EspecialidadNegocio();
    $idAl= $_REQUEST["Id"];
    $item = $capaNegocio->ConsultarEspecialidad($idAl);
    



?>

<form action="EspecialidadesModificarAction.php">
    <table border="1">
        <tr>
            <td>Id</td>
            <td><input type="text" name="Id_Especialidad" value="<?php echo $item->getIdEspecialidad()?>"/></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="Nom_Especialidad" value="<?php echo $item->getNomEspecialidad()?>"/></td>
        </tr>
  
    </table>
    <br /> <br />
    <input type="submit" value="Ingresar" />
</form>
</body>
</html>