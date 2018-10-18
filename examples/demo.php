<?php
require '../vendor/autoload.php';

$ip = '60.191.23.220';
$obj = new IpTools\IpArea();
echo $obj->get($ip);
