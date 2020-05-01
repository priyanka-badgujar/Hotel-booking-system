<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
<ul>
  <li style="float: left;"><img src="images/logo.png"  width=250px height=80px></li>
 <li style="float: right;"><a href="logout.php"><button class="button">Logout</button></a></li>
  </br>
  <li style="float: left;"><a  href="userroom.php">Rooms</a></li>
  <li style="float: left;"><a  href="account.php">My Account</a></li>
  <li style="float: left;"><a  class="active" href="feedback.php">Feedback</a></li> 
</ul>
</br></br></br></br></br>
 <center><h2><font color="orange">Give your Feedback here...</font></h2></center>
  <div align="center"  bgcolor="white">
    <form action="feedback1.php" method="POST">
     <textarea rows="8" cols="45" name="feedback"></textarea></br></br>
        <center>
        <button type="submit" class="btn1">Submit</button>
        <button type="reset" class="btn1">Reset</button>
      </center>
    </form>
 </div>

</body>
</html> 