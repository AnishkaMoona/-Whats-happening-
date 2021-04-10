<html>
<style>
{font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

h3 {
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

h2 {
  color: #0C95C4;
  font-family: Helvetica;
  text-align: left;
  font-size: 100%;
  border: 1px solid powderblue;
  padding: 30px;
  margin: 25px;
  background-color: #e6f5ff;
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

<br>
<h3>Please check your details below : <br></h3>
<h2> <?php echo "Name :       " .$_POST["usrnm"];?><br>
 <?php echo "Email ID :       " .$_POST["email"];?><br>
 <?php echo "Contact :        " .$_POST["contact"];?> <br>
 <?php echo "Gender :         " .$_POST["gender"];?><br>
<?php echo "Course Studying : " .$_POST["course"];?><br>
<?php echo "Year :            " .$_POST["year"]; ?> <br> </h2>
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

$conn= mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/*$sql="create table Python(
      username varchar(20),
      email varchar(30),
      contact varchar(10),
      gender varchar(15),
      course varchar(20),
      year varchar(1)
      )";

if (mysqli_query($conn, $sql)) {
    echo "Table Python created successfully";
      }
else {
    echo "Error creating table: " . mysqli_error($conn);
      }
mysqli_close($conn);*/

$sql="insert into Python values('$a','$b','$c','$d','$e','$f')";
if ($conn->query($sql)==TRUE)
{
   echo " " ;
 //  <h4 style="text-align: center;font-style: italic;font-family: Arial;"> Thank you for succesfully registering with us! </h4>
}
else {
  echo "Sorry! Please try filling the form again" . $conn->error;
}
?>

</h2>
   <h4 style="text-align: center"> <button onclick="myFunction()" >Make Payment using Card </button> </h4>
  <h4 style="text-align: center"> <button onclick="myFunction1()" >Make Payment using Paytm </button> </h4>

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
