<?php
$ip = $_SERVER['REMOTE_ADDR'];
$zCh = file_get_contents("ip_blacklist.txt");
$blocked_ip = explode("\n", $zCh);

if (in_array($ip, $blocked_ip)) {
   header("HTTP/1.0 403 Forbidden");
   exit();
}
