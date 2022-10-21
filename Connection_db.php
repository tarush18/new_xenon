<?php
error_reporting(0);
// 	$servername = "ec2-44-210-228-110.compute-1.amazonaws.com";
// 	$username = "dpekwoiqzanyaq";
// 	$password ="2c2817110da54a26c7875bf475083fccca555f2eab41e5bf3bf69ffec9e19f6b";
// 	$dbname ="d12v0us8kedq7j";

        $servername = "remotemysql.com";
	$username = "JE75CU9Fcy";
	$password ="55ZyN8weDb";
	$dbname ="JE75CU9Fcy";

	$check_connect=mysqli_connect($servername , $username , $password , $dbname);

	// if($check_connect)
	// {
	// 	echo "connection success";
	// }
	// else
	// {
	// 	echo "not made" .mysqli_connect_error(); 
	// }
?>
