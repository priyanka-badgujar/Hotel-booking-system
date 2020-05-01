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
   <li style="float: right;"><a href="login.php"><button class="button">Sign in</button></a></li>
  </br>
  <li style="float: left;"><a  href="index.php">Home</a></li>
  <li style="float: left;"><a   href="room.php">Rooms</a></li>
  <li style="float: left;"><a  href="about.php">About</a></li>
  <li style="float: left;"><a class="active"  href="contact.php">Contact</a></li>  
</ul>
</br></br></br></br></br>
<center>
  <div class="banner-top">
     <form action="contact1.php" name="myForm"  method="POST">
         <table align="center">
            <tr>
            <td>Name</td>
            <td><input type="text"  name="name" required></td>
            </tr>
            <tr>
            <td> Company</td>
            <td><input type="text"  name="company" required></td>
            </tr>
             <tr>
            <td>Email ID</td>
            <td> <input type="email"  name="e_id" required></td>
            </tr>
            <tr>
            <td> Mobile No</td>
            <td> <input type="number"  name="mobile" required></br></td>
            </tr>
            <tr>
            <td> Message</td>
            <td><textarea rows="3" cols="20" name="message" required></textarea></td>
            </tr>
        </table>
        </br>
        <input type="submit" class="btn" value="Submit">
        <input type="reset" class="btn" value="Reset">
    </form>
    </center>
    </div>

</body>
</html> 