<?php 
	set_include_path('lib'.PATH_SEPARATOR.get_include_path());
	require_once 'Zend/Crypt/Hmac.php';
	function generateHmacKey($data, $apiKey=null) {
		$hmackey = Zend_Crypt_Hmac::compute($apiKey, "sha1", $data);
		return $hmackey;
	}
	$data = "";
	$flag = "dataValid";
	if(isset($_POST['TxId'])) {
		$txnid = $_POST['TxId'];
		$data .= $txnid;
	}
	if(isset($_POST['TxStatus'])) {
		$txnstatus = $_POST['TxStatus'];
		$data .= $txnstatus;
	 } 
	 if(isset($_POST['amount'])) {
		$amount = $_POST['amount'];
		$data .= $amount;
	 }
	 if(isset($_POST['pgTxnNo'])) {
		$pgtxnno = $_POST['pgTxnNo'];
		$data .= $pgtxnno;
	 }
	 if(isset($_POST['issuerRefNo'])) {
		$issuerrefno = $_POST['issuerRefNo'];
		$data .= $issuerrefno;
	 }
	 if(isset($_POST['authIdCode'])) {
		$authidcode = $_POST['authIdCode'];
		$data .= $authidcode;
	 }
	 if(isset($_POST['firstName'])) {
		$firstName = $_POST['firstName'];
		$data .= $firstName;
	 }
	 if(isset($_POST['lastName'])) {
		$lastName = $_POST['lastName'];
		$data .= $lastName;
	 }
	 if(isset($_POST['pgRespCode'])) {
		$pgrespcode = $_POST['pgRespCode'];
		$data .= $pgrespcode;
	 }
	 if(isset($_POST['addressZip'])) {
		$pincode = $_POST['addressZip'];
		$data .= $pincode;
	 }
	 if(isset($_POST['signature'])) {
		$signature = $_POST['signature'];
	 }
	 $secret_key = "dab6c1a7c73367c18f09ed44dbd3763219bdf5f6";//Replace this with your secret key from the citrus panel	 
	 $respSignature = generateHmacKey($data,$secret_key);
	 if($signature != "" && strcmp($signature, $respSignature) != 0) {
		$flag = "dataTampered";
	 }
	 
	 //print_r($_POST); 
	 
 ?>
 
 <html>
 <head>
 	<meta HTTP-EQUIV="Content-Type" CONTENT="text/html;CHARSET=iso-8859-1">
 </head>
 <body>
 	<?php 
 		if ($flag == "dataValid") {	 		
 	?>
 	Your Unique Transaction/Order Id : <?php echo $txnid ?><br/>
	<?php echo $txnstatus;?>
 	<?php
		//if($txnstatus == 'SUCCESS'){
		if(strtoupper($txnstatus) === 'SUCCESS'){
		$citrus_bid=$txnid;
		include 'success.php';
		}else{	
		$citrus_bid=$txnid;	
		echo 'Error in Payment. Please Try Again!!!';   
		
		}  
	?>
 	<?php } else { ?>
 	CitrusGenerated Signature and Our (Merchant) Signature Mis-Mactch 
 	<?php }	?>
 </body>
 </html>