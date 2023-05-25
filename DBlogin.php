<?php
	$server = 'localhost';
	$username = 'debar';
	$password = 'Starr';
	$database = 'login_base_de_datos';

	try {
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
    }catch(PDOException $e){
        die('Conexion fallida: '.$e->getMessage());

    }
?>
