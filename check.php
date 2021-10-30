<?php
/* ---[ Check if both IP Address and User-Agent is Blocked ]--- */
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

$user_agent = $_SERVER['HTTP_USER_AGENT'];

$zCh = file_get_contents("blocked_ip.txt");
$visitors_ip = explode("\n", $zCh);

$ChB = file_get_contents("blocked_ua.txt");
$visitors_ua = explode("\n", $ChB);

if (in_array($ip, $visitors_ip) || in_array($user_agent, $visitors_ua)) {
   header("HTTP/1.0 403 Forbidden");
   exit();
}
?>
