<html>
<style>
{font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

h1 {
  color:#1ABCCD;
  font-family: Helvetica;
  text-align: center;
  font-size: 150%;
  border: 1px solid powderblue;
  padding: 30px;
  margin: 50px;
  font-style: italic;
  background-color: #e6f5ff;
}

h3 {
  color: #0C95C4;
  font-family: Helvetica;
  text-align: center;
  font-size: 100%;
  border: 1px solid powderblue;
  padding: 30px;
  margin: 25px;
  background-color: #e6f5ff;
}
h4{
  text-align: center;
  font-style: italic;
  font-family: Arial;
}

table {
  border-collapse: collapse;
  width: 100%;
  text-align: left;
  color: #0C95C4;
  font-family: Helvetica;
  font-size: 100%;

}

th, td {
  text-align: left;
  padding: 8px;
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
  background-color: dodgerblue;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}




</style>


<body>

<h1>Please check your details : </h1>
<br>
<h3>

<?php echo "You have registered in a team of ".$_POST["teamno"];?> <br>
<?php echo "Details of your team members: ";?> <br> <br>
<table>
<tr><th><?php echo "Team member 1:"?>
<?php echo $_POST["usrnm"];?><br></th>
<th><?php echo "Email ID :" .$_POST["email"];?><br></th>
<th><?php echo "Contact :" .$_POST["contact"];?> <br></th>
<th><?php echo "Gender :" .$_POST["gender"];?><br></th>
<th><?php echo "Course Studying :" .$_POST["course"];?><br></th>
<th><?php echo "Year :" .$_POST["year"];
$n=$_POST["teamno"]; ?> </th></tr><br>
</table>

<?php

if ($n=="2")
{
 echo "Team member 2: ".$_POST["usrnm1"];
}
else
{
 echo "Team member 2: ".$_POST["usrnm1"];?><br>
<?php	echo "Team member 3: ".$_POST["usrnm2"];
} ?>

</h3>


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
$g=$_POST["teamno"];
$h=$_POST["usrnm1"];
$i=$_POST["usrnm2"];


$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
  die("Connection failed" . $conn->connect_error);

}
echo "  ";

/*$sql="create table Drone(username varchar(20),email varchar(30),contact varchar(10),gender varchar(15),course varchar(20),year varchar(1),teamno varchar(5),member1 varchar(20),member2 varchar(30))";
if($conn->query($sql)==TRUE)
{
  echo "table successfully created";
}
else
{
  echo "error" . $conn->error;
}*/


$sql="insert into Drone values('$a','$b','$c','$d','$e','$f','$g' ,'$h','$i')";
if ($conn->query($sql)==TRUE)
{
   echo "  <h4 > Thank you for succesfully registering with us! ";

}
else {
  echo "Sorry! Please try filling the form again" . $conn->error;
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
