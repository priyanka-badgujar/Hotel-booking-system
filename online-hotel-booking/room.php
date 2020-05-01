<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<style type="text/css">
		.myTable { background-color:#eee;border-collapse:collapse;text-align:left;font-size:20px; 
    width :75%;}
		.myTable th { background-color: #3A5795;color:white; }
	.myTable tbody, .myTable th { padding:10px;border:1px solid #3A5795; }
  table, td, th {    
   
    text-align: left;
    font-size : 25px;
    color:#27408B;
    
}
</style>
</head>
<body>
<ul>
  <li style="float: left;"><img src="images/logo.png"  width=250px height=80px></li>
 <li style="float: right;"><a href="register.php"><button class="button">Sign Up</button></a></li>
   <li style="float: right;"><a href="login.php"><button class="button">Sign in</button></a></li>
  </br>
  <li style="float: left;"><a  href="index.php">Home</a></li>
  <li style="float: left;"><a   class="active" href="room.php">Rooms</a></li>
  <li style="float: left;"><a  href="about.php">About</a></li>
  <li style="float: left;"><a href="contact.php">Contact</a></li> 
</ul>
</br></br></br></br></br>
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
            
                    $result = mysqli_query($con,"SELECT * FROM room_details "); 
                    if($result)
                    {
                         	echo "<table class=\"myTable\">  
                          <tr>  
                            	<th>Rooms</th>   
                              <th>Information</th>   
                              <th>Price</th>           
                          </tr>  ";  
                          echo "</thead>";
                         
                        
                          while($row = mysqli_fetch_array($result))   
                          {   
                             echo "<tbody>";
                             
                              echo ' <tr> 
                                      <td><img height="300" width="550" src="data:image;base64,'.$row[2].' "></td>
                                      <td>Room No:'.$row['Room_no'].'<br>'.$row['Room_Type'].'<br>Max Adult:'.$row['Max_Adult'].'
                                            <br>Max Child:'.$row['Max_Child'].'<br>'.$row['WiFi'].'<br>
                                            '.$row['Breakfast'].'<br>'.$row['Parking'].'
                                      </td>
                                      <td><strong>'.$row['Price'].'/-</strong><br><a href="login.php"><input type="submit" class="btn" value="Book Now"></a></td>
                                  </tr>';
                              
                              echo "</tbody>";
                          }
                          
                          echo "</table>";    
                    }
                      else
                      {
                      echo "<script>alert('Error while displaying Rooms')</script>";
                      }	
              }
        }
		mysqli_close($con);
	?>	
</div>

 
</body>
</html> 

