<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css" />
<style>
.banner {
    margin: 3% auto 0;
    width: 53%;
    padding: 1em 50px 1em;
    color: white;
     font-family: Arial, Helvetica, sans-serif;
    font-size: 22px;
    background: 	#3b5998;
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
  <li style="float: left;"><a  href="index.php">Home</a></li>
  <li style="float: left;"><a   href="room.php">Rooms</a></li>
  <li style="float: left;"><a   class="active" href="about.php">About</a></li>
  <li style="float: left;"><a href="contact.php">Contact</a></li> 
</ul>
</br></br></br></br></br>

<div>
<div style="float:right" class="banner"><p>Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.

These bright, light filled spaces are among the largest accommodations offered by luxury hotels in Mumbai. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining beside breathtaking vistas.

Equipped with complimentary high speed Internet access for up to four devices and served by a 24 hour personal butler, luxury accommodation at The Elite, Mumbai is designed to meet the needs of business and leisure travellers to the city.</p></div>

<div style="float:left" class="slideshow">
<div class="mySlides fade">
  <img src="images/a.jpg" width="70%" height="450px">
</div>

<div class="mySlides fade">
  <img src="images/b.jpg" width="70%" height="450px" >
</div>

<div class="mySlides fade">
  <img src="images/c.jpg" width="70%" height="450px" >
</div>

<div class="mySlides fade">
  <img src="images/h.jpg" width="70%" height="450px">
</div>
<div class="mySlides fade">
  <img src="images/i.jpg" width="70%" height="450px" >
</div>

<div class="mySlides fade">
  <img src="images/j.jpeg" width="70%" height="450px">
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
