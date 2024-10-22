<?php
echo "Imprimo Valores  que recibo de";
$telefono=$_POST['telefono'];
echo $telefono;
echo "<br>";
echo "nombre:  ";
$nombre=$_POST['nombre'];
echo $nombre; 
echo "<br>";
echo "contrasena:  ";
$contrasena=$_POST['contrasena'];
echo $contrasena;
echo "<br>";
echo "correo:  ";
$var2=$_POST['correo'];

echo "<br>";

$usuario=$_POST['usuario'];

include 'confi.php';
   $consulta = "delete from usuario where correo='$var2'";
   include 'operar.php';
         ?>
?>