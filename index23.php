
<!DOCTYPE html>
<html>
<body>
<?php $Servicio1="Construcción Sostenible";
  $Servicio2="Seguridad y Salud Ocupacional";
  $Servicio3="Calidad";
  $Servicio4="Tutoriales";
  $Servicio5="Asesoramiento Empresarial"
  ?>
<form action="contacto.php" method="post">
  <div class="elem-group">
    <label for="name">Nombre</label>
    <input type="text" id="name" name="visitor_name" placeholder="Pepito" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="pepito.p@gmail.com" required>
  </div>

     <div class="elem-group">
    <label for="title">Motivo de contacto</label>
    <input type="text" id="title" name="email_title" required placeholder="Solicitud de cotización personalizada" pattern=[A-Za-z0-9\s]{8,60}>
  </div>
  <div class="elem-group">
    <label for="message">Mensaje</label>
    <textarea id="message" name="visitor_message" placeholder="Escribe tu mensaje." required></textarea>
  </div>
  <button type="submit">Enviar mensaje</button>
</form>

</body>
</html>