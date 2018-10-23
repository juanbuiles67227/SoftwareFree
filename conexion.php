<?php

$enlace = mysqli_connect("127.0.0.1", "findme", "builes150", "personas");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$tel=$_POST['tel'];
$query= "INSERT INTO datos(cedula, nombre, direccion, tel) values('$cedula', '$nombre', '$direccion', '$tel')";
mysqli_query($enlace,$query);
 if (!$query) {
 echo("Fallo en la insercion de registro en la Base de Datos: " . mysql_error());
 }
 //4. Cerrar conexión a la Base de Datos
// mysql_close($conexion);
 

/*$cedula = "cedula";
$nombre = "nombre";
$direccion = "direccion";
$tel = "tel";
$resultado ="INSERT INTO datos (cedula, nombre, direccion, tel) VALUES ('$cedula', '$nombre', '$direccion', '$tel')";*/
 ?>