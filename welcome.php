<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="shortcut icon" href="#">
    <!-- ↓↓↓↓ link para agregar el estilo de bootstrap ↓↓↓↓ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bienvenido</title>
</head>
    

<body background="imagen3.png">
    <h1>Bienvenido</h1>

    <h2>Insertar datos</h2>
    <form action="insert.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>

        <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
        <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>

        <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
        <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>
        <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
        <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>

        <input type="submit" value="Insertar">
   
</form>

    <h2>Ver datos</h2>
    <?php include 'read.php'; ?>

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

    <h2>Eliminar datos</h2>
    <form action="delete.php" method="POST">
        <label for="id">ID:</label>
        <input type="number" name="id" required><br>

        <input type="submit" value="Eliminar">
    </form>
</body>
</html>
