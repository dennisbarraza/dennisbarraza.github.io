<?php
  if (!empty($_POST['shaone']) && !empty($_POST['HASH']) && !empty($_POST['MD5'])) 
  {
    $cha1 =$_POST['shaone'];
    $JACHAS = $_POST['HASH'];
    $EMEDE5 = $_POST['MD5'];
    echo  ("Datos de SHA1 de $cha1 es: ");
    echo (sha1($cha1));
    echo ("<br><br>");
    echo  ("Datos de HASH de $JACHAS es: ");
    echo (hash('ripemd160','$JACHAS'));
    echo ("<br><br>");
    echo  ("Datos de MD5 de $EMEDE5 es: ");
    echo (md5($EMEDE5));
    echo ("<br><br>");
  

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funciones Hash</title>
    <link rel="shortcut icon" href="#">
    <!-- ↓↓↓↓ link para agregar el estilo de bootstrap ↓↓↓↓ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>


    <body background="fondo2.jpeg" bgcolor="AFCHHA">    </body>
    <font size=25 color="white">**** Iniciaste sesion correctamente ****</font>
   
    <form action="index3.php" method="POST">
          <div class="card">
            <div class="card-header bg-secondary text-light">
              <h1 class="text-hide">Funciones Hash</h1>
            </div>
            <div class="card-body bg-light">
              <div class="form-group row">
                <label for="SHA1" class="col-sm-2 col-form-label"><p class="text-dark">Funcion SHA1: </p></label>
                <div class="col-sm-10">
                  <input type="text"name="shaone" placeholder="Metodo sha1" class="form-control" >
                </div>

              </div>
              <div class="form-group row"<span class="border border-primary"></span>
                <label for="HASH" class="col-sm-2 col-form-label"> <p class="text-dark">Funcion HASH</p></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="HASH" placeholder="Metodo HASH">
                </div>
                <div class="form-group row"<span class="border border-primary"></span>
                <label for="MD5" class="col-sm-2 col-form-label"> <p class="text-dark">Funcion MD5</p></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="MD5" placeholder="Metodo MD5">
                </div>
                <button type="submit" class="btn btn-primary">HASH</button>
               
              </div>
              </div>
            </form>
           
            </div>
          </div>
        
       
        
          
            
      </div>

    



</body>

</html>
