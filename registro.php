<?php
$servername = "localhost";
$username = "debar";
$password = "Starr";
$dbname = "datos_base";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre=$_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$telefono = $_POST['telefono'];
$estado = $_POST['estado'];
$radiob ='N/A';

$sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena, estado, telefono,radiob) VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$estado', '$telefono', '$radiob')";

if ($conn->query($sql) === true) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<script>
        function validarFormulario() {
            var nombre = document.getElementById("nombre").value;
            var apellido = document.getElementById("apellido").value;
            var correo = document.getElementById("correo").value;
            var contraseña = document.getElementById("contrasena").value;

            if (nombre == "" || apellido == "" || correo == "" || contraseña == "") {
                alert("Por favor, rellena todos los campos.");
                return false;
            }

            // Validar formato de correo electrónico
            var correoExp = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!correoExp.test(correo)) {
                alert("Por favor, ingresa una dirección de correo electrónico válida.");
                return false;
            }

            // Validar contraseña (entre 4 y 16 caracteres, con al menos una mayúscula)
            var contraseñaExp = /^(?=.*[A-Z]).{4,16}$/;
            if (!contraseñaExp.test(contraseña)) {
                alert("Por favor, ingresa una contraseña de entre 4 y 16 caracteres con al menos una mayúscula.");
                return false;
            }
        }
    </script>

<head>
<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="shortcut icon" href="#">
    <!-- ↓↓↓↓ link para agregar el estilo de bootstrap ↓↓↓↓ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bienvenido</title>
</head>
<body>


<form action="registro.php" method="POST" onsubmit="return validarFormulario()" class="row g-3">
  <div class="col-md-4">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text"  name="nombre"  required class="form-control">
  </div>
  <div class="col-md-4">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" required>
  </div>
  <div class="col-md-4">
    <label for="correo" class="form-label">Correo Electronico</label>
    <div class="input-group">
      <span class="input-group-text" id="email">@</span>
      <input type="email" class="form-control" name="correo" aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" required>
  </div>
  
  </div>
  <div class="col-md-3">
  <label for="Estados" class="form-label">Estado</label></label>
        <select class="form-select" id="estados" name="estado" required>
            <option value="0">Selecciona un estado</option>
            <?php
            // Conexión a la base de datos donde estan los paises
            $conn = new mysqli('localhost', 'debar', 'Starr', 'Mexico');

            // Verificar conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Consulta a la base de datos para obtener los países
            $query = "SELECT estado FROM estados";
             $result = $conn->query($query);

            // Generar las opciones del select con los países obtenidos
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['estado'] . '">' . $row['estado'] . '</option>';
            }
            // Cerrar conexión a la base de datos
            $conn->close();
            ?>
        </select><br>
          </div>

  <div class="col-md-3">
    <label for="contrasena" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contrasena" required>
  </div>
 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>
</form>

</body>

</html>
