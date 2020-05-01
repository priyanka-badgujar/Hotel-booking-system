<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<style type="text/css">
		.myTable { background-color:#eee;border-collapse:collapse;text-align:left;font-size:20px;
		 width :100%;}
		.myTable th { background-color: #3A5795;color:white; }
		.myTable td, .myTable th { padding:10px;border:1px solid #3A5795; }
</style>
</head>
<body>
<ul>
  <li style="float: left;"><img src="images/logo.png"  width=250px height=80px></li>
  <li style="float: right;"><a href="logout.php"><button class="button">Logout</button></a></li>
  </br>
      <li style="float: left;"><a  href="addroom.php">Room</a></li>
  <li style="float: left;"><a  href="guestlist.php">Guest List</a></li>
  <li style="float: left;"><a  href="viewfeedback.php">Feedbacks</a></li>  
  <li style="float: left;"><a class="active" href="viewcontact.php">Contact Messages</a></li>
</ul>
</br></br></br></br></br></br>
<div align="center">

<?php
	@session_start(); 
	$con = mysqli_connect("localhost","root","","hotel"); 
	if(!$con) 
	{      
		die("Could not connect".mysqli_error($con)); 
	} 
		else
		{
			if (session_status() == PHP_SESSION_DISABLED)
			{
			echo"<script>alert('login 1st')</script>";
			header('Location: viewcontact.php');
			
			}
			else
			{
		
		$result = mysqli_query($con,"SELECT * FROM contact_us "); 
		if($result)
		{
				echo "<table class=\"myTable\">  
				<tr>  
					<th>Name</th>   
					<th>Company</th>   
					<th>Email</th>   
					<th>Mobile no</th> 
					<th>Messages</th>          
				</tr>  ";  
				echo "</thead>";
				echo "<tbody>";
			
				while($row = mysqli_fetch_array($result))   
				{
					echo "<td>".$row['Name']."</td>";   
					echo "<td>".$row['Company']."</td>";   
					echo "<td>".$row['Email']."</td>";   
					echo "<td>".$row['Mobile_no']."</td>";  
					echo "<td>".$row['Message']."</td>";      
					echo "</tr>"; 
				}
				echo "</tbody>";
				echo "</table>";
				
		}
			else
			{
			echo "<script>alert('Error in displaying messages')</script>";
			}	
			}
        }
		mysqli_close($con);
	?>	
</div>
</body>
</html> 