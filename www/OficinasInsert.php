<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Insertar</h2>



<form action="OficinasInsertAction.php">
    <table border="1">
        <tr>
            <td>Id</td>
            <td><input type="text" name="Id_Oficina" /></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><input type="text" name="Nom_Oficina" /></td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td><input type="text" name="Tel_Oficina" /></td>
        </tr>
       
    </table>
    <br /> <br />
    <input type="submit" value="Ingresar" />
    
    <a href="index.php">Regresar a inicio</a>
</form>
</body>
</html>