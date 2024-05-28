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
$usuario = $_POST['usuario'];
$password_form = $_POST['password'];

// Consulta SQL para obtener la contraseña almacenada
$sql = "SELECT password FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $password = $row['password'];

    // Verificar la contraseña
    if ($password == $password_form) {
        echo "Usuario logado con éxito";
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
