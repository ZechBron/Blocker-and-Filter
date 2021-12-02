<?php
/* ---[ Block both IP & User Agent after 2 to 3 visits ]--- */
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
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (isset($_SESSION['first_visit'])) {
   if (isset($_SESSION['second_visit'])) {
      $zCh = fopen("blocked_ip.txt", "a");
      fwrite($zCh, $ip . "\n");
      fclose($zCh);
      $ChB = fopen("blocked_ua.txt", "a");
      fwrite($ChB, $user_agent . "\n");
      fclose($ChB);
		
      /* ---[ This is optional. You can comment or remove this if you want ]--- */
      $optional = fopen(".htaccess", "a");
      fwrite($optional, "Deny from " . $ip . "\n");
      fclose($optional);
      /* ---[ This is optional. You can comment or remove this if you want ]--- */
   }
   else {
      $_SESSION['second_visit'] = "Second Visit";
   }
}
else {
   $_SESSION['first_visit'] = "First Visit";
}
?>
