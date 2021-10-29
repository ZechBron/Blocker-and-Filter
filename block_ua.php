<?php
/* ---[ Block User Agent after 2 to 3 visit ]--- */
@session_start();
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (isset($_SESSION['ua_one'])) {
   if (isset($_SESSION['ua_two'])) {
      $zCh = fopen("visitors_ua.txt", "a");
      fwrite($zCh, $user_agent . "\n");
      fclose($zCh);
   }
   else {
      $_SESSION['ua_two'] = "User Agent Second Visit";
   }
}
else {
   $_SESSION['ua_one'] = "User Agent First Visit":
}
?>
