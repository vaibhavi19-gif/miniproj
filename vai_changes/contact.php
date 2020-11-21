<?php    
 
 use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $to = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $from = "vaibhavikundle20@gmail.com";
  $headers = "From: $from";

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();

  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "vaibhavikundle20@gmail.com";
  $mail->Password = "Gauri@2000";
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  $mail->isHTML(true);
  $mail->setFrom($email, $name);
  $mail->addAddress("vaibhavikundle20@gmail.com");
  $mail->Subject = ("$email($subject)");


  if($mail->send){
    $status = "success";
    $response = "Email is sent";
  }
  else{
    $status = "failed";
    $response = "Something is wrong: <br>". $mail->ErrorInfo;
  }

  exit(json_encode(array("status" => $status, "response" => $response)));



}



?>