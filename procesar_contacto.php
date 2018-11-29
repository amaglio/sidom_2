 <?php

$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
// Check for empty fields
if(empty($_POST['nombre'])      ||
   empty($_POST['apellido'])     ||
   empty($_POST['email'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
     
    header("Location: ".$base_url."index.php");
}
else
{
    $nombre = strip_tags(htmlspecialchars($_POST['nombre']));
    $apellido = strip_tags(htmlspecialchars($_POST['apellido']));
    $email = strip_tags(htmlspecialchars($_POST['email']));

    require("./assets/PHPMailer-master/PHPMailerAutoload.php");
    $mail = new PHPMailer();

    //Luego tenemos que iniciar la validación por SMTP:
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.gmail.com";
    $mail->Username = "digipayargentina@gmail.com";
    $mail->Password = "digipay2016";
    $mail->Port = 465;



    $mail->From = "contacto@simdomweb.com.ar"; // Desde donde enviamos (Para mostrar)
    $mail->FromName = "Contacto";



    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->Subject = "SIDOM: Contacto WEB"; // Este es el titulo del email.

    $body = "<strong>Nombre: </strong>".$nombre."<br>";
    $body .= "<strong>Apellido: </strong>".$apellido."<br>";
    $body .= "<strong>Email: </strong>".$email."<br>";



    if(isset($_POST['telefono']))
    {
        $telefono = strip_tags(htmlspecialchars($_POST['telefono']));
        $body .= "<strong>Telefono: </strong>".$telefono."<br>";
    }

    if(isset($_POST['consulta']))
    {
        $consulta = strip_tags(htmlspecialchars($_POST['consulta']));
        $body .= "<strong>Consulta: </strong>".$consulta."<br>";
    }


    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == UPLOAD_ERR_OK)
    {
        
        $mail->AddAttachment($_FILES['cv']['tmp_name'],
                             $_FILES['cv']['name']);


        $mail->AddAddress("adrian.magliola@gmail.com");
        //$mail->AddAddress("cv@sidom.com.ar");

    }
    else
    {
        $mail->AddAddress("lindosugus@hotmail.com");
        //$mail->AddAddress("consultas@sidom.com.ar");
    }

    $mail->Body = $body;
    $exito = $mail->Send(); // Envía el correo.


    if($exito)
       header("Location: ".$base_url."contacto_enviado.php");
    else
       header("Location: ".$base_url."index.php");

}



//print json_encode($return);
?>