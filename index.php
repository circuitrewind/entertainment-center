<?php

switch ($_SERVER['DOCUMENT_URI']) {
	case '/x16.php':
		return require('x16.php');
	case '/status.php':
		return require('status.php');
}


require('page.php');
return;

require_once('serial.php');


if ($argc < 2) return;

unset($argv[0]);

$command = strtoupper(implode(' ', $argv));

print("SENT: $command\n");


//$x = serial('POWER 00;');
$x = serial($command);
print("REPLY: $x\n");

