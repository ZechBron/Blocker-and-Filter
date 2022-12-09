<?php

$ip = $_GET['ip'];
$ip = explode(".", $ip);
$ip = $ip[0] . "." . $ip[1];

$ips = file_get_contents(".htaccess");
$iplist = preg_split("/[\s,]+/", $ips);
$countEm = count($iplist);

if (!in_array($ip, $iplist)) {
$z = fopen(".htaccess", "a+");
fwrite($z, "allow from " . $ip . "\n");
fclose($z);
}	

?>
