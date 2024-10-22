<?php
mysqli_select_db($mysqli,database);
$clientes=mysqli_query($mysqli,$consulta) or
die(mysqli_error());
$row_Usuarios= mysqli_fetch_assoc($clientes);
$totalRows_usuarios=0;
$totalRows_usuarios=mysqli_num_rows($clientes);
?>