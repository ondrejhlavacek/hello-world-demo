<?php
require_once('vendor/autoload.php');

$app = new \PosledniSobota\HelloWorld($argv[1]);
print $app->sayHello();
