<?php
echo "Imprimo Valores  que recibo de";
echo "<br>";
echo "telefono;  ";
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
echo $correo;
echo "<br>";

$usuario=$_POST['usuario'];

include 'confi.php';

$consulta = "update usuario set nombre='$nombre',telefono='$telefono',correo='$var2',contrasena='$contrasena',usuario='$usuario' Where correo='$var2'";

include 'operar.php';
         ?>
       
             
    

