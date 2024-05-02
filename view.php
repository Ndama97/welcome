<?php
session_start();
require_once("session_checkers.php");
?>
<!DOCTYPE html>
      <html lang="en">
      <head>
     
      <title>Home</title>
          </head>

<body>
    
<table class="zebra"> 
<col>
<col>
<col>
<col>
<thead> 
<tr> 
    <th>Hall Name</th> 
    <th>Adress</th> 
    <th>Capacity</th> 
    <th>photo</th> 
    <th>Cost</th> 
	<th>Booking</th>
</tr> 
</thead>
	<?php
	require_once("db_connection.php");
	$sql="SELECT * FROM gym_equipments";
	// $qr2="SELECT * FROM wateja where id='$g'";
	$qr=mysqli_query($conn,$sql);
	// $ex1=mysqli_query($conn,$qr2);
	// $row2=mysqli_fetch_array($ex1);
    // $k2=$row2['fname'];
	// $n=1;
	while($rw=mysqli_fetch_array($qr)){
	// $k=$rw['id'];
	// $q=base64_encode($k);
	$nm=$rw['jina'];
	$ml=$rw['maelezo'];
	$cp=$rw['bei'];
	$pc=$rw['picha'];
	// $grm=$rw['gharama'];

	echo"<tr>";
	// echo"<td>$n</td>";
	echo"<td>$nm</td>";
	echo"<td>$ml</td>";
	echo"<td>$cp</td>";
	echo "<td><img src='$pc' width='150' height='150' alt='no photo'></td>";
	// echo"<td>$grm</td>";
	echo"<td><a href='booknow.php?m=$q'>Book Now</a></td>";
	// echo</tr>;
    $n++;
	}
	echo"<span class='badge badge-primary'> Welcome Back $k2!
    </span>";
	?>
</table>
<a href="logout.php">Logout</a>

</body>
</html>