<?php
$con = mysqli_connect("localhost","root","","hotel"); 
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
?>