<?php
$servername = "localhost";
$username = "debar";
$password = "Starr";
$dbname = "datos_base";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] ;
        echo "  Nombre:  " . $row["nombre"] ;
        echo "  Apellido:  " . $row["apellido"] ;
        echo "  Correo:  " . $row["correo"];
        echo "  Contraseña: " . $row["contrasena"];
        echo "  Estado: " . $row["estado"] ;
        echo "  Telefono:  " .$row["telefono"];
        echo "<br> <br>";
    }
} else {
    echo "No se encontraron datos.";
}

$conn->close();
?>
