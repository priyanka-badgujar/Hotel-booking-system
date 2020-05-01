<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<style>
  
.btn5{
    background-color: dodgerblue;
    border: none;
    color: white;
      font-weight:bold;
    padding: 14px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
}

.addroom {
    margin: 3% auto 0;
    width: 100%;
    
    padding: 1em 50px 1em;
    color: white;
     font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    background: 	#3b5998;
}

.myTable { background-color:#eee;border-collapse:collapse;text-align:left;font-size:20px; 
    width :130%;margin:20px;}
		.myTable th { background-color: dodgerblue;color:white; }
	.myTable tbody, .myTable th { padding:10px;border:1px solid #3A5795; color:#27408B; font-size : 25px;}
 
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
</br></br></br>
<div>
<div style="float:right" ></br></br>
<a href="disproom.php"><button class="button">Display Rooms</button></a>
    <div class="addroom">
            <h3><font color="orange">ADD ROOM: </font></h3>
            <form action="addroom1.php" name="myForm"  method="POST" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td>Room Number</td>
                        <td><input type="number"  name="room_no" required></td>
                    </tr>
                    <tr>
                        <td>Room Picture</td>
                        <td><input type="file"  name="image" required></td>
                    </tr>
                    <tr>
                    <td>Room Type</td>
                      <td> 
                        <select name="roomtype" type="text">
                            <option value="-1">- - - - - -   Select   - - - - - -</option>
                            <option value="Deluxe Room">Deluxe Room</option>
                            <option value="Twin Room">Twin Room</option>
                            <option value="King Room">King Room</option>
                            <option value="Executive Room">Executive Room</option>
                          </select>
                    </td> 
                  </tr>
                  <td>Max Adult</td>
                      <td> 
                        <select name="maxadult" type="number">
                              <option value="-1">- - - - - -   Select   - - - - - -</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                    </td> 
                  </tr>
                    <td>Max Child</td>
                      <td> 
                        <select name="maxchild" type="number">
                              <option value="-1">- - - - - -   Select   - - - - - -</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                    </td> 
                  </tr>
                <tr>
                    <td>WiFi</td>
                      <td> 
                        <select name="wifi" type="text">
                              <option value="-1">- - - - - -   Select   - - - - - -</option>
                            <option value="Free WiFi">Free Wifi</option>
                            <option value="Wifi not included">Wifi not included</option>
                          </select>
                    </td> 
                  </tr>
                  <tr>
                    <td>Breakfast</td>
                      <td> 
                        <select name="breakfast" type="text">
                              <option value="-1">- - - - - -   Select   - - - - - -</option>
                            <option value="Free Breakfast">Free Breakfast</option>
                            <option value="Breakfast not Included">Breakfast not Included</option>
                          </select>
                    </td> 
                  </tr>
                    <tr>
                    <td>Parking</td>
                    <td> <input type="text"  name="parking" value="Free Parking" required></br></td>
                    </tr>
                    <tr>
                    <td>Price per day</td>
                    <td> <input type="number"  name="price" required></br></td>
                    </tr>
                    
                </table>
                </br> 
                <input type="submit" class="btn5" value="Add Room">
                <input type="reset" class="btn5" value="Reset">
            </form>   
        </div>
         <div class="addroom">
              <form action="delete.php" name="myForm"  method="POST" enctype="multipart/form-data">
                    <h3><font color="orange">Delete Room </font></h3>
                     <table >
                          <tr>
                              <td>Enter Room No:</td>
                              <td><input type="number"  name="rmno" required></td>
                          </tr>
                     </table></br>
                    <input type="submit" class="btn5" value="Delete Room">
                 <input type="reset" class="btn5" value="Reset"> 
              </form>
        </div>     
           
</div>

<div style="float:left" class="displayroom">
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
                                                
                                  </tr>  ";  
                                  echo "</thead>";
                                
                                
                                  while($row = mysqli_fetch_array($result))   
                                  {   
                                    echo "<tbody>";
                                    
                                      echo ' <tr> 
                                              <td><img height="300" width="450" src="data:image;base64,'.$row[2].' "></td>
                                              <td>Room No:'.$row['Room_no'].'<br>'.$row['Room_Type'].'<br>Max Adult:'.$row['Max_Adult'].'
                                                    <br>Max Child:'.$row['Max_Child'].'<br>'.$row['WiFi'].'<br>
                                                    '.$row['Breakfast'].'<br>'.$row['Parking'].'<br>Price:'.$row['Price'].'/-
                                              </td>
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
</div>


</body>
</html> 