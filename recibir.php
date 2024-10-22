<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url('imagenes/logo.jpg');
            background-repeat:no-repeat;
            background-size:100%;
            background-position:fixed;
        }
    </style>
</head>
<body>                
    <?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $contrasena=$_POST['contrasena'];

    $CONEXION = mysqli_connect("localhost", "root", "", "rescate")
    or
    die("Fallo conexion");

    mysqli_query($CONEXION, "insert into usuario(nombre, correo, telefono, contrasena) values ('$nombre','$correo','$telefono','$contrasena')")
    or 
    die("Fallos al enviar datos");

    mysqli_close($CONEXION);
    echo "<h2>El registro ha sido exitoso</h2>";

    if(($nombre == "kevin") && ($contrasena == "mbappe")) {
        header("Refresh:0; url=http://localhost/Registros/admin.php"); // pagina de admin
    }
    else {
        header("Refresh:5; url=http://localhost/Registros/actualizar.php"); // pagina de normal
    }
    
    ?>

</body>
</html>