<!DOCTYPE html>
<html>
<head>
	<title>View Orders</title>
</head>
<body>
	<form method="post" action="view-orders.php">
		<label>Enter the shopname </label>
		<input type="text" name="shpnm">
		<input type="submit" name="submit">
	</form>


<?php
$con=mysqli_connect('localhost','root','','carrimilk');
	if (!$con) {
	   die("Connection failed");
	}
$shpnm=$_POST['shpnm'];
$sql = "SELECT * FROM orders WHERE shopname='$shpnm'"; 
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
                	$n=1;
            		$n=$n+1;
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td rowspan="$n"><?php echo $rows['shopname'];?></td> 
                <td><?php echo $rows['product'];?></td> 
                <td><?php echo $rows['no'];?></td> 
                <td><?php echo $rows['totalcost'];?></td>  
                <td><?php echo $rows['chck'];?></td> 
            </tr>

            <?php 
                } 
             ?>
</table></body></html>