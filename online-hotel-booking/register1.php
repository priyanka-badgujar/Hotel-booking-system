<?php
require 'connection.php';
        $name = mysqli_real_escape_string($con, $_POST['name']);  
		$username= mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $confirmpwd = mysqli_real_escape_string($con, $_POST['confirmpwd']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobno']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $dob = mysqli_real_escape_string($con, $_POST['dob']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $state = mysqli_real_escape_string($con, $_POST['state']);
        $country = mysqli_real_escape_string($con, $_POST['country']);
	   
       if($password == $confirmpwd)
       {
            $sql = "INSERT INTO user_details (Name, Username, Password,Mobile,Gender,Email_ID,Birthdate,Address,City,
            State,Country)   
			   VALUES ('$name', '$username', '$password', '$mobile', '$gender', 
               '$email', '$dob', '$address', '$city', '$state', '$country')";  
               	if (mysqli_query($con,$sql)) 
						{     
							echo "<script language='javascript'>
									alert('Successful Registration');
									window.location = 'register.php';
									</script>"; 
						} 
						else
						{
								echo "<script language='javascript'>
									alert('Error,while registering');
									window.location = 'register.php';
									</script>";
						} 
	
       }
       else
       {
                               echo "<script language='javascript'>
									alert('Password and confirm password must be same!!!');
									window.location = 'register.php';
									</script>";     
       }
mysqli_close($con);
?>


