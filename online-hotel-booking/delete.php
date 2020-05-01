<?php 
	$con = mysqli_connect("localhost","root","","hotel"); 
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
	else 
	{  
		// escape variables for security  
		$rmno = mysqli_real_escape_string($con, $_POST['rmno']);   
		$sql="DELETE FROM room_details WHERE Room_no=$rmno";  
		if (mysqli_query($con,$sql)) 
		{     
            echo "<script language='javascript'>
		        alert('Room Successfully Deleted');
		         window.location = 'addroom.php';
		        </script>";
		 } 
         else
         {
            echo "<script language='javascript'>
		        alert('Room Not Exist');
		         window.location = 'addroom.php';
		        </script>";
         } 
	
	} 
	
mysqli_close($con); 
?>  



