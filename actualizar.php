<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="estiloactualizar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Datos</title>
    <link rel="stylesheet" href="estiloactualizar.css">
    <script src="estilo.js" defer></script>
</head>
<body>
<header>
    <a href="login.html">registar para actualizar</a>
</header>
<main>
    <div class="wrapper">
        <div class="form-wrapper">
            <aside>
                <br>
                <br>
                <div id="dos" name="dos">
                    <form action="actualizar.php" method="post">
                        <center>
                            <label for="">INGRESE EL NOMBRE QUE DESEA ACTUALIZAR</label> <br>
                            <hr>
                            <input type="text" name="nombre" id="">  <br>
                            <button type="submit" value="B u s c a r" style="width: 85px; background-color: white; margin:auto;height:40px; "> Buscar </button>
                        </center>
                    </form>
                </div>
                <div>
                    <?php
                    if (isset($_POST["nombre"]) === true) {
                        echo "Bienvenido: ";
                        $user = $_POST['nombre'];
                        echo $user;
                        include 'confi.php';

                        $consulta = "SELECT * FROM usuario WHERE nombre LIKE '%$user%' ORDER BY nombre";
                        include 'opentable.php';
                        if ($totalRows_usuarios > 0) {
                            echo "   Si tienes cuenta para continuar con el proceso";
                            ?>
                            <hr>
                            <?php
                            do {
                                ?>
                                <a href="actualizar.php?catid=<?php echo($row_Usuarios['nombre']); ?>"> <?php echo($row_Usuarios['nombre']); ?> </a> <br>
                                <?php
                            } while ($row_Usuarios = mysqli_fetch_assoc($clientes));
                            ?>
                            <hr>
                            <?php
                        } else {
                            echo "No hay registros";
                        }
                    } else {
                        echo "";
                    }
                    ?>
                </div>
            </aside>

            <?php
            if (isset($_GET["catid"]) === true) {
                $catid = $_GET['catid'];
                echo "";

                include 'confi.php';

                $consulta = "SELECT * FROM usuario WHERE nombre = '$catid'";
                include 'opentable.php';
                if ($totalRows_usuarios > 0) {
                    echo "       Si hay registros en tu nombre";
                    ?>
                    <div id="uno" name="uno">
                    <div class="form-wrapper sign-in">
                        <form action="recibir.php" method="post" name="contactenos" id="contactenos">
                            <fieldset>
                            <div class="input-group">
                                <label for="">nombre</label>
                                <input type="text" name="nombre" value="<?php echo $row_Usuarios['nombre']; ?>"><br>
                                </div>
                                <div class="input-group">
                                <label for="">usuario</label>
                                <input type="text" name="usuario" value="<?php echo $row_Usuarios['usuario']; ?>"><br>
                                </div>
                                <div class="input-group">
                                <label for="">correo</label>
                                <input type="text" name="correo" value="<?php echo $row_Usuarios['correo']; ?>"><br>
                                </div>
                                <div class="input-group">
                                <label for="">telefono</label>
                                <input type="tel" name="telefono" value="<?php echo $row_Usuarios['telefono']; ?>"><br>
                                </div>
                                <div class="input-group">
                                <label for="">contraseña</label>
                                <input type="password" name="contrasena" value="<?php echo $row_Usuarios['contrasena']; ?>"> <br>
                                </div>
                                <button type="submit" value="ACTUALIZAR" id="nuevo" name="nuevo" onclick="document.contactenos.action = 'act.php'; document.contactenos.submit()">ACTUALIZAR</button>
<button type="submit" value="Eliminar" id="eliminar" name="eliminar" onclick="document.contactenos.action = 'eliminar.php'; document.contactenos.submit()">Eliminar</button>
                            </fieldset>
                        </form>
                    </div>
                    <?php
                } else {
                    echo "NO hay registros para el formulario";
                }
            }
            ?>
        </div>
    </div>
</main>
</body>
</html>
