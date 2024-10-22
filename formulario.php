<?php 
include("formulario_conexion/conexion.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario de contacto</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="build/css/css_formulario/estilos_formu.css">
	<link rel="stylesheet" href="build/css/css_formulario/app_menu.css">
    <link rel="stylesheet" type="text/css" href="build/css/css_formulario/estilosec.css">
    <link rel="stylesheet" href="build/css/css_formulario/estilo_footer.css">


  
  </head>


<body>	
     
    <header class="header">
        <div class="contenedor contenido-header">
            <h1>Universidad Tecnológica del Valle del Mezquital</h1>

            <nav class="navegacion-principal">
                <a  href="index.html" >Volver al Inicio </a>
                
                
            </nav>
        </div>
    </header>
  
  <!-- formulario de contacto en html y css -->  

	<div class="contact_form">

		<div class="formulario">			
      <h1>Contáctanos</h1>
				<h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>


                <form action="formulario_conexion/recorrido.php" method="post">				

						
<p>
    <label for="nombre" class="colocar_nombre">Nombres
        <span class="obligatorio">*</span>
    </label>
        <input type="text" name="nombre"  required="obligatorio"  required pattern="[A-Za-z]+" placeholder="Ingresa tu nombre">
</p>

<p>
    <label for="nombre" class="colocar_apellidos">Apellidos
        <span class="obligatorio">*</span>
    </label>
        <input type="text" name="apellidos"  required="obligatorio"   placeholder="Ingresa tus apellidos">
</p>

<p>
    <label for="telefono" class="colocar_telefono">Teléfono
        <span class="obligatorio">*</span>
    </label>
        <input type="text" name="telefono" required="obligatorio" placeholder="Ingresa tu teléfono">
</p>		

<p>
    <label for="email" class="colocar_email">Correo Electrónico
        <span class="obligatorio">*</span>
    </label>
        <input type="email" name="email" required="obligatorio" placeholder="Ejemplo@gmail.com">
</p>
<p>
    <label for="carrera" class="colocar_carrera">Carrera de tu interes
        <span class="obligatorio">*</span>
    
    <select name="id_carrera"  required="obligatorio"  class="select-css">
    <option value="0" selected>Seleccione:</option> 
    <?php
$id_carrera="SELECT*FROM carrera";
$resultado=mysqli_query($conexion,$id_carrera);
while($valores=mysqli_fetch_array($resultado)){

?>
 <option value="<?php echo $valores['id_carrera'];?>"><?php echo $valores['Nombre_carrera']; ?></option>
 <?php
  }
 ?>
    </select>							
    </label>
</p>

<p>
    <label for="escuela" class="colocar_escuela">Escuela de procedencia
        <span class="obligatorio">*</span>
        <select name="id_escuela" required="obligatorio"  class="select-css">
   <option value="0" selected>Seleccione:</option> 
   
             <?php
$id_escuela="SELECT * FROM escuela_procedencia";
$resultado= mysqli_query($conexion,$id_escuela);
while($valores= mysqli_fetch_array($resultado)){
    ?>
    <option value="<?php echo $valores['id_escuela'];?>"><?php echo $valores['Nombre_esc']; ?></option>
    <?php
}
?>
    </select>
    </label>
        
    
</p>		

<p>
    <label for="estado" class="colocar_estado">Estado en el que resides actualmente
        <span class="obligatorio">*</span>
    </label>
        <input type="text" name="estado" required="obligatorio"  required pattern="[A-Za-z]+" placeholder="Ingresa tu estado">
</p>		

<p>
    <label for="mensaje" class="colocar_mensaje">Mensaje
        <span class="obligatorio">*</span>
    </label>                     
         <textarea name="msj" class="texto_mensaje"  required="obligatorio"  required pattern="[A-Za-z]+" placeholder="Deja aquí tu mensaje y pronto te contactaremos..."></textarea> 
   </p>	  								

<button type="submit" name="enviar_formulario" ><p>Enviar</p></button>

<p class="aviso">
    <span class="obligatorio"> * </span>Los campos son obligatorios.
</p>					

</form>
</div>	
</div>

<section class="footer-section">
        <div class="container">
            <div class="row footer-section-row">
                <div class="col-md-4">
                    <div class="address">
                        <div class="left-icon">
                        </div>
                        <div class="right-text">
                            <h3>Direccion UAT</h3>
                            <p>Carr. Tezontepec - Santa María Batha Col. La Palma de Tezontepec de Aldama, Hidalgo C.P 42763 a lado del Balneario "Huemac".</p>
                            <p>Horarios de atención: Lunes a Viernes 9am a 4pm. En servicios escolares edificio D</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address">
                        <div class="left-icon">
                        </div>
                        <div class="right-text">
                            <h3>Correos</h3>
                            <p>scaballero@utvm.edu.mx</p>
							<p>dortizb@utvm.edu.mx</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address">
                        <div class="left-icon">
                        </div>
                        <div class="right-text">
                            <h3>Teléfonos de atención</h3>
                            <p>Tel: 7637375876  /</p>
                            <p>7721672287</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3 class="footer-title"><span class="footer-title-text">Redes sociales</span><span class="footer-title-underline"></span></h3>
                    <ul class="quick-link-list">
						<li><a href="https://m.facebook.com/UTVM-Oficial-618029458232311/" target="_blank"> Facebook</a></li>
                        <li><a href="https://twitter.com/UTVMoficial" target="_blank"> Twitter</a></li>
                        <li><a href="http://www.utvm.edu.mx/" target="_blank"> Página Oficial UTVM</a></li>
                    </ul>
					<div id="social">
                        <a class="facebookBtn smGlobalBtn" href="https://m.facebook.com/UTVM-Oficial-618029458232311/" target="_blank"></a>
                        <a class="twitterBtn smGlobalBtn" href="https://twitter.com/UTVMoficial" target="_blank"></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title"><span class="footer-title-text">Ligas de interes</span><span class="footer-title-underline"></span></h3>
                    <ul class="quick-link-list">
                        <li><a href="http://www.utvm.edu.mx/?page_id=689" target="_blank"> Becas</a></li>
                        <li><a href="http://www.utvm.edu.mx/?page_id=745" target="_blank"> Estadías</a></li>
                        <li><a href="http://www.utvm.edu.mx/?page_id=735" target="_blank"> Bolsa de trabajo</a></li>
                    </ul>
                </div>
				<div class="col-md-3">
                    <h3 class="footer-title"><span class="footer-title-text" >Ubicación</span><span class="footer-title-underline"></span></h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910873.157223345!2d-100.27720386590649!3d20.703152262731763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3d6b7864aa9c7%3A0xb4d475fcf3142602!2sUnidad%20Acad%C3%A9mica%20Tezontepec%20UTVM!5e0!3m2!1ses!2smx!4v1665446830790!5m2!1ses!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
              
                </div>
            </div>
        </div>
    </section>
    <section class="footer-section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-bottom-left">
                    <p>© Derechos Reservados </p>
                </div>
                <div class="col-md-6 footer-bottom-right">
                    <p>Universidad Tecnológica del Valle del Mezquital  <a href="http://www.utvm.edu.mx/" target="_blank">Utvm</a>  </p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
