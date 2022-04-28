<?php
error_reporting(0);
error_log(1);

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
}
elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
	$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
}
else {
	$ip = $_SERVER['REMOTE_ADDR'];
}

$country = file_get_contents("https://ipapi.co/" . $ip . "/country_name");

$z = fopen("blocked.txt", "a");
fwrite($z, "IP Addr: " . $ip . "\n");
fwrite($z, "Country: " . $country . "\n\n");
fclose($z);

if ($country != "Philippines") {
header("HTTP/1.0 404 Not Found");
exit();
}
?>
