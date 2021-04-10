<html>
<style>
{font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

h1 {
  color:#f2a580;
  font-family: Helvetica;
  text-align: center;
  font-size: 150%;
  border: 1px solid orange;
  padding: 30px;
  margin: 50px;
  font-style: italic;
  background-color: #fff0e6;
}

h2 {
  color: #E79E04;
  font-family: Helvetica;
  text-align: left;
  font-size: 100%;
  border: 1px solid orange;
  padding: 30px;
  margin: 15px;
  background-color: #fff0e6;
}
h4{
  text-align: center;
  font-style: italic;
  font-family: Arial;
}
button {
   display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #f2a580;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}


</style>
<body>
<h1>Please check your details below: <br></h1>
<h2> <?php echo "Name :       " .$_POST["usrnm"];?><br>
 <?php echo "Email ID :       " .$_POST["email"];?><br>
 <?php echo "Contact :        " .$_POST["contact"];?> <br>
 <?php echo "Gender :         " .$_POST["gender"];?><br>
<?php echo "Course Studying : " .$_POST["course"];?><br>
<?php echo "Year :            " .$_POST["year"];
$n=$_POST["option"]; ?> <br></h2>
<h4 style="text-align: center;font-style: normal;font-family: sans-serif;color:#954E10;font-size: 120%;"><?php echo "You have chosen to send  " . $n; ?> <br>

<?php

if ($n=="chocolates")
{
echo "Sending your friend " .$_POST["noofchoco"] . " of " .$_POST["option1"];
}
else
{
	echo "Sending your friend the message : " . $_POST["message"];
} ?>

</h4>
<h3 style="text-align: center;font-style: italic;font-family: Arial;color:#f2a580;"> Your friend's details : </h1>
<h2> <?php echo "Name :       " .$_POST["usrnm1"];?><br>
	<?php echo "Course Studying : " .$_POST["course1"];?><br>
<?php echo "Year :            " .$_POST["year1"];?>
</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="Anishka";

$a=$_POST["usrnm"];
$b=$_POST["email"];
$c=$_POST["contact"];
$d=$_POST["gender"];
$e=$_POST["course"];
$f=$_POST["year"];
$g=$_POST["usrnm1"];
$h=$_POST["course1"];
$i=$_POST["year1"];



$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
  die("Connection failed" . $conn->connect_error);

}
echo "  ";

/*$sql="create table FriendshipDay(username varchar(20),email varchar(30),contact varchar(10),gender varchar(15),course varchar(20),year varchar(1), username1 varchar(20) , course1 varchar(20) ,year1 varchar(1))";
if($conn->query($sql)==TRUE)
{
  echo "table successfully created";
}
else
{
  echo "error" . $conn->error;
}*/

$sql="insert into FriendshipDay values('$a','$b','$c','$d','$e','$f','$g', '$h' ,'$i')";
if ($conn->query($sql)==TRUE)
{
   echo " <h4> Thank you for succesfully registering with us! </h4> " ;
 //  <h4 style="text-align: center;font-style: italic;font-family: Arial;"> Thank you for succesfully registering with us! </h4>
}
else {
  echo " <h4> Sorry! Pls try filling the form again </h4>" . $conn->error;
}

?>
<h4 style="text-align: center"> <button onclick="myFunction1()" > Exit </button> </h4>
<script>
function myFunction1() {
  window.location='home1.php';

}
</script>

</body>
</html>
