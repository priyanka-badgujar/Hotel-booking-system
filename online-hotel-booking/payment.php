<?php
                   @session_start(); 
                        $con = mysqli_connect("localhost","root","","hotel"); 
                        $user = $_SESSION['user']  ;
                         $roomno = $_GET['id'];
                       $_SESSION['id'] = $_GET['id'];   
                                                                                  
?> 

<!DOCTYPE html>
<html>
<head>
	<title>HOTEL BOOKING SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
    
<style type="text/css">
		.myTable { background-color:#eee;border-collapse:collapse;text-align:left;font-size:22px;width:80%;}
		.myTable td { background-color:black ;color:#7f6b00; }
		.myTable td, .myTable th { padding:10px; }
        .roominfo {
                margin: 10px 60px;
                width: 40%;
                padding: 1em 50px 1em;
               color:#7f6b00;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 22px;
                  background-color:#ffffff ;
                }
        .bookroom {
            max-width: 1000px;
            position: fixed;
            float: left;
            margin: 10px;
            }
	</style>
</head>
<body>
<ul>
  <li style="float: left;"><img src="images/logo.png"  width=250px height=80px></li>
   <li style="float: right;"><a href="logout.php"><button class="button">Logout</button></a></li>
  </br>
  <li style="float: left;"><a  class="active"  href="userroom.php">Rooms</a></li>
  <li style="float: left;"><a  href="account.php">My Account</a></li>
  <li style="float: left;"><a  href="feedback.php">Feedback</a></li> 
</ul>
</br></br></br></br></br>

<div>
      <div style="float:right" class="roominfo">   
                     <center><div><h2></br>MAKE PAYMENT:</h2></div></center>
                        <center>
                        <form action="payment1.php"  name="myForm" onsubmit="return(validate());">
                          
                            <table align="center">
                                <tr>
                                <td>Owner:</td>
                                <td><input type="text"  name="owner" required></td>
                                </tr>
                                <tr>
                                <td>CVV:</td>
                                <td><input type="text" maxlength="4"  name="cvv" required></td>
                                </tr>
                                <tr>
                                <td>Card Number:</td>
                                <td><input type="text"  maxlength="16"  name="cardnumber"  required></td>
                                </tr>
                                <tr>
                                <td>Expiry date:</td>
                                <td>                <select  name="expdate1" type="number" required>
                                                    <option value="-1">--Select--</option>
                                                    <option value="01">January</option>
                                                    <option value="02">February </option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                      
                                                <select  name="expdate2"  type="number" required>
                                                    <option value="-1">--Select--</option>
                                                    <option value="17"> 2017</option>
                                                    <option value="18"> 2018</option>
                                                    <option value="19"> 2019</option>
                                                    <option value="20"> 2020</option>
                                                    <option value="21"> 2021</option>
                                                </select>
                                    </td>
                                </tr>
                             <?php
                                  @  $fromdate = $_GET['fromdate'];
                                  @  $todate = $_GET['todate'];
                                  @  $person =  $_GET['person'];
                                @ $child =  $_GET['child'];
                                echo '<input type="hidden" name="fromdate" value="'.htmlentities($fromdate).'">';
                                echo '<input type="hidden" name="todate" value="'.htmlentities($todate).'">';
                                echo '<input type="hidden" name="child" value="'.htmlentities($person).'">';
                                echo '<input type="hidden" name="person" value="'.htmlentities($child).'">';
                              ?>
                            </table>
                            </br> </br> 
                            <input type="submit" class="btn" value="Make Payment">
                            <input type="reset"  class="btn" value="Reset">
                            </br>  </br>  </br>  
                        </form>
                        </center>                
                   
      </div>


      <div style="float:left" class="bookroom">
                   
            <?php
                
                        
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
                    
                                    $result = mysqli_query($con,"SELECT * FROM room_details WHERE Room_no='$roomno'"); 
                                    if($result)
                                    {
                                                echo "<table class=\"myTable\">   ";  
                                                echo "</thead>";
                                                echo "<tbody>";
                                            
                                                while($row = mysqli_fetch_array($result))   
                                                {
                                                        echo '<img height="60%" width="85%" src="data:image;base64,'.$row[2].' ">';
                                                        echo ' <tr> 
                                                                <td>Price per day:</td>
                                                                <td>'.$row['Price'].'/-</td>
                                                                <td>Max Adults:</td>
                                                                <td>'.$row['Max_Adult'].'</td>
                                                                </tr>';
                                                        echo ' <tr> 
                                                                <td>Room Type:</td>
                                                                <td>'.$row['Room_Type'].'</td>
                                                                <td>Max Child:</td>
                                                                <td>'.$row['Max_Child'].'</td>
                                                                </tr>';
                                                       
                                                        echo ' <tr> 
                                                                <td>Other Facilities:</td>
                                                                <td>'.$row['WiFi'].','.$row['Breakfast'].',<br>'.$row['Parking'].'</td>
                                                                <td></td>
                                                                <td></td>
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
</div>   
</body>
</html>

















