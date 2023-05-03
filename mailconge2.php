<?php
require_once '../Model/conge.php';
require_once '../Controller/congeC.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';
session_start();
if(isset($_GET["id"]))
{
$congeC= new congeC();
$list=$congeC-> findconge2($_GET["id"]);
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'syrinebznamara8@gmail.com';
    $mail->Password = 'mxjfeecvmjckyajl';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('syrinebznamara8@gmail.com');
    $mail->addAddress('syrine.benamara@esprit.tn');
    $mail->isHTML(true);
    $mail->Subject = 'conge';
    $mail->Body = 'votre demande du conge de ' .$list["date_debut"]. ' à ' .$list["date_fin"]. ' a ete refuseé';
    $mail->send();
    $mail->SMTPDebug = 2;
    echo "Mail envoyé";
    header('location: listconge.php');
}
   ?>