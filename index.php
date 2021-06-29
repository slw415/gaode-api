<?php

require __DIR__ .'/vendor/autoload.php';

use Shishuaishuai\Gaode\Gaode;
$key = 'bb5e3bd493d1f29f52f9d8ee4bf47049';
$w = new Gaode($key);

$res = $w->getIp('长沙');
var_dump($res);