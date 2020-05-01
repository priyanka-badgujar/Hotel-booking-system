<?php
	@session_start(); 
	require 'connection.php';
	$user = $_SESSION['user'];
    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);
	$result = mysqli_query($con,"SELECT * FROM user_details WHERE Username='$user'");
	if($result)
	{ 
	   while($row = mysqli_fetch_array($result))   
	   {
		 $name = $row['Name'];   
	   }
	}
	
	 $sql = "INSERT INTO feedback (Name, Feedback)   
			   VALUES ('$name', '$feedback')";  
               	if (mysqli_query($con,$sql)) 
						{     
							echo "<script language='javascript'>
									alert('Success');
									window.location = 'feedback.php';
									</script>"; 
						} 
						else
						{
								echo "<script language='javascript'>
									alert('Error,while giving feedback');
									window.location = 'feedback.php';
									</script>";
						} 
	   mysqli_close($con);
?>


