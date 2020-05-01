<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>
  .roominfo {
                    margin: 10px 60px;
                    width: 30%;
                    padding: 1em 50px 1em;
                     color:#7f6b00;
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 22px;
                    background-color:white;
                }
.slideshow {
  max-width: 1000px;
  position: fixed;
  float: left;
  margin: auto;
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
                        <input type="submit" class="btn" value="Show Rooms">
                        <input type="reset" class="btn" value="Reset">
                    </form>
                    </center>
      </div>
<div style="float:left" class="slideshow">
<div class="mySlides fade">
  <img src="images/e.jpg" width="100%" height="60%">
</div>

<div class="mySlides fade">
  <img src="images/f.jpg" width="100%" height="60%" >
</div>

<div class="mySlides fade">
  <img src="images/g.jpg" width="100%" height="60%" >
</div>

<div class="mySlides fade">
  <img src="images/h.jpg" width="100%" height="60%">
</div>
<div class="mySlides fade">
  <img src="images/i.jpg" width="100%" height="60%" >
</div>

<div class="mySlides fade">
  <img src="images/j.jpeg" width="100%" height="60%">
</div>
<div class="mySlides fade">
  <img src="images/j.jpeg" width="100%" height="60%">
</div>
<div style="text-align:left">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 3 seconds
}
</script>

 
</body>
</html> 