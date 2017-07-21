<?php

require '../phpmailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['phoneNumber'];
$message = $_POST['comments'];
$date = $_POST["date"];
$numerPer12 = $_POST["numberPerson12"];
$numerPer18 = $_POST["numberPerson18"];
$pay = $_POST["pay"];


if (strlen($name) > 0 && strlen($email) > 0 &&
        strlen($telephone) > 0 && strlen($message) > 0) {

    /* Don't touch */
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "relay-hosting.secureserver.net";
    $mail->SMTPAuth = false;
    $mail->setFrom($email, $name);
    /* end */

    /* Configure the address the email will be sent to */
    $mail->addAddress('Info@quesoschaudron.com', 'LeChaudron');
    $mail->Subject = 'Consulta de: ' . $name;
    /* This is forwarded through a GoDaddy forwarding account */

   $mail->Body = $message . "Solicitud excursión de " . $name . " para el día " . $date . 
           " el número de teléfono es " . $telephone . " el correo electrónico es " . $email .
           " cantidad de personas 12 años " . $numerPer12 . " cantidad de personas 18 " . 
           $numerPer18 . " la forma de pago será " . $pay . ". " . $message;

    if (!$mail->send()) {
        header("location: ../index.php?error=error");
    } else {
        header("location: ../index.php?success=send");
    }

}else{
    header("location: ../index.php?errorCampos=error");    
}
?>