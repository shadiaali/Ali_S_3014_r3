<?php
$db_dsn = array(
	'host'=>'localhost',
	'dbname'=>'db_new',
	'charset'=>'utf8'
);

$dsn = 'mysql:'.http_build_query($db_dsn, '', ';');
//set up connection cred
$db_user = 'root';
$db_pass = 'root';

//checking connection
try{
	$pdo = new PDO($dsn, $db_user, $db_pass);
}catch(PDOException $exception){
	echo 'Connection Error:'.$exception->getMessage();
	exit();
}
