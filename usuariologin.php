<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de usuarios</title>
    <link rel="stylesheet" href="usuarioslogin.css">
</head>
<body>
    <header>

    </header>

    <main>
<aside>
    <form action="usuariologin.php" method="POST"> <br><br>
        <input type="text" name="buscar"> <br> <br> 
        <input type="submit" value="buscar"> <br><br>
    </form>
<div>

    <?php
    if(isset($_POST['buscar'])===true)
    {
      echo"vengo de un formulario";

/********************************/

      $user=$_POST['buscar'];
      include 'confi.php';
      $consulta = "SELECT * FROM usuario WHERE nombre LIKE '%$user%' ORDER BY nombre";
      include 'opentable.php';
      if ($totalRows_usuarios>0)
      {
      echo "Si hay registros";
      ?>
      <hr>
      <?php
      do {
      ?>
      <a href="usuariologin.php?usuario=<?php echo($row_Usuarios['nombre']);?>"> <?php
      echo($row_Usuarios['nombre']);?> </a> <br>
      <?php
      }
      while ($row_Usuarios=mysqli_fetch_assoc($clientes));
      ?>
      <hr>
      <?php
      } 

/*********************************/
    }
    ?>
    
    
</div>
</aside>

    <?php

    if(isset($_GET['usuario'])===true)
    {
      echo"vengo del metodo get";
    }
    ?>

    </main>

</body>
</html>