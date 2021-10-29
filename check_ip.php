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
$count_ip = count($visitors_ip);

for ($i = 0; $i < $count_ip; $i++) {
   if ($visitors_ip[$i] == $ip) {
      header("HTTP/1.0 403 Forbidden");
   }
}
?>
