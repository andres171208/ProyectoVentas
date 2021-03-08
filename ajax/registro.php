<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

$idusuario=$_POST['idusuario'];
$nombre=$_POST['nombre'];
$tipo_documento=$_POST['tipo_documento'];
$num_documento=$_POST['num_documento'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$login=$_POST['login'];
$clave=$_POST['clave'];


// Encriptar contraseña
                include '../modelos/Clave.php';
                $clavehash = Clave::encriptar($clave);
$sql="INSERT INTO usuario (nombre,tipo_documento,num_documento,telefono,email,login,clave,condicion)
		VALUES ('$nombre','$tipo_documento','$num_documento','$telefono','$email','$login','$clavehash','1')";

     $ejecutar = mysqli_query($conexion,$sql);
     
     header('Location: ../vistas/login.php');
    
     
?>
