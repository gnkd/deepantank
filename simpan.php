<?php

require require 'firebase-php-master/src/firebaseLib.php';
$param1 = $_GET["temp"];
$param2 = $_GET["hum"];

$url = 'https://deepan9894.firebaseio.com/'; 
$token = 'oLs4nokIPv9c1dSp9j1r5YKoekRJblFXFHnnun2O'; 

$DEFAULT_PATH = '/DTproduction';

$_devicestatus= array(
'suhu' => $param1,
'kelembaban' => $param2,
);

 

$firebase = new \Firebase\FirebaseLib($url, $token);
$firebase->update($DEFAULT_PATH, $_devicestatus);

print("Update done");
?>
