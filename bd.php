<?php

//Se crea enlace conexion dentro de variable
$conn = mysqli_connect(
  "localhost",
  "root",
  "Mandavim13m-",
  "trading"     
);

//si existe enlace muestre mensaje
if(!$conn){
  echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conn) . PHP_EOL;

mysqli_close($conn);
?>