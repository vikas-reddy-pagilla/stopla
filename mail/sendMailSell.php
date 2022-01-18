<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
header('Content-Type: application/json');

$reponse="";
$responses="";

if(isset($_POST['name']) && isset($_POST['number'])){
    
    try{
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port= 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@stopla.in';
    $mail->Password = 'H4m^y&Z+1';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->setFrom('noreply@stopla.in', 'Stopla');    // Add a recipient
    $mail->addAddress('support@stopla.in');

    $mail->isHTML(true);
    $mail->Subject = "Mail from Sell page";
    $mail->Body = '<h1> Name: '.$_POST['name']. '<br/> Email: '. $_POST['email'] . '<br/> Number: ' .$_POST['number']. '<br/> Crops: '. $_POST['crops']. '<br/> Pincode: '. $_POST['pincode'].'<br/> Address: '. $_POST['address']. '</h1>'; 
    
    $mail->send();
    $reponse = true;
    } catch(Exception $e){
      $reponse = false;
    }
  }
  try{
        
    $mailToCustomer = new PHPMailer(true);

    $mailToCustomer->isSMTP();
    $mailToCustomer->SMTPDebug = 0;
    $mailToCustomer->Host = 'smtp.hostinger.com';
    $mailToCustomer->Port= 587;
    $mailToCustomer->SMTPAuth = true;
    $mailToCustomer->Username = 'noreply@stopla.in';
    $mailToCustomer->Password = 'H4m^y&Z+1';
    $mailToCustomer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mailToCustomer->setFrom('noreply@stopla.in', 'Stopla');    // Add a recipient
    $mailToCustomer->addAddress($_POST['email']);

    $mailToCustomer->isHTML(true);
    $mailToCustomer->Subject = "Thank you for your Interest";
    $mailToCustomer->Body = '<h1>Hi '.$_POST['name'].'</h1> <h2>Thank you for your interest, we will get back to you shortly. </h2>'; 
    
    $mailToCustomer->send();
    $reponses = true;
    } catch(Exception $e){
      $reponses = false;
    }

  exit(json_encode($reponse));

?>