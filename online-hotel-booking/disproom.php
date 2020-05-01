<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<style>
#one {
        width:31%; 
        float: left;
        background-color:white;
        padding : 10px;
        margin :15px;
        font-size:26px;
        color:#0b0f3d;
     }
#two { float: left; }
#three { float: right; clear: none; }
</style>
</head>

<body>
<ul>
  <li style="float: left;"><img src="images/logo.png"  width=250px height=80px></li>
  <li style="float: right;"><a href="logout.php"><button class="button">Logout</button></a></li>
  </br>
    <li style="float: left;"><a class="active" href="addroom.php">Room</a></li>
  <li style="float: left;"><a  href="guestlist.php">Guest List</a></li>
  <li style="float: left;"><a  href="viewfeedback.php">Feedbacks</a></li>  
  <li style="float: left;"><a  href="viewcontact.php">Contact Messages</a></li>
</ul>
</br></br></br></br></br></br>



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
                                
                                  while($row = mysqli_fetch_array($result))   
                                  {   
                                   
                                      echo '<div id="one"><img height="300" width="450" src="data:image;base64,'.$row[2].' ">
                                      <br><div id="two"><strong>'.$row['Room_Type'].'</strong></div><div id="three"><strong> '.$row['Price'].'/-<strong></div></div>';
                                      
                                     
                                  }   
                            }
                              else
                              {
                              echo "<script>alert('Error while displaying Rooms')</script>";
                              }	
                      }
                }
            mysqli_close($con);
          ?>	

</body>
</html> 