<!DOCTYPE html>
<html>
<head>
	<title>Puspanjali Enterprise</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Autour One' >
</head>
<body style="background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" background="https://uauth.unextt.com/admin/assets/img/login-bg.jpg">
	<center><h1 style="font-family: courier;font-size: 100px; margin: 0px; padding-top: -10px; color: #f32f19e0; background-color: #0000009e;">Puspanjali Enterprise</h1></center>
	<center style="font-size: 35px; font-family: 'Lucida Console', Courier, monospace;color: #ffffff; background-color: #0000009e;">Total Orders</center><br>
	<center><?php include 'navadm.php'; ?></center>
	<?php
$con=mysqli_connect('localhost','root','','carrimilk');
	if (!$con) {
	   die("Connection failed");
	}

	$sql = "SELECT * FROM orders ORDER BY shopname"; 
$result = $con->query($sql); 
$con->close();  
?><br><br>
<table align="center" border="5px" style="color: #ffb100;border-color: #6f3d09;font-size: 18px;text-align: center;background-color: #0000009e;">
	<tr>
		<th>Shop Name</th>
		<th>Products</th>
		<th>No. of Quantity</th>
		<th>Total Cost</th>
		<th>Check</th>
	</tr>
	<?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['shopname'];?></td> 
                <td><?php echo $rows['product'];?></td> 
                <td><?php echo $rows['no'];?></td> 
                <td><?php echo $rows['totalcost'];?></td>  
                <td><?php echo $rows['chck'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
</table>
</body>
</html>