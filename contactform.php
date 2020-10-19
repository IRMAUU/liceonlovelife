<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$code = $_POST['code'];
	$country = $_POST['country'];
	$mailFrom = $_POST['mail'];
	$name = $_POST['name'];

$mailTo = "michaelryan98@outlook.com";
$headers = "From: ".$mailFrom;
$txt = "You have recieved an e-mail from ".$name. ".\n\n".$message;



mail($mailTo, $code, $address, $country, $name, $headers);
header("Location: index.php?mailsend");

}