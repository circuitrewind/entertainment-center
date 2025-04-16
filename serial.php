<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


$port_name = '/dev/cuaU0';
$port_conf = [
	'baud'		=> 9600,
	'bits'		=> 8,
	'stop'		=> 1,
	'parity'	=> 0,
];

// SEND THE COMMAND TWICE, BECAUSE THE DEVICE IS WONKY
function serial($message) {
	$message = trim($message);
	if (substr($message, -1) !== ';') $message .= ';';
	serial_send($message);
	return serial_send($message);
}

function serial_send($message) {
	global $port_name, $port_conf;

	// OPEN THE SERIAL PORT
	$fd = dio_open($port_name, O_RDWR | O_NONBLOCK);

	// SET OUR PORT SPEED
	dio_tcsetattr($fd, $port_conf);

	// WRITE OUR MESSAGE TO THE SERIAL PORT
	dio_write($fd, $message);

	// READ THE REPLY ON THE SERIAL PORT
	// 2 SECOND TIMEOUT IF NOTHING COMES BACK
	$data	= '';
	$time	= microtime(true);
	while(strlen($data) <= 100) {
		$data .= dio_read($fd, 1);
		if (substr($data, -1) == ';')		break;
		if (microtime(true) - $time > 2.0)	break;
		usleep(1000);
	}

	// CLEANUP AND RETURN
	dio_close($fd);
	return $data;
}
