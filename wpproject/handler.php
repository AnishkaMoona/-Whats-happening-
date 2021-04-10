
<!DOCTYPE html>
<html>
<?php session_start();?>
<head>

	<link href="//db.onlinewebfonts.com/c/99f7456dfd298c4545c7687ce8d5539d?family=Sansation+Light" rel="stylesheet" type="text/css"/>

	<style>
		@import url(//db.onlinewebfonts.com/c/99f7456dfd298c4545c7687ce8d5539d?family=Sansation+Light);
body{
	background: #8bbdd9;
}




		div.style{
			font-style: bold;
			font-weight: 50px;
			font-size:25px;
			text-align: center;
			padding-top: 150px;

			padding-bottom: 150px;
			margin-right: 130px;
			margin-left: 130px;
			margin-top: 150px;

			background-color: #ffac;
		}
		.example_a:hover {
background: black;
letter-spacing: 1px;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10p;
box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.4s ease 0s;
}
.example_a {
color: #fff !important;
text-transform: uppercase;
text-decoration: none;
background: #8bbdd9;
padding: 20px;
border-radius: 5px;
display: inline-block;
border: none;
transition: all 0.4s ease 0s;
}
.column {
  float: left;
  width: 50%;
  padding: 10px;

}

	</style>

</head>
<body>
<?php

if(isset($_SESSION["name"]))
{



echo "<div class=style>";
 echo "Currently   " .$_SESSION["name"];  echo " is logged in " ;
 echo "<br>"; echo "<br>";
 echo "<div class=button_cont align=center onclick='function1();'> <span class=glyphicon glyphicon-log-out>  </span>  <a class=example_a>  Log out </button> </a> </div>";
 echo "<br>";
 echo "     Come back soon to stay updated on the events!";
 echo "</div>";
}else echo "<meta http-equiv = 'refresh' content = '0.1; url = //localhost:8888/wpproject/log.php' />";

?>

<script>

function function1()
{
window.location="//localhost:8888/wpproject/signo.php";
}
</script>
</body>
</html>
