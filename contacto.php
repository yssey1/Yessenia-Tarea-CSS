<?php

    if(isset($_POST['Nombre'])) {
      $Nombre = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['Apellido'])) {
        $vNombre = filter_var($_POST['Apellido'], FILTER_SANITIZE_STRING);
    }
      
    if(isset($_POST['Cargo'])) {
        $Nombre = filter_var($_POST['Cargo'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['Correo'])) {
        $Correo = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['Correo']);
        $Correo = filter_var($Correo, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['Telefono'])) {
        $Nombre = filter_var($_POST['Telefono'], FILTER_SANITIZE_STRING);
    }

    //if(isset($_POST['Servicios'])) {
        //$Servicios = filter_var($_POST['Servicios'], FILTER_SANITIZE_STRING);}
    
    if(isset($_POST['Ciudad'])) {
        $Ciudad = filter_var($_POST['Ciudad'], FILTER_SANITIZE_STRING);
    }
     
    //if(isset($_POST['Mensaje'])) {
        //$Mensaje = htmlspecialchars($_POST['Mensaje']);}
    {
    $Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$Correo = $_POST['Correo'];
	$Telefono = $_POST['Telefono'];
    $Cargo = $_POST["Cargo"];
	$Ciudad = $_POST['Ciudad'];
	 //$Servicios = "Servicios";
    //$Mensaje = "Mensaje";
    }

    $conn = new mysqli('localhost','root','','formulariodb');
    mysqli_query($conn,"SET CHARACTER SET 'utf8'");
    mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } else {
            $stmt = $conn->prepare("INSERT INTO registro_datos (Nombre, Apellido, Correo, Telefono, Cargo, Ciudad) values(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssiss", $Nombre, $Apellido, $Correo, $Telefono, $Cargo, $Ciudad);
            $execval = $stmt->execute();
            echo $execval;    
    		
            $stmt->close();
            $conn->close();
        }
    if($Servicios = "Servicios") {
        $recipient = "upthinkconsultora@gmail.com";}
    /*else if($Servicios = "calidad") {
        $recipient = "upthinkconsultora@gmail.com"; }
    else if($Servicios = "asesorias") {
        $recipient = "upthinkconsultora@gmail.com"; }
    else {
        $recipient = "upthinkconsultora@gmail.com";  }*/
    
    //$sendTo = "upthinkconsultora@gmail.com";
    $subject = "Mensaje Web";    
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $Correo . "\r\n";
     
    if(mail($recipient, $Mensaje, $headers)) {
        echo "<p> Gracias por ponerte en contacto con nosotros, $Nombre . nos contactaremos contigo en las siguientes 24 horas.</p>";
    } else {
        echo '<p>Lo sentimos pero el correo electrónico no fue recibido.</p>'; '<p>Ups! Algo salió mal</p>';
}
?>