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
    include './CapaNegocio/AulaNegocio.php';

    $capaNegocio = new AulaNegocio();
    $idAl= $_REQUEST["Id"];
    $item = $capaNegocio->ConsultarAula($idAl);
    



?>

<form action="AulasModificarAction.php">
    <table border="1">
        <tr>
            <td>Id</td>
            <td><input type="text" name="Id_Aula" value="<?php echo $item->getIdAula()?>"/></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="Nom_Aula" value="<?php echo $item->getNomAula()?>"/></td>
        </tr>
  
    </table>
    <br /> <br />
    <input type="submit" value="Ingresar" />
</form>
</body>
</html>