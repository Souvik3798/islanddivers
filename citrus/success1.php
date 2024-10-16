<?php
require_once "../mailcheck/PHPMailerAutoload.php";
$mysqli = mysqli_connect("localhost","thedencorbett","thedencorbett@123","thedencorbett");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
date_default_timezone_set("Asia/Calcutta");
$txnstatus = 'SUCCESS';
$citrus_bid = 'DEN2001211579591148';
if (!empty($citrus_bid) && $txnstatus == 'SUCCESS') {
	$update = mysqli_query($mysqli, "UPDATE `query-form` SET `status`='1',`time`='".date('Y-m-d H:i:s')."' where `booking_id`='$citrus_bid' ");
	if($update){
		$result = mysqli_fetch_array(mysqli_query($mysqli, "SELECT * FROM `query-form` WHERE booking_id = '$citrus_bid' "));
		$Amount		= $result['Amount'];
		$Message	= $result['Message'];
		$Name		= $result['Name'];
		$Phone		= $result['Phone'];
		$EmailId	= $result['EmailId'];
		/*$Refname	= $result['Refname'];
		$voucherid	= $result['voucherid'];*/
		
		
		$sheaders  = "From: ".$Name." <".$EmailId."> \r\n";
		$sheaders .= "MIME-Version: 1.0\r\n";
		$sheaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		echo $email_content='<div style="border:3px solid 98bc6c; width:80%;display:block;margin: 0px auto;">
		<div><span style="color:#00BAF2;font-size:20pt;border:3px solid 98bc6c;">Payment from The Den Corbett</span> 
		<table>
			<tr><td>Name</td><td>'.$Name.'</td></tr>
			<tr><td>Phone</td><td>'.$Phone.'</td></tr>
			<tr><td>Email Id</td><td>'.$EmailId.'</td></tr>
			<tr><td>Payment Gateway Id</td><td>'.$booking_id.'</td></tr>
			<tr><td>Amount</td><td>'.$Amount.'</td></tr>
			<!--<tr><td>Reference Person Name</td><td>'.$Refname.'</td></tr>
			<tr><td>Voucher Id</td><td>'.$voucherid.'</td></tr>-->
			<tr><td>Message</td><td>'.$Message.'</td></tr>
		</table>Regards<br/><a href="http://thedencorbett.in/">The Den Corbett</a> 
		</div></div>';
		// mail("shweta@asiatech.in", "Payment from The Den corbett ".$citrus_bid, $email_content, $sheaders);
		
		// $sendto		= 'shweta@asiatech.in';
		// $subject	= "Payment from The Den corbett ".$citrus_bid;
		// $maildata	= '<div style="border:3px solid 98bc6c; width:80%;display:block;margin: 0px auto;">
		// <div><span style="color:#00BAF2;font-size:20pt;border:3px solid 98bc6c;">Payment from The Den Corbett</span>Regards<br/><a href="http://thedencorbett.in/">The Den Corbett</a>  
		// <table>
			// <tr><td>Name</td><td>'.$Name.'</td></tr>
			// <tr><td>Phone</td><td>'.$Phone.'</td></tr>
			// <tr><td>Email Id</td><td>'.$EmailId.'</td></tr>
			// <tr><td>Payment Gateway Id</td><td>'.$booking_id.'</td></tr>
			// <tr><td>Amount</td><td>'.$Amount.'</td></tr>
			// <!--<tr><td>Reference Person Name</td><td>'.$Refname.'</td></tr>
			// <tr><td>Voucher Id</td><td>'.$voucherid.'</td></tr>-->
			// <tr><td>Message</td><td>'.$Message.'</td></tr>
		// </table>
		// </div></div>';
		// $sendname	= 'The Den Corbett';
		// $Host		= 'smtp.gmail.com';
		// $un			= 'reservations@asiatech.in';
		// $pass		= 'asiatech@1234';
		// $mail = new PHPMailer(); // create a new object
		// $mail->IsSMTP(); // enable SMTP
		// $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
		// $mail->SMTPAuth = true; // authentication enabled
		// $mail->SMTPSecure = 'tsl'; // secure transfer enabled REQUIRED for Gmail
		// $mail->Host = $Host;
		// $mail->Port = 587; // or 587
		// $mail->IsHTML(true);
		// $mail->Username = $un;
		// $mail->Password = $pass;
		// $mail->SetFrom($un,$sendname);
		// $mail->Subject = $subject;
		// $mail->Body = $maildata;
		// $mail->AddAddress($sendto);
		// $mail->AddBCC("shweta.asiatech@gmail.com","Other ID");
		// if(!$mail->Send()) {
			// echo "Mailer Error: " . $mail->ErrorInfo;
		// } else {
			// return true;
		// }
		
		
		/* $mail = new PHPMailer;
		//Enable SMTP debugging. 
		// $mail->SMTPDebug = 3;                               
		//Set PHPMailer to use SMTP.
		$mail->isSMTP();            
		//Set SMTP host name                          
		$mail->Host = "smtp.gmail.com";
		//Set this to true if SMTP host requires authentication to send email
		$mail->SMTPAuth = true;                          
		//Provide username and password     
		$mail->Username = "reservations@asiatech.in";                 
		$mail->Password = "asiatech@1234";                           
		//If SMTP requires TLS encryption then set it
		$mail->SMTPSecure = "tls";                           
		//Set TCP port to connect to 
		$mail->Port = 587;                                   
		$mail->From = "reservations@asiatech.in";
		$mail->FromName = "The Den Corbett";
		$mail->addAddress("jayanti@asiatech.in", "Jayanti asiatech");
		 $mail->addCC("sumit@asiatech.com");
		$mail->addBCC("rina@example.com");
		$mail->isHTML(true);
		$mail->Subject = ;
		$mail->Body = '<div style="border:3px solid 98bc6c; width:80%;display:block;margin: 0px auto;">
			<div>  
				<span style="font-size:20pt;">The Den Corbett</span><br />
				<span style="color:#FCAF17;font-size:15pt;">Enquiry Detail From Your Website</span><br />
				<table cellspacing="0" style="width:100%;height:200px;"><tr style="background-color: #97BB6A;color:#fff;"><td colspan="2">The details are as follows.</td></tr>
				<tr><td style="border:1px solid #000000;padding:5px;font-weight:bold;">Enter Name</td><td style="border:1px solid #000000;padding:5px;">'.$name.'</td></tr>
				<tr><td style="border:1px solid #000000;padding:5px;font-weight:bold;">email Id</td><td style="border:1px solid #000000;padding:5px;">'.$email.'</td></tr>
				<tr><td style="border:1px solid #000000;padding:5px;font-weight:bold;">Phone</td><td style="border:1px solid #000000;padding:5px;">'.$phone.'</td></tr>
				<tr><td style="border:1px solid #000000;padding:5px;font-weight:bold;">Amount</td><td style="border:1px solid #000000;padding:5px;">'.$amount.'</td></tr>
				
				<tr><td style="border:1px solid #000000;padding:5px;font-weight:bold;">subject</td><td style="border:1px solid #000000;padding:5px;">'.$subject.'</td></tr>
				<tr><td style="border:1px solid #000000;padding:5px;font-weight:bold;">message</td><td style="border:1px solid #000000;padding:5px;">'.$message.'</td></tr>  
				
				
				</table><br>Thank you<br />
				<span style="color:green;"><a href="http://www.asiatech.in/">AsiaTech Inc</a></span>
			</div>		 	
			</div>';
		if(!$mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			echo "Message has been sent successfully";
			// header("refresh:3;url=http://thedencorbett.in/");
			//header("Location: contact.php");
		} */
	}
}