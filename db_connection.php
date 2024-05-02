<?php
	error_reporting(0);
	define('DB_HOST','localhost:3306');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_DATABASE','users');
  $conn=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die ("can not connect to Database");
?>