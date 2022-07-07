<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wIdth=device-wIdth, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Modificar</h2>

<?php
    include './CapaNegocio/OficinaNegocio.php';

    $capaNegocio = new OficinaNegocio();
    $IdAl= $_REQUEST["Id"];
    $item = $capaNegocio->ConsultarOficina($IdAl);
    



?>

<form action="OficinasModificarAction.php">
    <table border="1">
        <tr>
            <td>Id</td>
            <td><input type="text" name="Id_Oficina" value="<?php echo $item->getIdOficina()?>"/></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="Nom_Oficina" value="<?php echo $item->getNomOficina()?>"/></td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td><input type="text" name="Tel_Oficina" value="<?php echo $item->getTelOficina()?>"/></td>
        </tr>
        
    </table>
    <br /> <br />
    <input type="submit" value="Ingresar" />
    <a href="index.php">Regresar a inicio</a>
</form>
</body>
</html>