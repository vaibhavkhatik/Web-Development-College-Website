<?php
	error_reporting('E_ALL');
    session_start();
	date_default_timezone_set('Asia/Kolkata'); 
    $dbhostname='localhost';
   	$dbusername='root';
	$dbpassword='';
 		
	$con=mysqli_connect("$dbhostname","$dbusername","$dbpassword");
 	if(!$con){
		die ("Failed to connect to MySQL DataBase:".mysqli_connect_error());
	}
	
	$softdbname='collegedb';
	$dbconnect=mysqli_select_db($con,$softdbname);
	if(!$dbconnect){
		die ("Failed to Select DataBase: " . mysqli_error($con));
	} 
	mysqli_query($con,"SET NAMES utf8"); 
 ?>