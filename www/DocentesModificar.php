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
    include './CapaNegocio/DocenteNegocio.php';

    $capaNegocio = new DocenteNegocio();
    $idAl= $_REQUEST["Id"];
    $item = $capaNegocio->ConsultarDocente($idAl);
    



?>

<form action="DocentesModificarAction.php">
    <table border="1">
        <tr>
            <td>Id</td>
            <td><input type="text" name="ID_Docente" value="<?php echo $item->getIdDocente()?>"/></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="Nom_Docente" value="<?php echo $item->getNomDocente()?>"/></td>
        </tr>
        <tr>
            <td>Direccion</td>
            <td><input type="text" name="Dire_Docente" value="<?php echo $item->getDirDocente()?>"/></td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td><input type="text" name="Tel_Docente" value="<?php echo $item->getTelDocente()?>"/></td>
        </tr>
        
    </table>
    <br /> <br />
    <input type="submit" value="Ingresar" />
    <a href="index.php">Regresar a inicio</a>
</form>
</body>
</html>