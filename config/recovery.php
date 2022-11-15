<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once ('config.php');
$email= $_POST['email'];
$query = "SELECT * FROM  usuarios WHERE correo = '$email' AND status = 1 ";
$result = $conexion->query($query);
$row = $result->fetch_assoc();


if($result->num_rows > 0){
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'davidarzapalo0223@outlook.com';                     //SMTP username
        $mail->Password   = 'Dav110223';                               //SMTP password
        $mail->Port       =  587;                                    
        $mail->setFrom('davidarzapalo0223@outlook.com', 'David');
        $mail->addAddress($email, 'correo de prueba');     
        $mail->isHTML(true);                                  
        $mail->Subject = 'recuperación de contraseña';
        $mail->Body    = 'Hola, este es un  correo generado para solicitar tu recuperacion de contraseña, por favor, visita la pagina de
        <a href="localhost/spending_tracker/change_password.php?id='.$row['id'].'">Recuperación de contraseña</a>';
      
    
        $mail->send();
        echo 'Message has been sent';
        header("location:../index.php?message=ok");
    } catch (Exception $e) {
        header("location:../index.php?message=error");
    }
  

}else{
header("location:../index.php?message=not_found");
}

?>