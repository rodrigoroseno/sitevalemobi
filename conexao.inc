<?php

$Server['host']   =   '127.0.0.1';
$Server['dbname'] =   'cad_cadastro';
$Server['user']   =   'root';
$Server['pass']   =   '';

try {

	$PDO = new PDO( 'mysql:host=' . $Server['host'] . '; dbname=' . $Server['dbname'], $Server['user'], $Server['pass'] );

} catch( PDOException $e  ) {

	header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
	print_r( array(
		'<b>status</b>'	=>	'<font color="red">' . http_response_code() . '</font>',
		'<b>con</b>'		=> $e->getMessage()
	) );
	exit;
}