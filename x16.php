<?php

require_once('getvar/getvar.inc.php');
$get = new getvar;

$code = '';

$switch		=	'192.168.20.8';
$matrix		=	'192.168.20.9';

function hexpad($int) {
	$str = dechex($int);
	if (strlen($str) % 2) $str = '0'.$str;
	return $str;
}

function send($ip, $message) {
	global $code;
	$socket		= socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	socket_connect($socket, $ip, 5000);
	socket_send($socket, $message, strlen($message), 0);
	$code = $message;
}

function x16($ip, $id, $data) {
	send($ip, hex2bin('AABB03'.hexpad($id).hexpad($data).'EE'));
	send($ip, hex2bin('AABB03'.hexpad($id).hexpad($data).'EE'));
}

function x16_input($ip, $num) {
	return x16($ip, 0x01, (int)$num);
}

function matrix_route($ip, $in, $out) {
	return send($ip, 'MT00SW'.hexpad($in).hexpad($out).'NT');
}



x16_input($switch, $get->input);
//matrix_route($matrix, 2, 4);


echo json_encode([
	'input'	=>	$get->input,
	'code'	=> 	bin2hex($code),
]);
