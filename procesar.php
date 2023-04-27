<html>
<a href="index.php">Volver a menu</a><br>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba1";

// Crea una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtiene los datos del formulario
$numeroId = $_POST['numeroId'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo_electronico = $_POST["correo_electronico"];

// Inserta los datos en la tabla
$sql = "INSERT INTO usuarios2 (numeroId, nombre, apellido, correo_electronico) VALUES ('$numeroId','$nombre', '$apellido','$correo_electronico')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar los datos: " . $conn->error;
}

$conn->close();

?>

