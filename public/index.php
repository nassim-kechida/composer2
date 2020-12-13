<?php
require_once realpath("../vendor/autoload.php");

$world = new App\wcs\Hello();
echo '<br>';
$ehime = HelloWorld\SayHello::world();
echo $ehime;
?>