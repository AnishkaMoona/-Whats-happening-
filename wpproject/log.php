<!DOCTYPE html>
<html>
<?php session_start();?>
<style>
@import url("https://fonts.googleapis.com/css?family=Fira+Sans");
 html, body {
	 position: relative;
	 min-height: 100vh;
	 background-color: #FFAC;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 font-family: "Fira Sans", Helvetica, Arial, sans-serif;
	 -webkit-font-smoothing: antialiased;
	 -moz-osx-font-smoothing: grayscale;


}
 .form-structor {
	 background-color: #222;
	 border-radius: 15px;
	 height: 550px;
	 width: 350px;
	 position: relative;
	 overflow: hidden;
}
 .form-structor::after {
	 content: '';
	 opacity: 0.6;
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 background-repeat: no-repeat;
	 background-position: left bottom;
	 background-size: 500px;
	 background-image: url(/wpproject/images/image3.png);
	 background-position: top;
}
 .form-structor .signup {
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 -webkit-transform: translate(-50%, -50%);
	 width: 65%;
	 z-index: 5;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup.slide-up {
	 top: 5%;
	 -webkit-transform: translate(-50%, 0%);
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup.slide-up .form-holder, .form-structor .signup.slide-up .submit-btn {
	 opacity: 0;
	 visibility: hidden;
}
 .form-structor .signup.slide-up .form-title {
	 font-size: 1em;
	 cursor: pointer;
}
 .form-structor .signup.slide-up .form-title span {
	 margin-right: 5px;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup .form-title {
	 color: #fff;
	 font-size: 1.7em;
	 text-align: center;
}
 .form-structor .signup .form-title span {
	 color: rgba(0, 0, 0, 0.4);
	 opacity: 0;
	 visibility: hidden;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup .form-holder {
	 border-radius: 15px;
	 background-color: #fff;
	 overflow: hidden;
	 margin-top: 50px;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup .form-holder .input {
	 border: 0;
	 outline: none;
	 box-shadow: none;
	 display: block;
	 height: 30px;
	 line-height: 30px;
	 padding: 8px 15px;
	 border-bottom: 1px solid #eee;
	 width: 100%;
	 font-size: 12px;
}
 .form-structor .signup .form-holder .input:last-child {
	 border-bottom: 0;
}
 .form-structor .signup .form-holder .input::-webkit-input-placeholder {
	 color: rgba(0, 0, 0, 0.4);
}
 .form-structor .signup .submit-btn {
	 background-color: rgba(0, 0, 0, 0.4);
	 color: rgba(256, 256, 256, 0.7);
	 border: 0;
	 border-radius: 15px;
	 display: block;
	 margin: 15px auto;
	 padding: 15px 45px;
	 width: 100%;
	 font-size: 13px;
	 font-weight: bold;
	 cursor: pointer;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup .submit-btn:hover {
	 transition: all 0.3s ease;
	 background-color: rgba(0, 0, 0, 0.8);
}
 .form-structor .login {
	 position: absolute;
	 top: 20%;
	 left: 0;
	 right: 0;
	 bottom: 0;
	 background-color: #fff;
	 z-index: 5;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login::before {
	 content: '';
	 position: absolute;
	 left: 50%;
	 top: -20px;
	 -webkit-transform: translate(-50%, 0);
	 background-color: #fff;
	 width: 200%;
	 height: 250px;
	 border-radius: 50%;
	 z-index: 4;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center {
	 position: absolute;
	 top: calc(50% - 10%);
	 left: 50%;
	 -webkit-transform: translate(-50%, -50%);
	 width: 65%;
	 z-index: 5;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center .form-title {
	 color: #000;
	 font-size: 1.7em;
	 text-align: center;
}
 .form-structor .login .center .form-title span {
	 color: rgba(0, 0, 0, 0.4);
	 opacity: 0;
	 visibility: hidden;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center .form-holder {
	 border-radius: 15px;
	 background-color: #fff;
	 border: 1px solid #eee;
	 overflow: hidden;
	 margin-top: 50px;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center .form-holder .input {
	 border: 0;
	 outline: none;
	 box-shadow: none;
	 display: block;
	 height: 30px;
	 line-height: 30px;
	 padding: 8px 15px;
	 border-bottom: 1px solid #eee;
	 width: 100%;
	 font-size: 12px;
}
 .form-structor .login .center .form-holder .input:last-child {
	 border-bottom: 0;
}
 .form-structor .login .center .form-holder .input::-webkit-input-placeholder {
	 color: rgba(0, 0, 0, 0.4);
}
 .form-structor .login .center .submit-btn {
	 background-color: #6b92a4;
	 color: rgba(256, 256, 256, 0.7);
	 border: 0;
	 border-radius: 15px;
	 display: block;
	 margin: 15px auto;
	 padding: 15px 45px;
	 width: 100%;
	 font-size: 13px;
	 font-weight: bold;
	 cursor: pointer;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center .submit-btn:hover {
	 transition: all 0.3s ease;
	 background-color: rgba(0, 0, 0, 0.8);
}
 .form-structor .login.slide-up {
	 top: 90%;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login.slide-up .center {
	 top: 10%;
	 -webkit-transform: translate(-50%, 0%);
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login.slide-up .form-holder, .form-structor .login.slide-up .submit-btn {
	 opacity: 0;
	 visibility: hidden;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login.slide-up .form-title {
	 font-size: 1em;
	 margin: 0;
	 padding: 0;
	 cursor: pointer;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login.slide-up .form-title span {
	 margin-right: 5px;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
</style>
<head>
	<title>Log in </title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Anishka";   //dbname

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nameErr = $name = "";
$password = $passErr="";
$sapid = $sapidErr="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["name"]) && $_POST["Submit"]=="Signup") {
  $nameErr="cannot be empty";
}elseif($_POST["Submit"]=="Signup"){
    if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
       $nameErr="contains only letters";
    }else $name=$_POST["name"];
}


if (empty($_POST["sapid"])) {
  $sapidErr="cannot be empty";
}else{
    if (!preg_match("/^[0-9 ]*$/", $_POST["sapid"])) {
       $sapidErr="contains only numbers";
    }else $sapid=$_POST["sapid"];
}


if (empty($_POST["password"])) {
  $passErr="cannot be empty";
}else $password=$_POST["password"];



if($_POST["Submit"]=="Signup" && $name!="" && $password!="" && $sapid!=""){
$sql = "INSERT INTO signin VALUES ('$name','$sapid','$password')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Signup Successfull');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


if($_POST["Submit"]=="Login" && $password!="" && $sapid!="" ){
$sql = "SELECT * FROM signin WHERE password='$password' and sapid='$sapid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $_SESSION["name"]=$row['name'];
      echo "<script>alert('Login Sucessfull');</script>";
      echo "<meta http-equiv = 'refresh' content = '0.9; url = //localhost:8888/wpproject/home1.php' />";   //home site link
    }
}else echo "<script>alert('Invalid Username/Password');</script>";
}

}
?>


<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
		<div class="form-holder">
		<form action="//localhost:8888/wpproject/log.php" method="POST">
			<input type="text" class="input" name="name" placeholder="<?php echo "Name ".$nameErr;?>" />
			<input type="text" class="input" name="sapid" placeholder="<?php echo "Sap ID ".$sapidErr;?>" />
			<input type="password" class="input" name="password" placeholder="<?php echo "Password ".$passErr;?>" />
		</div>
		<button class="submit-btn" value="Signup" name="Submit">Sign up</button>
		</form>
	</div>
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
			<div class="form-holder">
		<form action="//localhost:8888/wpproject/log.php" method="POST">
				<input type="text" class="input" name="sapid" placeholder="<?php echo "Sap ID ".$sapidErr;?>" />
				<input type="password" class="input"name="password" placeholder="<?php echo "Password ".$passErr;?>" />
			</div>
			<button class="submit-btn" value="Login" name="Submit">Log in</button>
		</form>
		</div>
	</div>
</div>
</body>
<script>
console.clear();

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode.parentNode;
	Array.from(e.target.parentNode.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			signupBtn.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});

signupBtn.addEventListener('click', (e) => {
	let parent = e.target.parentNode;
	Array.from(e.target.parentNode.classList).find((element) => {
		if(element !== "slide-up") {
			parent.classList.add('slide-up')
		}else{
			loginBtn.parentNode.parentNode.classList.add('slide-up')
			parent.classList.remove('slide-up')
		}
	});
});
</script>
</html>
