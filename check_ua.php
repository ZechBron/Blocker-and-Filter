<?php
/* ---[ Check if User Agent is Blocked ]--- */

$user_agent = $_SERVER['HTTP_USER_AGENT'];

$zCh = file_get_contents("visitors_ua.txt");
$visitors_ua = explode("\n", $zCh);
$count_ua = count($visitors_ua);

for ($i = 0; $i < $count_ua; $i++) {
   if ($visitors_ua[$i] == $user_agent) {
      header("HTTP/1.0 403 Forbidden");
   }
}
?>
