<?php
DEFINE('servidor','localhost');
DEFINE('database','proyecto');
DEFINE('usuario','root');
DEFINE('clave','');
$mysqli = new mysqli(servidor,usuario,clave,database);
if ($mysqli->connect_errno) {
echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
