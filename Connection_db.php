<?php
error_reporting(0);
	$servername = "localhost";
	$username = "root";
	$password ="";
	$dbname ="car_selling";

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