<?php
session_start();

$con = mysqli_connect('localhost','root','','carrimilk');
if($con){
	// echo "conenction successful";
}else{
	echo "no connection";
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
 <?php include 'links.php'; ?>
</head>
<body style="background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" background="https://wallpaperaccess.com/full/16668.jpg">
<center><h1 style="font-family: courier;font-size: 100px; margin: 0px; padding-top: -10px; color: #f32f19e0; background-color: #0000009e;">Puspanjali Enterprise</h1></center><br><br>
	<center style="font-size: 35px; font-family: 'Lucida Console', Courier, monospace;color: #ffffff; background-color: #0000009e;">Login</center><br>
	<br><br><br><br>
		<table align="center" cellspacing="20" style="background-color: #0000009e;">
			<form action="links.php" method="POST">
				<tr>
					<td><label style="color: #ffffff">Admin ID</label></td>
					<td><input type="text" name="user"></td>
				</tr>		
				<tr>		
					<td><label style="color: #ffffff">Password</label></td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>		
						<td colspan="2" align="center"> <input type="submit" value="submit" name="submit"></td>
				</tr>		
				</form>
		</table>	
</body>
</html>

