<?php
include("conexion.php");
/*recuperar valores*/
$nombre=  $_POST["nombre"];
$apellidos=  $_POST["apellidos"];
$telefono= $_POST["telefono"];
$email= $_POST["email"];
$id_carrera=  $_POST["id_carrera"];
$id_escuela=  $_POST["id_escuela"];
$estado= $_POST["estado"];
$msj= $_POST["msj"];

$sql = "CALL sp_registro ('$nombre','$apellidos','$telefono','$email','$id_carrera','$id_escuela','$estado','$msj')";
if(mysqli_query($conexion, $sql)) {
  
    echo "<script>alert('Se han enviado tus datos, muy pronto te contactaremos')</script>";
    
} else {
    echo "<script>alert('Servicio no disponible')</script>";
}



?>