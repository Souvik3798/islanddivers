<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
session_start();
$mysqli = mysqli_connect("localhost","asiatech_islanddivers","islanddivers@321","islanddivers");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
date_default_timezone_set("Asia/Calcutta");
//$txnstatus = 'SUCCESS';
//$citrus_bid = 'ISD221123166918';
if (!empty($citrus_bid) && isset($_POST) && $txnstatus == 'SUCCESS') {
	$update = mysqli_query($mysqli, " UPDATE `payment` SET `status`='1', `time`='".date('Y-m-d H:i:s')."' where `booking_id` = '$citrus_bid' ");
	if($update){
		$sql = mysqli_query($mysqli, "SELECT * FROM `payment` WHERE booking_id = '$citrus_bid'");
		$result = mysqli_fetch_array($sql);
			$booking_id		= $result['booking_id'];
			$Amount			= $result['amount'];
			$address		= $result['address'];
			$Message		= $result['message'];
			$Name			= $result['name'];
			$Phone			= $result['phone'];
			$EmailId		= $result['email'];
			
			$subject ="Payment from Islanddivers ".$citrus_bid;
			$to ="Islanddivers7@gmail.com";
			$headers  = "From: ".$Name." <".$EmailId."> \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .= "Cc: support@asiatech.in" . "\r\n";
			$email_content='<div style="border:3px solid 98bc6c; width:80%;display:block;margin: 0px auto;">
			<div><span style="color:#00BAF2;font-size:20pt;border:3px solid 98bc6c;">Payment From islanddivers Website</span>  
			<table>
			<tr><td>Name</td><td>'.$Name.'</td></tr>
			<tr><td>Phone</td><td>'.$Phone.'</td></tr>
			<tr><td>Email Id</td><td>'.$EmailId.'</td></tr>
			<tr><td>Payment Gateway Id</td><td>'.$booking_id.'</td></tr>
			<tr><td>Amount</td><td>'.$Amount.'</td></tr>
			<tr><td>Message</td><td>'.$Message.'</td></tr>
			</table><br/>Regards<br/><a href="https://www.islanddivers.in/">islanddivers</a>
			</div></div>'; 
			//echo $email_content;
		if (mail($to, $subject, $email_content, $headers)) {		
			echo "Thank You! Your Payment we have received.<br>";
		    echo "If you are not redirected yet <a href='https://www.islanddivers.in/'>click here</a>.";
		echo '<script>window.location="https://www.islanddivers.in/";</script>';
		} else {
			echo "Oops! Something went wrong and we couldn't send your message.";
		}
	}
} else {
	echo "There was a problem with your submission, please contact with AsiaTech Hotels.";
} 
?> 