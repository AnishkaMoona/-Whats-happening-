<html>
<style>
{font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

h3 {
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
  margin: 25px;
  background-color: #fff0e6;
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

<h3>Please check your details below: <br></h3>
<h2> <?php echo "Name :       " .$_POST["usrnm"];?><br>
 <?php echo "Email ID :       " .$_POST["email"];?><br>
 <?php echo "Contact :        " .$_POST["contact"];?> <br>
 <?php echo "Gender :         " .$_POST["gender"];?><br>
<?php echo "Course Studying : " .$_POST["course"];?><br>
<?php echo "Year :            " .$_POST["year"];
$x = $_POST["noofpasses"];?> <br>
<?php echo "Number of passes : " .$x;?>

</h2>

<br> <h4 style="text-align:center; color:solid orange;font-family: Arial"><?php $u=$x*200;echo "Your total amount payable : Rs " .$u. "." ;?> </br>
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
$g=$_POST["noofpasses"];

$conn= mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/*$sql= "create table Dandiya(
      username varchar(20),
      email varchar(30),
      contact varchar(10),
      gender varchar(15),
      course varchar(20),
      year varchar(1),
      passes varchar(4)
      )";

if (mysqli_query($conn, $sql)) {
    echo "Table Dandiya created successfully";
      }
else {
    echo "Error creating table: " . mysqli_error($conn);
      }
mysqli_close($conn);
*/

$sql="insert into Dandiya values('$a','$b','$c','$d','$e','$f','$g')";
if ($conn->query($sql)==TRUE)
{
   echo " " ;
 //  <h4 style="text-align: center;font-style: italic;font-family: Arial;"> Thank you for succesfully registering with us! </h4>
}
else {
  echo "Sorry! Please try filling the form again" . $conn->error;
}

?>

  <h4 style="text-align: center"> <button onclick="myFunction()">Make Payment using Card </button> </h4>
  <h4 style="text-align: center"> <button onclick="myFunction1()">Make Payment using Paytm </button> </h4>


<p id="demo"></p>

<script>
function myFunction() {
  var pin = prompt("Please enter your PIN");
  if (pin != null && pin=='1234') {

     alert("Congrats!Payment successful");
     window.location='home1.php';
  }else {
    alert("Incorrect PIN.Please try again!");

  }

}
</script>

<script>
function myFunction1() {
  alert("Thank you for succesfully registering with us");
  window.location='home1.php';

}
</script>

</body>
</html>
