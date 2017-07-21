<?php

require '../phpmailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$message = $_POST['comments'];



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

   $mail->Body = $message . " El número telefónico de " . $name . " es:  " . $telephone . " El email es:  " . $email;

    if (!$mail->send()) {
        header("location: ../index.php?error=error");
    } else {
        header("location: ../index.php?success=send");
    }

}else{
    header("location: ../index.php?errorCampos=error");    
}
?>