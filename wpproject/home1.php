<!DOCTYPE html>
<html>
<?php session_start();?>
<head>
	<title> What's Happening? </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>


<style>
  footer.glyphicon{
     font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}


	.jumbotron{
		background-color:#FFAC;
		color:#414141;
	}
	.bg-yellow{
		background-color: #FFAC;
	}
	.container-fluid{
		padding: 60px 50px;
	}
	.fa {
  padding: 20px;
  font-size: 30px;
  width: 65px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}
	.fa:hover {
    opacity: 0.7;
}
	.fa-facebook{
		background: #3B5998;
		color: white;
	}
	.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.carousel-inner > .item > img {
  margin: 0 auto;

}

.navbar {
  margin-bottom: 0;
  background-color: #FFAC;
  z-index: 9999;
  border: 0;
  font-size: 12px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 4px;
  border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
  color: grey !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color: #f4511e !important;
  background-color: #fff !important;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

.dropbtn {
  display: inline-block;`
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #414141;
  font-size: 35px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
div.gallery {
  margin: 5px;
  border: 1px solid white;
  float: center;
  width: 100%;
  background-color:white;
  color: black;
  text-align:center;
}

div.gallery:hover {
  border: 1px white;
}
div.ss{
  width: 70%;
  height:70%;
  background-color: #FFAC;

}

.carousel .item {
  height: 600px;
}

.item img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;

}
div.desc{
  font-size:45px;

}

</style>
<body>


<?php
if(isset($_SESSION["name"]))
{
 $var="Welcome ".$_SESSION["name"];
}else $var="Sign Up Here";
?>


	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="//localhost:8888/wpproject/handler.php"><?php echo $var; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">COMMITTEES</a>
    <div class="dropdown-content">
      <a href="culturalcom.html">Cultural</a>
      <a href="tech.html">Technical</a>
        <li><a href="#opening">FAQs</a></li>
        <li><a href="#feed">FEEDBACK</a></li>
        <li><a href="#contact">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

	<div class="jumbotron text-center">
<h1> What's Happening? </h1> </div>
<div class="container-fluid">
  <div class="gallery">
  <a target="_blank" href="wh.jpg">
    <img src="images/wh.jpg" alt="Cinque Terre" width="100%" height="590%">
  </a>
  <div class="desc">ENROLL.ENGAGE.GROW. <br> </div> <br>
     <h4> What's Happening? is your one stop to know about and engage with all college related 'happening' activities and events at any time. <br> <br>
   Here you'll find all the details of the events as well as the registration links.</div> </h4>
</div>




</div>
<div class="container-fluid bg-yellow">
	<h2> <marquee direction="right"scrollamount="15"> UPCOMING EVENTS </marquee> </h2>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">

      <img src="images/pythn.jpg" alt="Dandiya">

    </div>

    <div class="item">

      <img src="images/Odr.jpg" alt="Friend">

    </div>

    <div class="item">

      <img src="images/dandiyaa.jpg" alt="Drone" >

    </div>
    <div class="item">

      <img src="images/friendshp.jpg" alt="Python">

    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>



<div class="container-fluid">

	<h2> Check out glimpse of our Past Events </h2> <br>
	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/Bdd.jpg" style="width:100%">
  <div class="text">Blood Donation Drive</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/ml.jpg" style="width:100%">
  <div class="text">Machine Learning</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/djn.jpg" style="width:100%">
  <div class="text">Neon DJ Night</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/Turf.jpg" style="width:100%">
  <div class="text">College Football Tournament </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"> </span>
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
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}
</script>
</div>
<div class="container-fluid bg-yellow">
	<p id="opening"> <h2> FAQs </h2> </p>

  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">	What is the criteria for enrolling for an event?</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        Most events do not have particular criteria unless mentioned otherwise in the event description.
    For example,Intra college events are only for college students and Inter College events are open to all.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> How do I make payment for registration? </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
         You can pay via cash or paytm.Paytm number and QR code is provided in the registration form.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> How do I get refund incase I can't come?</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
         If you request for a refund prior to 2 days or less of the event,we do not provide it.
     However,if you request in any other case,we do it via paytm only.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"> How do I volunteer for an event?</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
         To volunteer for any particular event,contact Forum : 9866782907.</div>
      </div>
    </div>
<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"> How do I redeem prize?</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
       Cash prizes can be redeemed through PayTm.
   All other kinds of prizes will be awarded to you on the day of event during prize distribution itself.</div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
	<p id="feed">
<h2> Have any suggestions/feebacks? Leave a comment below! </h2> </p>
<form action="" method="post">

	<textarea name="comments" id="comments" style="font-family:serif;" rows="8" cols="150">Help us improve..  </textarea> <br>
	<input type="submit" name="submit" value="Submit">
</form>
</div>
<div class="container-fluid bg-yellow">
	<p id="contact">
<h2> Get in touch with us directly </h2> </p>
<br>
<p><span class="glyphicon glyphicon-map-marker"></span> Mumbai,India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 7678018547</p>
      <p><span class="glyphicon glyphicon-envelope"></span> whatshappening@gmail.com</p>

<a href="https://www.facebook.com/Antra.Shankar.Cherryy" class="fa fa-facebook"> </a>
<a href="https://www.instagram.com/anishka_moona/" class="fa fa-instagram"> </a>
<a href="#" class="fa fa-google"> </a>
</div>
<footer class="container-fluid text-center">
  <a href="home1.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Made By Antra,Anishka,Forum. </p>
</footer>
</body>
</html>
