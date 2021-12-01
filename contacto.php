<?php
 
if($_POST) {
    $Nombre = "Nombre";
    $Apellido = "Apellido";
    $Correo = "Correo";
    $Telefono = "Telefono";
    $Cargo = "Cargo";
    $Ciudad = "Ciudad";
    $Servicios = "Servicios";
    $visitor_mensaje = "";


}
$conn = new mysqli('localhost','root','','formulariodb');
myspqli_query($conn,"SET CHARACTER SET 'utf8'");
myspqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
if($conn->connect_error){
    echo "$conn->connet_error";
    die("Connection failed : ". $conn->connect_error);
} else{
    $stmt = $conn->prepare("INSERT INTO bd (Nombre, Apellido, Correo, Telefono, Cargo, Servicios) Values(?,?,?,?,?,?,) ")
    $stmt->bind_param("sssisss", $Nombre, $Apellido, $Correo, $Telefono, $Ciudad, $Cargo, $Servicios)
    $execval = $stmt->execute();
    echo $execval;    
}
     
    if(isset($_POST['Nombre'])) {
      $Nombre = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['Apellido'])) {
        $vNombre = filter_var($_POST['Apellido'], FILTER_SANITIZE_STRING);
      }
      
    if(isset($_POST['Cargo'])) {
        $Nombre = filter_var($_POST['Cargo'], FILTER_SANITIZE_STRING);
      
    if(isset($_POST['Correo'])) {
        $Correo = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $Correo = filter_var($Correo, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['Telefono'])) {
        $Nombre = filter_var($_POST['Telefono'], FILTER_SANITIZE_STRING);
     
    if(isset($_POST['Servicios'])) {
        $Servicios = filter_var($_POST['Servicios'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_mensaje'])) {
        $visitor_mensaje = htmlspecialchars($_POST['visitor_mensaje']);
    }
     
    if($Servicios = "sostenibilidad") {
        $recipient = "upthinkconsultora@gmail.com";
    }
    else if($Servicios = "calidad") {
        $recipient = "upthinkconsultora@gmail.com";
    }
    else if($Servicios = "asesorias") {
        $recipient = "upthinkconsultora@gmail.com";
    }
    else {
        $recipient = "upthinkconsultora@gmail.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $visitor_mensaje, $headers)) {
        echo "<p> Gracias por ponerte en contacto con nosotros, $Nombre . nos contactaremos contigo en las siguientes 24 horas.</p>";
    } else {
        echo '<p>Lo sentimos pero el correo electrónico no fue recibido.</p>';
    }
     
} else {
    echo '<p>Ups! Algo salió mal</p>';
}
?>