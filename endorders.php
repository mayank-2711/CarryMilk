<!DOCTYPE html>
<html>
<head>
	<title>End orders</title>
</head>
<body style="background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" background="https://uauth.unextt.com/admin/assets/img/login-bg.jpg">
	<center><h1 style="font-family: courier;font-size: 100px; margin: 0px; padding-top: -10px; color: #f32f19e0; background-color: #0000009e;">Puspanjali Enterprise</h1></center>
	<center style="font-size: 35px; font-family: 'Lucida Console', Courier, monospace;color: #ffffff; background-color: #0000009e;">End orders</center><br>
	<center><?php include 'navadm.php'; ?></center><br><br><br><center>
	<form method="post" action="endorders.php" style="color: #ffffff; background-color: #0000009e; margin-right: 30%; margin-left: 30%; border-radius: 5px; ">
		<br><label>Shop Name</label><br>
		<input type="text" name="shopname"><br>
		<input type="submit" name="submit"><br>
	</form></center>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
$con=mysqli_connect('localhost','root','','carrimilk');
	if (!$con) {
	   die("Connection failed");
	}
	$t = $_POST['shopname'];

$sql = "UPDATE orders SET chck='Y' WHERE shopname='$t'";

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $con->error;
}
$con->close();
}
?>
