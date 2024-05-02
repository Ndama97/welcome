<?php
session_start();
require_once("session_checkers.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Register user list</title>
<style type = "text/css">
  table{
	border-collapse: collapse;
}
</style>
</head>
<body>
<form method="POST">
<table border="1" align="center">
 <tr>
  <td>Sno</td>
  <td>Full Name</td>
  <td>User Name</td>
  <td>Email</td>
  <td>Edit</td>
  <td>Delete</td>
 </tr>
<?php
require_once("db_connection.php");
$sql ="select * from user_register";
$qr=mysqli_query($conn,$sql);
$n=1;
while($rw=mysqli_fetch_array($qr))
{
$k=$rw['Sno'];
$fn=$rw['FullName'];
$un=$rw['UserName'];
$em=$rw['Email'];
echo"<tr>";
echo"<td> $n </td>";
echo"<td> $fn </td>";
echo"<td> $un </td>";
echo"<td> $em </td>";
echo"<td><a href='user_registration_update.php?m=$k'>Edit</a></td>";
echo"<td><a href= 'register1_removal.php?m=$k'>Delete</a></td>";
echo"</tr>";
$n++;
}
?>
<tr>
<td><button type="submit"><a href="logout.php">Log out</a></button></td>
<td><button type="submit" name="print"><a href="exsample.php">Print</a></button></td>
</tr>
</table>
</form>
</body>
</html>
