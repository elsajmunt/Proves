<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="registro2.php" method="POST">
        <label for="id_user">ID User:</label><br>
        <input type="number" id="id_user" name="id_user" required><br><br>
        
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="dni">DNI:</label><br>
        <input type="text" id="dni" name="dni" required><br><br>
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>