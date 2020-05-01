<?php
require 'connection.php';
        $name = mysqli_real_escape_string($con, $_POST['name']);  
		$company= mysqli_real_escape_string($con, $_POST['company']);
        $email = mysqli_real_escape_string($con, $_POST['e_id']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
    
         $sql = "INSERT INTO contact_us (Name,Company, Email,Mobile_no,Message)   
			   VALUES ('$name', '$company', '$email', '$mobile', '$message')";  
               	if (mysqli_query($con,$sql)) 
						{     
							echo "<script language='javascript'>
									alert('Your message sent successfully');
									window.location = 'contact.php';
									</script>"; 
						} 
						else
						{
								echo "<script language='javascript'>
									alert('Error,while sending message');
									window.location = 'contact.php';
									</script>";
						} 
?>


