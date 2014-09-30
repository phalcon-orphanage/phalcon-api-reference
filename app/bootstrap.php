<?php

use Phalcon\Mvc\Application;

define('APP_ROOT', __DIR__);

try {

	require 'loader.php';
	require 'di.php';

	$app = new Application($di);
	echo $app->handle()->getContent();

} catch(Exception $e) {
	echo $e->getMessage(), PHP_EOL;
	echo $e->getTraceAsString();
}

