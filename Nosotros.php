<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nosotros</title>
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" type="image/x-icon" href="imagen/favicon.ico">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="" async defer></script>    
</head>
<body>
<?php $Titulo = "Upthink Soluciones";
  $Secundario="Desarrollando ideas";
  $Propiedad="Yessenia Romero";
  $Mensaje_largo="Hola ";
  $Fecha1=date("Y");
  $Fecha2=date("Y/m/d");
  $Servicio1="Construcción Sostenible";
  $Servicio2="Seguridad y Salud Ocupacional";
  $Servicio3="Calidad";
  $Servicio4="Tutoriales";
  $Servicio5="Asesoramiento Empresarial"
  ?>
  <header class="main-header">
		<img class="logo" src="Imagen/LOGO 2.1 recortado.png">
		<h1 class="name"><?php echo $Titulo?>  <span><?php echo $Secundario?></span></h1>
    <nav class="nav"></nav>
      <ul>
        <a href="index.html">Inicio</a>
        <a href="Nosotros.php">Nosotros</a>
        <a href="pruebaclase.html">Contacto</a>
      </ul>
    </nav>     
  </header>
 
  <section>
    <h2>¿Quienes Somos?</h2>
    <p>Somos una organización de asistencia técnica conformado por un equipo de profesionales nacionales e internacionales trabajando en conjunto cuyo objetivo es satisfacer las necesidades de las empresas y trabajadores en cuestiones relativas a calidad, medio ambiente, inocuidad, energía, ISO/IEC 17025 seguridad y salud en el trabajo.
    <p>- Brinda asesoramiento técnico.</p>
    <p>- Gestiona talleres de capacitación específicos de acuerdo a las necesidades de la empresa.</p>
    <h2>Apoyo Empresarial</h2>
    <p>Componentes para la implementación y mejora de los programas de seguridad y salud en el trabajo, mapas de riesgos y otros. Desarrollar, implementar o mejorar la gestión interna, auditorías, asesorías ISO 9001:2015, ISO 450001:2018, ISO 17025:2018, ISO 22000:2018, ISO 5000a la implementación de sistemas de gestión.</p>
    <h2>¿Qué servicio prestamos?</h2>
    <p>Implementación y componentes de mejoras a los programas de seguridad y salud en el trabajo, mapa de riesgos. Desarrollar, implementar o mejorar la gestión interna, auditorías, asesorias a la implementación de sistemas de gestión. ISO 9001:2015, ISO 17025, ISO 22000:2005.
    </p>
  </section>
  <div class="container clearfix">
    <div class="photo-container">
      <img src="Imagen/Foto1.png">
      <h3><?php echo $Servicio1?></h3>
      <p>Consultorias de Medio Ambiente</p>
      <a href="#" class="photo-container-button">descargar imagen</a>
    </div>
    <div class="photo-container">
      <img src="Imagen/Seguridad.jpg">
      <h3><?php echo $Servicio2?></h3>
      <p>Consultorias de Seguridad y Salud Ocupacional</p>
      <a href="#" class="photo-container-button">descargar imagen</a>
    </div>
    <div class="photo-container">
      <img src="Imagen/certif-final.png">
      <h3><?php echo $Servicio3?></h3>
      <p>Consultorias de Sistema de gestión de Calidad</p>
      <a href="#" class="photo-container-button">descargar imagen</a>
    </div>
    <div class="photo-container">
      <img src="Imagen/formacion-para-emprendedores.jpg">
      <h3>Tutoriales</h3>
      <p>Introducción a bootstrap</p>
      <a href="index1.html" class="photo-container-button">ir a</a>
    </div>
    <div class="photo-container">
      <img src="imagen/6-Post-RRSS-1024x1024.png">
      <h3><?php echo $Servicio5?></h3>
      <p>Asesoramiento empresarial, tutorías e información destinados a ayudar a los pequeños y microempresarios a mejorar el desempeño de sus empresas.</p>
      <a href="#" class="photo-container-button">descargar imagen</a>
    </div>
    <div class="photo-container">
      <h3>Cotiza tu servicio de capacitación</h3>
      <?php  
      for ($x=350, $y=1; $y<=10; $x+=300, $y+=1) {
        echo "Precios por $y horas de capacitación: $x <br>";
      }
      
      ?>  
      <?php
      function mul(int $x, int $y){
      $z = $x*$y;
      return $z;}
      ?>

      <p>Los grupos de capacitación es para un máximo de 15 personas.</p>
      <a href="cotizacion.php" class="photo-container-button">solicitud de cotización</a>
    </div>
  </div>
    <footer><p><i>© <?php echo $Fecha1 . "<b>" . $Titulo . ",". $Propiedad?></i></p> 
    <?php echo $Fecha2?>
        </footer>
</body>
</html>