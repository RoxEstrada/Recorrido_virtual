<?php 
require_once("conexion.php");
if (empty ($_POST['nombre']) || empty($_POST['descripcion'])){
    
}else{
    $nombre= $_POST['nombre'];
    $descripcion= $_POST['descripcion'];
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $id_carrera=  $_POST["id_carrera"];
    $query="INSERT INTO `proyectos`(`nombre_proyecto`, `descripcion`, `imagen`, `id_carrera`) VALUES ('$nombre','$descripcion','$imagen','$id_carrera')";
    $resultado = $conexion->query($query);
    if($resultado){
        echo "<script>alert('Se ha agregado el proyecto correctamente')</script>";
    }else{
        echo "<script>alert('No se han insertado')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Proyectos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../build/css/css_admin/app_menu.css">
    <link rel="stylesheet" type="text/css" href="../../build/css/css_admin/estilosec.css">
    <link rel="stylesheet" href="../../build/css/css_admin/estilo_footer.css">
    <link rel="stylesheet" href="../../build/css/css_admin/estilos_formu.css">
	
    <style>
      .containerr {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        width: 100%;
      }
      input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 10px;
        left: 8px;
        font-size: 17px;
        color: #b8b8b8;
      }
      .button-wrap {
        position: relative;
      }
      .button {
        display: inline-block;
        padding: 12px 171px;
        border-radius: 5px;
        background-color: #a8a8a8;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
      }
    </style>
</head>
<body>
<header class="header">
        <div class="contenedor contenido-header">
            <h1>Universidad Tecnológica del Valle del Mezquital</h1>
            <nav class="navegacion-principal">
                <a href="../principal_administrador.php">Volver a sección aspirantes</a>
            </nav>

           
        </div>
    </header>
    <div class="contact_form">
		<div class="formulario">
<h1>Agregar Proyectos</h1>
<form method="POST" enctype="multipart/form-data">
    <h3>Ingrese los datos correspodescripcionndientes</h3>

    <p>
    <label for="nombre" class="colocar_nombre">Nombre del proyecto 
    <span class="obligatorio">*</span></label>
    <input type="text" name="nombre" required="obligatorio"  placeholder="Ingresa el nombre del proyecto"><br><br>
    </p>
<p>
    <label for="nombre" class="colocar_descripción">Descripción 
    <span class="obligatorio"></label>
    <input type="text" name="descripcion" required="obligatorio"   placeholder="Ingresa una descripción">
    </p>
   
    <label for="nombre" class="colocar_descripción">Fotografia 
    <span class="obligatorio"></label>
<div class="containerr">
      <div class="button-wrap">
        <label class="button" for="upload">Foto</label>
        <input type="file" id="upload" name="imagen">
      </div>
    </div> 



    <p>
    <label for="carrera" class="colocar_carrera">Carrera
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
   
<button type="submit" name="Guardar"><p>Enviar datos</p></button>

<nav class="navegacion-principall">
        <button type="submit" name="Consultar" ><p><a  href="index.php" >Consultar </a></p></button>
        <button type="submit" name="Editar" ><p><a  href="actualizar.php" >Actualizar </a></p></button>
        <button type="submit" name="Actualizar" ><p><a  href="eliminar.php" >Eliminar </a></p></button>


    </nav>
       
       
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
                            <h3>Dirección UAT</h3>
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
                    <p>© Elaborado por: </p>
                </div>
                <div class="col-md-6 footer-bottom-right">
                    <p>Roxana Estrada, Dulce Reyes y Leslie Gress 5M TI <a href="http://www.utvm.edu.mx/" target="_blank">Utvm</a>  </p>
                </div>
            </div>
        </div>
    </section>
<div style="text-align:right;position:fixed;z-index:9999999;bottom:0;width:auto;right:1%;cursor:pointer;line-height:0;display:block!important"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&&0<notification.length&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 1;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 50%; margin-left: 45%;}} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); width: 264px; border: 0; border-radius: 3px; background-color: #FF5C62 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Claim Deal</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Black Friday",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700;');var h2Tag=document.createElement("H2");h2Tag.innerHTML="Up to 90% off 4-year hosting plans + free domain, SSL & DDoS protection",h2Tag.setAttribute("style",'color: white; margin: 10px 0 15px 0; font-family: "Roboto", sans-serif; font-size: 16px; font-weight: 400; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="$<span style='font-size: 80px;'>2.49</span>/mo",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 48px; font-weight: 700; margin: 0;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/bf-2022-bottom-banner.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}</script></body>
</html>