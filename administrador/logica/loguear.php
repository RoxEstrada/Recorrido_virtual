<?php
require 'conexion.php';
error_reporting(0);
session_start();

$usuario = $_POST['unombre'];
$clave = $_POST['uclave'];

$query = "SELECT  clave FROM administrador WHERE usuario= '$usuario'AND clave ='$clave'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result, MYSQLI_NUM);

    if ($row[0] == $clave){
      $_SESSION ['username']= $usuario;
      header ('Location: ../principal_administrador.php');
    }   
    else{
      echo "<script>alert('Datos incorrectos')</script>";
        return false;
    }
?>