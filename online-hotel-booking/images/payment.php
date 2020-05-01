 <?php
                @session_start(); 
                $con = mysqli_connect("localhost","root","","hotel"); 
                $user = $_SESSION['user']  ;
                $roomno =  $_SESSION['id'];
                $_SESSION['fromdate'] = $_GET['fromdate'];
                $_SESSION['todate'] = $_GET['todate'];
                $_SESSION['person'] = $_GET['person'];
                $_SESSION['child'] = $_GET['child'];               
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOTEL BOOKING SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <script type="text/javascript">
		function validate()
		{
             if( document.myForm.owner.value == "" ) 
            {
                alert( "Please provide Owner name!" ); 
                document.myForm.owner.focus();
                return false;
            } 
         if( document.myForm.cvv.value == "" ) 
            {
                alert( "Please provide cvv!" ); 
                document.myForm.cvv.focus();
                return false;
            } 
         if( document.myForm.cardnumber.value == "" ) 
            {
                alert( "Please provide card number!" ); 
                document.myForm.cardnumber.focus();
                return false;
            } 
         if( document.myForm.expdate1.value == "-1" ) 
            {
                alert( "Please provide expiry month!" ); 
                document.myForm.expdate1.focus();
                return false;
            } 
            if( document.myForm.expdate2.value == "-1" ) 
            {
                alert( "Please provide expiry year" ); 
                document.myForm.expdate2.focus();
                return false;
            } 
			return( true );
            confirm("Are you sure you want to submit");
            document.myForm.submit.onsubmit();
		}
	</script>
	<style type="text/css">
		.myTable { background-color:#eee;border-collapse:collapse;text-align:left;font-size:22px;width:80%;}
		.myTable td { background-color:black ;color:#7f6b00; }
		.myTable td, .myTable th { padding:10px; }
        .creditCardForm
                {
                
                     width: 48%;
                      margin: 1px;
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
             <div style="float:right" class="creditCardForm">
                            <div class="heading">
                                <h1>Make Payment</h1>
                            </div>
                            <div class="payment">
                                <form action="payment1.php" name="myForm" onsubmit="return(validate());">
                                    <div class="form-group owner">
                                        <label for="owner">Owner</label>
                                        <input type="text" class="form-control" id="owner" name="owner">
                                    </div>
                                    <div class="form-group CVV">
                                        <label for="cvv">CVV</label>
                                        <input type="text" class="form-control" id="cvv" name="cvv">
                                    </div>
                                    <div class="form-group" id="card-number-field">
                                        <label for="cardNumber">Card Number</label>
                                        <input type="text" class="form-control" id="cardNumber" name="cardnumber">
                                    </div>
                                   
                                        <label>Expiration Date</label>
                                       
                                                <select  name="expdate1" type="number">
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
                                      
                                                <select  name="expdate2"  type="number">
                                                    <option value="-1">--Select--</option>
                                                    <option value="17"> 2017</option>
                                                    <option value="18"> 2018</option>
                                                    <option value="19"> 2019</option>
                                                    <option value="20"> 2020</option>
                                                    <option value="21"> 2021</option>
                                                </select>
                                   
                                    <div class="form-group" id="credit_cards" >
                                        <img src="images/visa.jpg" id="visa">
                                        <img src="images/mastercard.jpg" id="mastercard">
                                        <img src="images/amex.jpg" id="amex">
                                    </div>
                                    <div class="form-group" id="pay-now">
                                        <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                                    </div>
                                </form>
                            </div>
      </div>


      <div style="float:left" class="bookroom">
                   
            <?php
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
                                                        echo '<img height="60%" width="80%" src="data:image;base64,'.$row[2].' ">';
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

















