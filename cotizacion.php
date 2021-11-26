<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotización</title>
    <link rel="shortcut icon" type="image/x-icon" href="imagen/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
     <!--Bootstrap-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/normalize.css">
</head>
<body>
<?php
 $Servicio1="Construcción Sostenible";
 $Servicio2="Seguridad y Salud Ocupacional";
 $Servicio3="Calidad";
 $Servicio4="Tutoriales";
 $Servicio5="Asesoramiento Empresarial"
?>
    <header class="mt-0">
        <img src="Imagen/LOGO 2.1 recortado.png" class="round" alt="logo empresa" height="100px">
        <h1>Cotización Upthink Soluciones</h1>
        <nav class="navbar navbar-expand-sm bg-info navbar-dark">
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Pruebaclase.html">Contactos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index1.html">Otros tutoriales</a>
                </li>
              </ul>
            </div>
        </nav>
    </header>
    <section class="mt-0">
     <p class="ml-2">Completa la solicitud de cotización</p>
      <div class="row">
      </div>
        <div class="formulario">
         <form action="contacto.php" method="post"> 
          <label for="fname">Datos:</label><br>    
            <input class="form-control" id="Nombre" name="Nombre" placeholder="Nombre*" type="text" required/>
            <input class="form-control" id="Apellido" name="Apellido" placeholder="Apellido*" type="text" required/>
            <input class="form-control" id="Correo" name="Correo" placeholder="Correo Electrónico*" type="email" required/>
            <input class="form-control" id="Telefono" name="Telefono" placeholder="Teléfono*" type="number" required/>
            <input class="form-control" id="Cargo" name="Cargo" placeholder="Cargo*" type="text" required/>
            <select class="form-control" name="Ciudad" required>
                <option value="" disabled selected>Servicio</option>
                <option value="Santa Cruz">Construcción sostenible</option>
                <option value="La Paz">Seguridad y salud ocupacional</option>
                <option value="Cochabamba">Calidad</option>
                <option value="Tarija">Capacitaciones técnicas</option>
                <option value="Oruro">Asesoria empresarial</option>
            </select>
            <label>Mensaje</label>
            <textarea></textarea>
            <input type="submit" value="Enviar este formulario" />
         </form>
        </div>    
    </section>
   
  <footer class="mt-1 p-1 bg-dark text-white text-center">
      <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>© 2021 Upthink Soluciones, Yessenia Romero</p>    
          <ul class="nav col-md-7 justify-content-end list-unstyled d-flex">
              <div><a href="https://www.facebook.com/yessenia.r.gutierrez" target="_blank"><img class="img-responsive" src="Imagen/facebook.png" style="width:30px; margin: auto; display: block"></a>
              </div>
              <div><a href="https://wa.me/59175021623" target="_blank"><img class="img-responsive" src="Imagen/whatsapp.png" style="width:30px; margin: auto; display: block"></a>
              </div>
              <div><a href="https://www.instagram.com/yessys2/?hl=es" target="_blank"><img class="img-responsive" src="Imagen/instagram.png" style="width:30px; margin: auto; display: block"></a>
              </div>
              <div><a href="https://twitter.com/Yesseni51849122" target="_blank"><img class="img-responsive" src="Imagen/Twitter.png" style="width:30px; margin: auto; display: block"></a>
              </div>
          </ul> 
      </div>      
  </footer>   
</body>
</html>