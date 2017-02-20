<?php

error_reporting(E_ALL); 
ini_set("display_errors", 1);

$hostname = shell_exec("uname -n");
$percentage = "100%";
$batterWarning = "Battery Warning: Final";

$to = "keyner.peru@gmail.com"; // Set your email
$headers = "FROM: Keyner <contact@keyrnerl.info>\r\n"; // Set your sender
$subject = "Battery Status ".$hostname.", ";

$batteryStatus = shell_exec("pmset -g batt");
if (strpos($batteryStatus, "charged") !== false && strpos($batteryStatus, $percentage) !== false) {
    $subject .= $percentage;
	$body = "Disconnect the battery charger, FULL CHARGED.";
	mail($to,$subject,$body,$headers) or die();	
} elseif (strpos($batteryStatus, "discharging") !== false && strpos($batteryStatus, $batterWarning) !== false) {
	$subject .= $batterWarning;
	$body = "Connect the battery charger, ASAP.";
	mail($to,$subject,$body,$headers) or die();	
}