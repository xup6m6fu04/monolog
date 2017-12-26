<?php
	require_once __DIR__ . '/../vendor/autoload.php';
	
	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;
	
	// create a log channel
	$log = new Logger('name');
	$log->pushHandler(new StreamHandler('log/warning.log', Logger::WARNING));
	$warn_array = ['a','b','c'];
	// add records to the log
	$log->warning('Foo',$warn_array);
	$log->error('Bar',$warn_array);
