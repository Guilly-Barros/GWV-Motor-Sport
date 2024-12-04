<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

date_default_timezone_set('America/Sao_Paulo');
header("Content-Type: text/html; charset=UTF-8",true);

if($_SERVER['HTTP_HOST'] == 'localhost'){
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','gwm_motors');
}else{
	define('HOST','');
	define('USER','');
	define('PASS','');
	define('DB','');
}

try{
	$sql_conn = 'mysql:host='.HOST.';dbname='.DB;
	$sql = new PDO($sql_conn, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro_conn){
	echo $erro_conn->getMessage();
}
