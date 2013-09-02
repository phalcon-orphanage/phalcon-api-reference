<?php

$loader = new Phalcon\Loader;
$loader->registerNamespaces(array(
	'ApiDocs' => APP_ROOT,
));
$loader->register();