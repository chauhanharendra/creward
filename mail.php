<?php
if($_POST['action_type']=='COMMENT_SECTION')
{
	$name		= $_POST['name'];
	$mobile		= $_POST['mobile'];
	$emailid	= $_POST['emailid'];
	$comment	= $_POST['comment'];
		
	$email='no_reply';
		
	$message = '<html><body>';

	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #eee;' ><td><strong>Name:</strong> </td><td>" . strip_tags($name) . "</td></tr>";
	$message .= "<tr style='background: #eee;' ><td><strong>Mobile:</strong> </td><td>" . strip_tags($mobile) . "</td></tr>";
	$message .= "<tr style='background: #eee;'><td><strong>Email Id:</strong> </td><td>" . strip_tags($emailid) . "</td></tr>";
	$message .= "<tr style='background: #eee;'><td><strong>Comment:</strong> </td><td>" . strip_tags($comment) . "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";
	
		
	$to			=	'goluchauhan1993@gmail.com';
	$cc_mail	=	'onnitsolution@gmail.com'; 
	
	$subject	=	'Enquery From Creward Website';
	$headers	=	"From: " . $email . "\r\n";
	$headers   .=	"Reply-To: ". strip_tags($email) . "\r\n";
	
	if($cc_mail!='')
	{
		$headers .= "CC: ".$cc_mail."\r\n";
	} 

	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	if(mail($to, $subject, $message, $headers))
	{
		echo 'SUCCESS';
		exit;
	}else{
		echo 'FAILED';
		exit;
	}
}
?>