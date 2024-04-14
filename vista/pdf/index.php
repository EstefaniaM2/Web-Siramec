<?php
session_start();

require_once('pdf/vendor/autoload.php');

//plantilla index.php
require_once('plantilla/factura_plantilla.php');

//css de la plantila ^
$css = file_get_contents('plantilla/style.css');


//require_once('plantilla/listado.php');

$mPDF = new \Mpdf\Mpdf([
    "format" => "Letter"
]);

$plantilla  = getPlantilla();

$mPDF ->writehtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mPDF ->writehtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);

$guardar_fac = $_SESSION['crear_fac'];

$mPDF -> output("factura.fac_$guardar_fac.pdf","i"); //mostrar en pantalla
$mPDF -> output("files/fac_$guardar_fac.pdf","F"); //guardar en el servidor
//$mPDF -> output("vista.pdf","D");//descargar en pantalla


//............................parte para en enviar el correo..............................
use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ Exception ;

require  'PHPMailer/Exception.php' ;
require  'PHPMailer/PHPMailer.php' ;
require  'PHPMailer/SMTP.php' ;

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info.siramec@gmail.com';                     //SMTP username
    $mail->Password   = 'info_siramec123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients

    $correo=$_SESSION['email'];
    $nombre = $_SESSION['nombre'];

    $mail->setFrom('info.siramec@gmail.com', 'siramec');
    $mail->addAddress($correo);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "¡Hola $nombre !Tu factura de compra SIRAMEC";
    $mail->Body    = '¡Gracias por tu compra!</b>';
    $mail->Charset = 'UTF-8';
    $mail->addAttachment("files/fac_$guardar_fac.pdf");         //Add attachments


    $mail->send();
   // echo 'el mensaje se envio corectamente';
} catch (Exception $e) {
    //echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>