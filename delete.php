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

$sql = "DELETE FROM usuarios WHERE id=$id";

if ($conn->query($sql) === true) {
    echo "Datos eliminados correctamente.";
} else {
    echo "Error al eliminar datos: " . $conn->error;
}

$conn->close();
?>

<h2>Eliminar datos</h2>
    <form action="delete.php" method="POST">
        <label for="id">ID:</label>
        <input type="number" name="id" required><br>

        <input type="submit" value="Eliminar">
    </form>