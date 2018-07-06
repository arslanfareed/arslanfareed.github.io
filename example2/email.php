<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php 
	if($_POST['sendmessage'])
	{

 	  $to       =   "webstechnoo@gmail.com";
      $subject  =   $_POST['subject'];
      $message  =   $_POST['comment'];
      $name     =   $_POST['username'];
     
	
	  $mailsend =   mail($to,$subject,$message,$name);
      if($mailsend==1){
        echo '<h2>email sent.</h2>';
      }
      else{
        echo '<h2>There are some issue.</h2>';
      }

	}
?>

</body>
</html>