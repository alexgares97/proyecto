<?php
$conexion = new PDO('mysql:host=mysql;dbname=project', 'user', '1234');
// Utilizar la conexión aquí
$resultados = $conexion->query("SELECT * FROM usuarios");
foreach($resultados as $fila){
echo $fila['id'] . " - " .$fila['nombre'] . '</br>';
}
echo "Hola mundo";