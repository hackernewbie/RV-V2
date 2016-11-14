<?php
if($_POST["foo"]==''):/* if the input is not empty it means that a SPAM BOT filled up the entire form */
		
	/*$name=$_POST["first_name"];
	$email=$_POST["email"];
	$mobile=$POST["phone"];
	$message=$_POST["comment"];
	$recipient='rajiv@rajivverma.me';//$_POST["recipient"];
	//$recipient='rajiv@webguy.in';
	*/
	$name=$_GET["first_name"];
	$email=$_GET["email"];
	$mobile=$_GET["phone"];
	$message=$_GET["comment"];
	$recipient='rajiv@rajivverma.me';//$_POST["recipient"];
	
	if($name=='' || $email=='' || $message==''): echo '2'; exit(); endif; /* if some value is missing, return the error */
	
	/* remove this line */
	/*if($recipient==''): echo '1'; exit(); endif;*/
	/* end removable line */
	
	$date=date("d M Y - h:1 a");
	$mail=$recipient; /* change this variable with your email address */
	$header = "From: ".$name." <".$email.">" . "\r\n" . "Reply-To: ".$email."" . "\r\n" . "X-Mailer: PHP/" . phpversion();	
    $header .= "MIME-Version: 1.0\n";
	$header .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
	$header .= "Content-Transfer-Encoding: 7bit\n\n";
	$msg= '<html><body><strong>Name:</strong> '.$name.'<br /><br /><strong>Email:</strong> '.$email.'<br /><br /><strong>Message:</strong> '.nl2br($message).'<br /><br /><strong>Date:</strong> '.$date.'<br /><br /><br /><small><i>From - Your website</i></small></body></html>';
	if(@mail("$mail","Email from my website - Contact form",$msg,$header)): echo 'Sent'; else: echo 'Failed';		endif;/* check if the mail() function succeded */
	
else: echo '1'; endif;/* send a positive fake return if SPAM is detected */