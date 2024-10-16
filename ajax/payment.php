<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
session_start();
$mysqli = mysqli_connect("localhost", "u946987511_islanddivers", "Admin*/1234", "u946987511_islanddivers");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create table if not exists
$create_table_query = "CREATE TABLE IF NOT EXISTS `payment` (
    `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
    `booking_id` VARCHAR(50) NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `address` TEXT,
    `amount` DECIMAL(10,2) NOT NULL,
    `message` TEXT,
    `status` TINYINT(1) DEFAULT 0,
    `time` DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (!mysqli_query($mysqli, $create_table_query)) {
	echo "Error creating table: " . mysqli_error($mysqli);
}

if (isset($_POST)) {
	if (!empty($_POST["amount"]) && is_numeric($_POST["amount"])) {
		$_SESSION['booking_id']					=	'ISD' . date("ymd") . round(microtime(true));
		$_SESSION["name"]						=	$_POST["name"];
		$_SESSION["mobile"]						=	$_POST["mobile"];
		$_SESSION["address"]					=	$_POST["address"];
		$_SESSION["amount"]					    =	$_POST["amount"];
		$_SESSION["email"]						=	$_POST["email"];
		$_SESSION["message"]					=	$_POST["message"];

		$qry = mysqli_query($mysqli, "INSERT INTO `payment`(`booking_id`, `name`, `phone`, `email`,`address`, `amount`,`message`, `status`,`time`) VALUES ('" . $_SESSION['booking_id'] . "', '" . $_POST["name"] . "', '" . $_POST["mobile"] . "', '" . $_POST["email"] . "','" . $_POST["address"] . "','" . $_POST["amount"] . "','" . $_POST["message"] . "','0','" . date('Y-m-d H:i:s') . "')");
		if ($qry) {
			echo '<script>window.location="../citrus/final_payment.php";</script>';
		}
	} else {
		echo "Invalid Amount";
	}
}
