 <?php

/*
// Check for empty fields
if(empty($_POST['nombre'])      ||
   empty($_POST['email'])     ||
   empty($_POST['asunto'])     ||
   empty($_POST['mensaje'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
      //echo "No arguments Provided!";
      $return["error"] = true;
   }*/
   
$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
$apellido = strip_tags(htmlspecialchars($_POST['apellido']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$telefono = strip_tags(htmlspecialchars($_POST['telefono']));
$consulta = strip_tags(htmlspecialchars($_POST['consulta'])); 
 


require("../PHPMailer-master/PHPMailerAutoload.php");
$mail = new PHPMailer();

//Luego tenemos que iniciar la validación por SMTP:
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";  
$mail->Username = "digipayargentina@gmail.com";  
$mail->Password = "digipay2016"; 
$mail->Port = 465;  

/*$mail->Host = "mail.beex.com.ar";  
$mail->Username = "info@beex.com.ar";  
$mail->Password = "Finanzas2018"; 
$mail->Port = 587;  
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";*/

// $mail->Host = "ci1.toservers.com";  
// $mail->Username = "hgdoro@ilh-research.com";  
// $mail->Password = "WuG9VvSBj4"; 
// $mail->Port = 465;  


$mail->From = "info@beex.com.ar"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "info";

//Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
//$mail->AddAddress("nyndecoratuvida@gmail.com ");
$mail->AddAddress("adrian.magliola@gmail.com");
//$mail->AddAddress("info@beex.com.ar");
 
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = "Beex: Contacto WEB"; // Este es el titulo del email.

$body = "<strong>Nombre: </strong>".$nombre."<br>";
$body = "<strong>Apellido: </strong>".$apellido."<br>";
$body .= "<strong>Email: </strong>".$email."<br>";
$body .= "<strong>Email: </strong>".$telefono."<br>";

if(isset($consulta))
   $body .= "<strong>Consulta: </strong>".$consulta."<br>";
 

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


$mail->Body = $body;  
$exito = $mail->Send(); // Envía el correo.

//También podríamos agregar simples verificaciones para saber si se envió:
if($exito){
   //$resultado = "El correo fue enviado correctamente, el mismo será respondido a la brevedad. <br> Muchas gracias por su consulta.";
   $return["error"] = false;
}else{
   //$resultado = "Hubo un inconveniente. Por favor, intentá nuevamente o escribrinos a nuestro email: <b> nyndecoratuvida@gmail.com  </b> <br> Muchas gracias por su consulta.";
   $return["error"] = true;
}
 
print json_encode($return);   
?>