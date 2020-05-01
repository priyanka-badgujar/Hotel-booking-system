 <?php
                @session_start(); 
                $con = mysqli_connect("localhost","root","","hotel"); 
                $user = $_SESSION['user']  ;
                $check_in = $_GET['fromdate'];
                $check_out = $_GET['todate'];
                $person = $_GET['person'];
                $child = $_GET['child'];
                $_SESSION['fromdate'] = $_GET['fromdate'];
                $_SESSION['todate'] = $_GET['todate'];
                $_SESSION['person'] = $_GET['person'];
                $_SESSION['child'] =   $_GET['child'];     
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOTEL BOOKING SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
    <script type="text/javascript">
		function validate()
		{
             if( document.myForm.fromdate.value == "" ) 
            {
                alert( "Please provide checkin date!" ); 
                document.myForm.fromdate.focus();
                return false;
            } 
         if( document.myForm.todate.value == "" ) 
            {
                alert( "Please provide checkout Date!" ); 
                document.myForm.todate.focus();
                return false;
            } 
         if( document.myForm.person.value == "" ||  document.myForm.person.value > "2") 
            {
                alert( "Please provide appropriate No of Adults!" ); 
                document.myForm.person.focus();
                return false;
            } 
         if( document.myForm.child.value == "" || document.myForm.child.value > "2") 
            {
                alert( "Please provide appropriate No of Child!" ); 
                document.myForm.child.focus();
                return false;
            } 
            if( document.myForm.name.value == "" ) 
            {
                alert( "Please provide your Name" ); 
                document.myForm.name.focus();
                return false;
            } 
         if( document.myForm.mbno.value == "" ) 
            {
                alert( "Please insert Mobile No" ); 
                document.myForm.mbno.focus();
                return false;
            } 
            if( document.myForm.email_id.value == "" ) 
            {
                alert( "Please insert Email ID" ); 
                document.myForm.email_id.focus();
                return false;
            } 
			return( true );
            confirm("Are you sure you want to submit");
            document.myForm.submit.onsubmit();
		}
	</script>
	<style type="text/css">
			.myTable { background-color:#eee;border-collapse:collapse;text-align:left;font-size:20px; 
    width :110%;}
            .myTable th { background-color: #3A5795;color:white; }
            .myTable tbody, .myTable th { padding:10px;border:1px solid #3A5795; }
            table, td, th {    
            
                text-align: left;
                font-size : 25px;
                color:#27408B;
            }
                .btn6{
                background-color: orange;
                border: none;
                color: white;
                font-weight:bold;
                padding: 10px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 18px;
                margin: 4px 2px;
                cursor: pointer;
            }
        .roominfo {
                    margin: 20px 20px;
                    width: 30%;
                    padding: 1em 40px 1em;
                     color:#7f6b00;
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 22px;
                    background-color:white;
                }
        .bookroom {
                    float: left;
                    margin : 10px;
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
                    <center><div><h2></br>Book Your Room:</h2></div></center>
                    <center>
                    <form action="bookroom.php" name="myForm" method="get" onsubmit="return(validate());">
                        <table align="center">
                            <tr>
                            <td>From Date:</td>
                            <td><input type="date"  name="fromdate"></td>
                            </tr>
                            <tr>
                            <td> To Date:</td>
                            <td><input type="date"  name="todate"></td>
                            </tr>
                            <tr>
                            <td>No of Adults:</td>
                            <td><input type="number" name="person"></td>
                            </tr>
                            <tr>
                            <td>No of Childs:</td>
                            <td><input type="number" name="child"></td>
                            </tr>
                         </table>
                        </br>
                        <input type="submit" class="btn" value="Show Room">
                        <input type="reset" class="btn" value="Reset">
                    </form>
                    </center>
      </div>


      <div style="float:left" class="bookroom">
                   
          
    <?php
	     $result = mysqli_query($con,"SELECT * FROM room_details WHERE Room_no NOT IN 
         (SELECT DISTINCT room_no FROM guest_details WHERE (checkin_date >= '$check_in' 
         AND checkout_date <= '$check_out') OR ('$check_in' BETWEEN  checkin_date
         AND checkout_date ) OR ('$check_out' BETWEEN  checkin_date
         AND checkout_date ))"); 

                 
                    if($result)
                    {
                         	echo "<table class=\"myTable\">  ";  
                        
                          while($row = mysqli_fetch_array($result))   
                          {   
                             echo "<tbody>";
                             
                              echo ' <tr> 
                                      <td><img height="300" width="550" src="data:image;base64,'.$row[2].' "></td>
                                      <td>Room No:'.$row['Room_no'].'<br>'.$row['Room_Type'].'<br>Max Adult:'.$row['Max_Adult'].'
                                            <br>Max Child:'.$row['Max_Child'].'<br>'.$row['WiFi'].'<br>
                                            '.$row['Breakfast'].'<br>'.$row['Parking'].'
                                      </td>
                                      <td><strong>'.$row['Price'].'/-</strong><br><a href=payment.php?id='.$row["Room_no"].'><input type="submit" name="book" class="btn6" value="Book Now"></a></td>
                                  </tr>';

                                     

                              echo "</tbody>";
                          }
                          
                          echo "</table>";    
                    }
                    else
                    {
                         echo "<script>alert('Please logged in first')</script>";
                    }
  		mysqli_close($con);
	?>	
 
      </div>  
</div>   
</body>
</html>




