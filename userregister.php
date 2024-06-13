<?php
SESSION_start();
if(isset($_POST['Register'])){
	require_once("db_connection.php");
	$fname = $_POST['Full_name'];
	$uname = $_POST['User_name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$c_pass = $_POST['c_password'];
if($pass==$c_pass){
	$hash=password_hash($pass,PASSWORD_DEFAULT);
$sql =" insert into user_register(FullName,UserName,Email,Password)
	values('$fname','$uname','$email','$hash')";
$query = mysqli_query($conn,$sql);
	if($query){
	header("location: index.php");
        echo" <script>alert('Invalid username or password. Please try again.')</script>";
	die();
}else{
	echo "unabe to register";
}
}
else{ echo"password doesn't match";}
}
?>
<html>
<head>
<title>Login</title>
</head>
<body align="center">
<form method="POST">
<table align="center" style="border : 1px solid black">
 <tr>
  <td>Full Name:</td>
  <td><input type ="text"  name="Full_name"></td>
 </tr>
 <tr>
  <td>User Name:</td>
  <td><input type ="text" name="User_name"></td>
 </tr>
 <tr>
  <td>Email::</td>
  <td><input type ="text"  name="email"></td>
 </tr>
 <tr>
  <td>Password</td>
  <td><input type="password"  name ="password"></td>
 </tr>
 <tr>
  <td>ConfirmPassword</td>
  <td><input type="password"  name="c_password"></td>
 </tr>
 <tr>
  <td ><button type="submit"  >Cancel</button></td>
  <td ><button type="submit" name="Register" >Register</button></td>
 </tr>
</table>
</form>
</body>
</html>