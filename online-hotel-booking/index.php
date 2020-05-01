<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<style>
.banner {
    margin: 3% auto 0;
    width: 30%;
    padding:0;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 24px;
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
  <li style="float: right;"><a href="register.php"><button class="button">Sign Up</button></a></li>
   <li style="float: right;"><a href="login.php"><button class="button">Sign in</button></a></li>
  </br>
  <li style="float: left;"><a  class="active" href="index.php">Home</a></li>
  <li style="float: left;"><a   href="room.php">Rooms</a></li>
  <li style="float: left;"><a  href="about.php">About</a></li>
  <li style="float: left;"><a href="contact.php">Contact</a></li>
  

</ul>
</br></br></br></br></br>

<div>
<div style="float:right" class="banner">
   <strong><p>Best hotel room Deals in Affordable Prizes</p></strong>
   <p> <span style="color:orange" style="font-size:50px">EXCLUSIVE OFFER:</span></br>20% discount on first booking...
   </br><span  style="font-size:15px" >Terms and Condition applied</span></p>
  <a href="login.php"> <input type="submit" class="btn" value="Book Now"></a>
</div>

<div style="float:left" class="slideshow">
<div class="mySlides fade">
  <img src="images/a.jpg" width="1050px" height="600px">
</div>

<div class="mySlides fade">
  <img src="images/b.jpg" width="1050px" height="600px" >
</div>

<div class="mySlides fade">
  <img src="images/c.jpg"width="1050px" height="600px" >
</div>

<div class="mySlides fade">
  <img src="images/e.jpg" width="1050px" height="600px">
</div>
<div class="mySlides fade">
  <img src="images/f.jpg" width="1050px" height="600px" >
</div>

<div class="mySlides fade">
  <img src="images/g.jpg" width="1050px" height="600px">
</div>

<div style="text-align:left">
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
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

</body>
</html> 




