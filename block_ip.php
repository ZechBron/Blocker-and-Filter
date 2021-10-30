<?php
/* ---[ Block IP Address ]--- */
@session_start();

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

if (isset($_SESSION['ip_one'])) {
   if (isset($_SESSION['ip_two'])) {
      $zCh = fopen("visitors_ip.txt", "a");
      fwrite($zCh, $ip . "\n");
      fclose($zCh);
   }
   else {
      $_SESSION['ip_two'] = "IP Second Visit";
   }
}
else {
   $_SESSION['ip_one'] = "IP First Visit";
}
?>
