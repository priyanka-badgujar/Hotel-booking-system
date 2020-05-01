<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>
</head>
<body>
<ul>
  <li style="float: left;"><img src="images/logo.png"  width=250px height=80px></li>
 <li style="float: right;"><a href="register.php"><button class="button">Sign Up</button></a></li>
   <li style="float: right;"><a  href="login.php"><button class="button">Sign in</button></a></li>
  </br>
  <li style="float: left;"><a   href="index.php">Home</a></li>
  <li style="float: left;"><a   href="room.php">Rooms</a></li>
  <li style="float: left;"><a  href="about.php">About</a></li>
  <li style="float: left;"><a href="contact.php">Contact</a></li> 
</ul>
</br></br></br></br></br>
<div class="banner-top">
<form action="login1.php" name="myForm"  method="POST" >

    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <input type="checkbox" checked="checked"> Remember me</br></br>
     <a href="register.php"><font color="white">   Create New Account</font></a></br></br>
      <center>
        <button type="submit" class="btn">Login</button>
        <button type="reset" class="btn">Reset</button>
      </center>    
</div>
</form>

</body>
</html> 

