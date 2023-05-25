<?php

include 'DBlogin.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado';
    } else {
      $message = 'No se pudo crear usuario';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="shortcut icon" href="#">
    <!-- ↓↓↓↓ link para agregar el estilo de bootstrap ↓↓↓↓ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>
  <body>
  <body background="fondo2.jpeg" bgcolor="AFCHHA">    </body>
    <div class="container mt-2">
        <div class="raw">
        <div class="col-6">

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>


    <form action="signup.php" method="POST">
    <div class="card">
            <div class="card-header bg-secondary text-light">
    <h1>Crear cuenta</h1>
            </div>
    <div class="card-body bg-light">
    <div class="form-group row">
    <span>o <a href="index.php">Iniciar sesion</a></span>
    <label for="mail" class="col-sm-2 col-form-label"><p class="text-dark">Usuario</p></label>
    <div class="col-sm-10">
    <input name="email" type="text" placeholder="ingresa tu usuario"class="form-control">
    </div>
    </div>
    <div class="form-group row"<span class="border border-primary"></span>
                <label for="password" class="col-sm-2 col-form-label"> <p class="text-dark">Contraseña</p></label>
                <div class="col-sm-10">
     <input name="password" type="password" placeholder="ingresa tu contraseña" class="form-control">
     </div>
      <button type="submit" class="btn btn-primary">Crear cuenta</button>
                <p>

                </p>
      
    </form>

  </body>
</html>