<?php
$var2=$_POST['vcorreo'];
echo $var2;
include 'confi.php';
$ssql = "delete from login where Correo='$Var2'";
include 'sup.php'

?>
