<?php
include("conexion.php");
/*recuperar valores*/
$id_proyectos=  $_POST["id_proyectos"];

$sql = "DELETE FROM `proyectos` WHERE `id_proyectos`='$id_proyectos'";
if(mysqli_query($conexion, $sql)) {
  
    echo "<script>alert('Se han enviado tus datos, muy pronto te contactaremos')</script>";
    
} else {
    echo "<script>alert('Servicio no disponible')</script>";
}



?>