<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<style type="text/css">
		.myTable { background-color:#eee;border-collapse:collapse;text-align:left;font-size:20px;width:30%;}
		.myTable th { background-color: #3A5795;color:white; }
		.myTable td, .myTable th { padding:10px;border:1px solid #3A5795; }
	</style>
</head>
<body>
<ul>
  <li style="float: left;"><img src="images/logo.png"  width=250px height=80px></li>
 <li style="float: right;"><a href="logout.php"><button class="button">Logout</button></a></li>
  </br>
  <li style="float: left;"><a  href="userroom.php">Rooms</a></li>
  <li style="float: left;"><a  class="active" href="account.php">My Account</a></li>
  <li style="float: left;"><a  href="feedback.php">Feedback</a></li> 
</ul>
</br></br></br></br></br>

<div align="center">

<?php
	@session_start(); 
	$con = mysqli_connect("localhost","root","","hotel"); 
	$user = $_SESSION['user']  ;
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
		else
		{
			if (session_status() == PHP_SESSION_DISABLED)
			{
			echo"<script>alert('login 1st')</script>";
			header('Location: login.php');
			
			}
			else
			{
		
		$result = mysqli_query($con,"SELECT * FROM user_details WHERE Username='$user'"); 
		if($result)
		{
				echo "<table class=\"myTable\">   ";  
				echo "</thead>";
				echo "<tbody>";
			
				while($row = mysqli_fetch_array($result))   
				{
					 echo ' <tr> 
								<td>Name</td>
								<td>'.$row['Name'].'</td>
                             </tr>';
					 echo ' <tr> 
								<td>Username</td>
								<td>'.$row['Username'].'</td>
                              </tr>';
					  echo ' <tr> 
								<td>Mobile</td>
								<td>'.$row['Mobile'].'</td>
                              </tr>';
					   echo ' <tr> 
								<td>Gender</td>
								<td>'.$row['Gender'].'</td>
                                </tr>';
						 echo ' <tr> 
								<td>Email ID</td>
								<td>'.$row['Email_ID'].'</td>
                                </tr>';
						 echo ' <tr> 
								<td>BirthDate</td>
								<td>'.$row['Birthdate'].'</td>
                               </tr>';
						  echo ' <tr> 
								<td>Address</td>
								<td>'.$row['Address'].'</td>
                               </tr>';
						   echo ' <tr> 
								<td>City</td>
								<td>'.$row['City'].'</td>
                                 </tr>';
						    echo ' <tr> 
								<td>State</td>
								<td>'.$row['State'].'</td>
                               </tr>';
						    echo ' <tr> 
								<td>Country</td>
								<td>'.$row['Country'].'</td>
                                </tr>';
				
				}
				echo "</tbody>";
				echo "</table>";
				
		}
			else
			{
			echo "<script>alert('Please logged in first')</script>";
			}	
			}
        }
		mysqli_close($con);
	?>

	
</div>

</body>
</html> 
