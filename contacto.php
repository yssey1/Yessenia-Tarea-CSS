<?php
 
if($_POST) {
    $visitor_nombre = "";
    $visitor_apellido = "";
    $visitor_email = "";
    $email_title = "";
    $concerned_department = "";
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
     
    if(isset($_POST['concerned_department'])) {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_mensaje'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
     
    if($concerned_department == "sostenibilidad") {
        $recipient = "servicios@domain.com";
    }
    else if($concerned_department == "calidad") {
        $recipient = "servicios@domain.com";
    }
    else if($concerned_department == "asesorias") {
        $recipient = "asesorias@domain.com";
    }
    else {
        $recipient = "contact@domain.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $email_title, $visitor_message, $headers)) {
        echo "<p>Gracias por ponerte en contacto con nosotros, $visitor_name . Nosotros nos contactaremos contigo en las siguientes 24 horas.</p>";
    } else {
        echo '<p>Lo sentimos pero el correo electrónico no fue recibido.</p>';
    }
     
} else {
    echo '<p>Ups! Algo salió mal</p>';
}
 
?>