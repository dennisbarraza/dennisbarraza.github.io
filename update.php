<?php
$servername = "localhost";
$username = "debar";
$password = "Starr";
$dbname = "datos_base";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo', contrasena='$contrasena' WHERE id=$id";

if ($conn->query($sql) === true) {
    echo "Datos actualizados correctamente.";
} else {
    echo "Error al actualizar datos: " . $conn->error;
}

$conn->close();
?>

<h2>Modificar datos</h2>
    <form action="update.php" method="POST">
        <label for="id">ID:</label>
        <input type="number" name="id" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>

        <input type="submit" value="Modificar">
    </form>

