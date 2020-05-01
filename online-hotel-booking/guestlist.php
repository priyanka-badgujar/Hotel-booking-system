<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
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
<ul>
  <li style="float: left;"><img src="images/logo.png"  width=250px height=80px></li>
  <li style="float: right;"><a href="logout.php"><button class="button">Logout</button></a></li>
  </br>
    <li style="float: left;"><a  href="addroom.php">Room</a></li>
  <li style="float: left;"><a  class="active" href="guestlist.php">Guest List</a></li>
  <li style="float: left;"><a  href="viewfeedback.php">Feedbacks</a></li>  
  <li style="float: left;"><a  href="viewcontact.php">Contact Messages</a></li>
</ul>
</br></br></br></br></br>
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
		
		$result = mysqli_query($con,"SELECT * FROM guest_details "); 
		if($result)
		{
				echo "<table class=\"myTable\">  
				<tr>    
					<th>Name of Guests</th>   
					<th>Type of Room</th>   
					<th>Room Number</th> 
					<th>Checkin Date</th> 
          <th>Checkout Date</th>
        	<th>No of Adults</th>
         <th>No of Childs</th>                                    
				</tr>  ";  
				echo "</thead>";
				echo "<tbody>";
			
				while($row = mysqli_fetch_array($result))   
				{   
					echo "<td>".$row['Name']."</td>";  
          echo "<td>".$row['room_type']."</td>";   
					echo "<td>".$row['room_no']."</td>";  
          echo "<td>".$row['checkin_date']."</td>";   
					echo "<td>".$row['checkout_date']."</td>";  
          echo "<td>".$row['adult']."</td>";   
					echo "<td>".$row['child']."</td>";   
					
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
</body>
</html> 