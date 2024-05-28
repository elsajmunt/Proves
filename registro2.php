<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactos-laura";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
//$id_user = $_POST['id_user'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$dni = $_POST['dni'];

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO usuarios (usuario, password, dni) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $usuario, $password, $dni);

if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>