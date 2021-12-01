<?php
 
if($_POST) {
    $visitor_nombre = "";
    $visitor_apellido = "";
    $visitor_email = "";
    $visitor_servicios = "";
    $visitor_mensaje = "";
     
    if(isset($_POST['visitor_nombre'])) {
      $visitor_name = filter_var($_POST['visitor_nombre'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['visitor_apellido'])) {
        $visitor_name = filter_var($_POST['visitor_apellido'], FILTER_SANITIZE_STRING);
      }
       
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_servicios'])) {
        $visitor_servicios = filter_var($_POST['visitor_servicios'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_mensaje'])) {
        $visitor_mensaje = htmlspecialchars($_POST['visitor_mensaje']);
    }
     
    if($visitor_servicios = "sostenibilidad") {
        $recipient = "upthinkconsultora@gmail.com";
    }
    else if($visitor_servicios = "calidad") {
        $recipient = "upthinkconsultora@gmail.com";
    }
    else if($visitor_servicios = "asesorias") {
        $recipient = "upthinkconsultora@gmail.com";
    }
    else {
        $recipient = "upthinkconsultora@gmail.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $visitor_mensaje, $headers)) {
        echo "<p> Gracias por ponerte en contacto con nosotros, $visitor_nombre . nos contactaremos contigo en las siguientes 24 horas.</p>";
    } else {
        echo '<p>Lo sentimos pero el correo electrónico no fue recibido.</p>';
    }
     
} else {
    echo '<p>Ups! Algo salió mal</p>';
}
?>