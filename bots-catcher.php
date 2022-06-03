<?php
include("antibots.php");
include("ip_blacklist.php");

/* ---[ Detect Bots & Crawlers ]--- */

date_default_timezone_set('Asia/Manila');
$date = date("F d Y - h:i A");

$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($ip);

$isp = file_get_contents("https://ipapi.co/" . $ip . "/org");

$ua = $_SERVER['HTTP_USER_AGENT'];


$z = fopen("bots.txt", "a");
fwrite($z, "\n-----[ " . $date . " ]-----\n");
fwrite($z, " IP: " . $ip . "\n");
fwrite($z, " Host: " . $host . "\n");
fwrite($z, " ISP: " . $isp . "\n");
fwrite($z, " UA: " . $ua . "\n");
fwrite($z, "========== END ========== \n");
fclose($z);

?>
