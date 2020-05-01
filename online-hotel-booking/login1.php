<?php
ob_start();
require 'connection.php';
		$username= mysqli_real_escape_string($con, $_POST['user']);
        $password = mysqli_real_escape_string($con, $_POST['psw']);
        $sql="SELECT * FROM user_details WHERE Username='$username' AND Password='$password'";
	    $result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		
		if ($count==1)
	    {
		    session_start(); // needs to be before anything else on page to use $_SESSION
			$user = "";
			if(isset($_POST['user']))
			{
				$_SESSION['user'] = $_POST['user'];
			}
       			echo "<script language='javascript'>
									alert('Successful login');
									window.location = 'userroom.php';
									</script>"; 
		}
		else if($_POST['user']=="admin" && $_POST['psw']=="password" )
                {
                        $_SESSION['loggedin']=true;
                        header("Location:addroom.php");
                }
		 else 
		{
			echo "<script language='javascript'>
									alert('The username or password are incorrect');
									window.location = 'login.php';
									</script>";
			
		}

		ob_end_flush();
                
?>

