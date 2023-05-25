<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> INICIO</title>
</head>
<body>


    <body background="fondo2.jpeg" bgcolor="AFCHHA">    </body>


</body>

</html>


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