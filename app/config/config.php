<?php

return array
(
	'baseUri'       => '/',
	'defaultLang'   => 'en',
	'baseGithubUrl' => 'https://github.com/phalcon/cphalcon/tree',
	'fileGithubUrl' => 'https://github.com/phalcon/cphalcon/blob/%s/ext/%s',
	'schemaPath'    => APP_ROOT . '/data/schema.sql',
	'voltOptions'   => array(
		'compiledPath'      => APP_ROOT . '/../cache/',
		'compiledSeparator' => '_'
	),
	'cache' => array(
		'enabled'  => true,
		'lifetime' => 86400,
		'dir'      => APP_ROOT . '/../cache/',
	),
	'db' => array(
		'host'         => 'localhost',
		'username'     => 'root',
		'password'     => '',
		'dbname'       => 'api',
		'tblPrefix'    => 'apidocms_',
	),
	'genapi' => array(
		'filesystem' => array(
			'baseDir' => '/Users/gutierrezandresfelipe/cphalcon/ext/',
		),
		'github' => array(
			'projectUrl'  => 'https://api.github.com/repos/phalcon/cphalcon/contents/ext',
			'curlOptions' => array(
				CURLOPT_USERAGENT      => 'custom php bot',
				CURLOPT_HTTPAUTH       => CURLAUTH_BASIC,
				CURLOPT_USERPWD        => 'agent-j:***',
				//CURLOPT_PROXY          => '0.0.0.0:0000',
				CURLOPT_HEADER         => false,
				CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_RETURNTRANSFER => true,
			),
		),
	),
);
