<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
    /*
	Author: Shahid Shaikh
	Blog  : http://codeforgeek.com
    */
	require_once('D:\xampp\htdocs\PHPMailer-master\class.phpmailer.php');
       function sendmail($to,$subject,$message,$name)
    {
                  $mail             = new PHPMailer();
                  $body             = $message;
                  $mail->IsSMTP();
                  $mail->Host       = "smtp.gmail.com";                  
                  $mail->SMTPAuth   = true;
                  $mail->Host       = "smtp.gmail.com";
                  $mail->Port       = 587;
                  $mail->Username   = "youraccount@gmail.com";
                  $mail->Password   = "your gmail password";
                  $mail->SMTPSecure = 'tls';
                  $mail->SetFrom('youraccount@gmail.com', 'Your name');
                  $mail->AddReplyTo("youraccount@gmail.com","Your name");
                  $mail->Subject    = $subject;
                  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
                  $mail->MsgHTML($body);
                  $address = $to;
                  $mail->AddAddress($address, $name);
                  if(!$mail->Send()) {
                      return 0;
                  } else {
                        return 1;
                  }
    }
?>

</body>
</html>