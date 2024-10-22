
<?php
$CONEXION = mysqli_connect("localhost", "root", "", "rescate")
or
die("Fallo conexion");

$registros = mysqli_query($CONEXION, "select nombre, correo, telefono, contrasena from usuario");

echo "<table>";
echo "<tr>";
    echo "<td>", "NOMBRE", "</td>";
    echo "<td>", "CORREO", "</td>";
    echo "<td>", "TELEFONO", "</td>";
    echo "<td>", "CONTRASENA", "</td>";
    echo "</tr>";
while ($reg = mysqli_fetch_array($registros)) {
    
    echo "<tr>";
    echo "<td>", $reg["nombre"], "</td>";
    echo "<td>", $reg["correo"], "</td>";
    echo "<td>", $reg["telefono"], "</td>";
    echo "<td>", $reg["contrasena"], "</td>";
    echo "</tr>";
    
}
echo "</table>";

mysqli_close($CONEXION);
?>
