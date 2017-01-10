<?php

	require ('lib/vendor/autoload.php');
	DB::$user = 'root';
	DB::$password = '';
	DB::$dbName = 'APL_CONNECTION';
	DB::$host = 'localhost'; //defaults to localhost if omitted
	// DB::$port = '12345'; // defaults to 3306 if omitted
	DB::$encoding = 'utf8'; // defaults to latin1 if omitted
?>