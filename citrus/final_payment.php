<?php
session_start();
$order_id					=	$_SESSION['booking_id'];
$amount 					=	$_SESSION["amount"];
$name						=	trim($_SESSION["name"]);
$email						=	trim($_SESSION["email"]);
$mobile						=	trim($_SESSION["mobile"]);
$address					=	trim($_SESSION["address"]);
$message					=	trim($_SESSION["mobile"]);
$mer_id						=	"qsqdu7t0cq";
$pay_folder					=	"https://www.citruspay.com/qsqdu7t0cq"; 
$secret						=	"dab6c1a7c73367c18f09ed44dbd3763219bdf5f6";
set_include_path('lib'.PATH_SEPARATOR.get_include_path());
require_once 'Zend/Crypt/Hmac.php';
$formPostUrl = $pay_folder;	//Need to replace this URL with your UAT/Production URL
$secret_key = $secret;	//Need to change with your Secret Key
$vanityUrl = $mer_id;	//Need to change with your Vanity URL Key
$orderAmount = $amount;
$merchantTxnId = $order_id;
$currency = "INR";
$data="$vanityUrl$orderAmount$merchantTxnId$currency";
$securitySignature = Zend_Crypt_Hmac::compute($secret_key, "sha1", $data);
?> 
<form id="myform" name="myform" action="<?php echo $pay_folder; ?>" method="post">
	 <input type="hidden" id="merchantTxnId" name="merchantTxnId" value="<?php echo $merchantTxnId ?>" />
	 <input type="hidden" id="orderAmount" name="orderAmount" value="<?php echo $orderAmount ?>" />
	 <input type="hidden" id="firstName" name="firstName" value="<?php echo $name ?>" />
	 <input type="hidden" id="lastName" name="lastName" value="" />
	 <input type="hidden" id="email" name="email" value="<?php echo $email ?>" />
	 <input type="hidden" id="MobileNumber" name="MobileNumber" value="<?php echo $mobile ?>" />
	 <input type="hidden" id="currency" name="currency" value="<?php echo $currency ?>" />
	 <input type="hidden" name="returnUrl" value="https://www.islanddivers.in/citrus/response.php" />
	 <input type="hidden" id="secSignature" name="secSignature" value="<?php echo $securitySignature ?>" />			
 <input  form="myform" type="submit" value="" />		
</form>	
<script>
  window.onload = function(){
  document.forms['myform'].submit()
} 
</script>