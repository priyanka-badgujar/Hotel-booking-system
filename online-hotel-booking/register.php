<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <style>
    body {
        margin:0;
        padding:0;
        background-size:cover;
        background-attachment: fixed;
        background-position: center;
    }
    </style>
	<script type="text/javascript">
		function validate()
		{
             if( document.myForm.name.value == "" ) 
            {
                alert( "Please provide your Name!" ); 
                document.myForm.name.focus();
                return false;
            } 
         if( document.myForm.username.value == "" ) 
            {
                alert( "Please provide your user id!" ); 
                document.myForm.username.focus();
                return false;
            } 
         if( document.myForm.password.value == "" ) 
            {
                alert( "Please provide your password!" ); 
                document.myForm.password.focus();
                return false;
            } 
         if( document.myForm.confirmpws.value == "" ) 
            {
                alert( "Please confirm your password!" ); 
                document.myForm.confirmpwd.focus();
                return false;
            } 
         if( document.myForm.mobno.value == "" ||  document.myForm.mobno.value.length != 10 || document.myForm.mobno.value < 1000000000 ) 
            {
                alert( "Please provide your mobile number in the format ##########!" ); 
                document.myForm.mobno.focus();
                return false;
            } 
         if( document.myForm.gender.value == "" ) 
            {
                alert( "Please select Gender!" ); 
                document.myForm.gender.focus();
                return false;
            } 
            if( document.myForm.email.value == "" ) 
            {
                alert( "Please provide your email id!" ); 
                document.myForm.email.focus();
                return false;
            } 
         if( document.myForm.dob.value == "" ) 
            {
                alert( "Please provide your Date of Birth in the format yyyy-mm-dd!" ); 
                document.myForm.dob.focus();
                return false;
            } 
         if( document.myForm.address.value == "" ) 
            {
                alert( "Please provide address!" ); 
                document.myForm.address.focus();
                return false;
            } 
         if( document.myForm.city.value == "" ) 
            {
                alert( "Please provide City name!" ); 
                document.myForm.city.focus();
                return false;
            } 
         if( document.myForm.state.value == "" ) 
            {
                alert( "Please provide State name!" ); 
                document.myForm.state.focus();
                return false;
            } 
         if( document.myForm.country.value == "" ) 
            {
                alert( "Please provide country name!" ); 
                document.myForm.country.focus();
                return false;
            } 
			return( true );
            confirm("Are you sure you want to submit");
            document.myForm.submit.onsubmit();
		}
	</script>
</head>
<body background="images/terrace.jpg">
   <ul>
    <li style="float: left;"><img src="images/logo.png"  width=250px height=80px></li>
    <li style="float: right;"><a href="register.php"><button class="button">Sign Up</button></a></li>
    <li style="float: right;"><a href="login.php"><button class="button">Sign in</button></a></li>
    </br>
    <li style="float: left;"><a   href="index.php">Home</a></li>
    <li style="float: left;"><a   href="room.php">Rooms</a></li>
    <li style="float: left;"><a  href="about.php">About</a></li>
    <li style="float: left;"><a href="contact.php">Contact</a></li> 
   </ul>
</br></br></br>
   <div  class="banner-top">
    <center><h2><font color="orange">Create a New account </font></h2></center>
    <center>
    <form action="register1.php" name="myForm" onsubmit="return(validate());" method="post">
         <table align="center">
            <tr>
            <td>Name</td>
            <td><input type="text"  name="name"></td>
            </tr>
            <tr>
            <td> Username</td>
            <td><input type="text"  name="username"></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
            </tr>
            <tr>
            <td> Confirm Password  </td>
            <td><input type="password" name="confirmpwd"></td>
            </tr>
            <tr>
            <td> Mobile</td>
            <td> <input type="text"  maxlength="10"  name="mobno"></td>
            </tr>
            <tr>
            <td>Gender</td>
            <td> <input type="radio" name="gender" value="male" />Male
            <input type="radio" name="gender" value="female" />Female</td>
            </tr>
            <tr>
            <td>Email ID</td>
            <td> <input type="email"  name="email"></td>
            </tr>
            <tr>
            <td> Date of Birth</td>
            <td> <input type="date"  name="dob"></td>
            </tr>
            <tr>
            <td>Address</td>
            <td> <input type="text"  name="address"></td>
            </tr>
            <tr>
            <td> City</td>
            <td> <input type="text"  name="city"></td>
            </tr>
            <tr>
            <td> State</td>
            <td> <input type="text"  name="state"></td>
            </tr>
            <tr>
            <td> Country </td>
            <td> <input type="text"  name="country"></td>
            </tr>
        </table>
        </br>
        <input type="submit" class="btn" value="Submit">
        <input type="reset" class="btn"  value="Reset">
    </form>
    </center>
    <div>
</body>
</html>