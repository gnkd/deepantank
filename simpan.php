<?php

require require 'firebase-php-master/src/firebaseLib.php';
$param1 = $_GET["temp"];
$param2 = $_GET["hum"];

$url = 'https://tanknew-f338e-default-rtdb.firebaseio.com/'; 
$token = '53FgLWaFokn4PXu74JfbDYPWKOkOEBLhZ5UXox7c'; 

$DEFAULT_PATH = '/DTproduction';

$_devicestatus= array(
'suhu' => $param1,
'kelembaban' => $param2,
);

 

$firebase = new \Firebase\FirebaseLib($url, $token);
$firebase->update($DEFAULT_PATH, $_devicestatus);

print("Update done");
?>
