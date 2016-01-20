<?php
	//Change the values according to your database
	header ('Content-Type:text/html; charset=utf-8');
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','myapp');
	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');