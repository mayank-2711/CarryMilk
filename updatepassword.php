<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
</head>
<body style="background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" background="https://uauth.unextt.com/admin/assets/img/login-bg.jpg">
	<center><h1 style="font-family: courier;font-size: 100px; margin: 0px; padding-top: -10px; color: #f32f19e0; background-color: #0000009e;">Puspanjali Enterprise</h1></center>
	<center style="font-size: 35px; font-family: 'Lucida Console', Courier, monospace;color: #ffffff; background-color: #0000009e;">Change Password</center><br>
	<center><?php include 'navadm.php'; ?></center><br><br><br>
	<center>
	<form action="updatepassword.php" method="POST" style="color: #ffffff; background-color: #0000009e; margin-right: 30%; margin-left: 30%; border-radius: 5px; ">
		<label>Current Password</label><br>
		<input type="password" name="currpwd"><br>
		<label>New Password</label><br>
		<input type="password" name="newpwd"><br>
		<label>Confirm Password</label><br>
		<input type="password" name="cfmpwd"><br>
		<input type="submit" name="submit"><br>
	</form>
	</center>

</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$con=mysqli_connect('localhost','root','','carrimilk');
	if (!$con) {
	   die("Connection failed");
	}
else{
	$currentpass = $_POST['currpwd'];
        $newpass = $_POST['newpwd'];
        $cnfrmpass = $_POST['cfmpwd'];
        $sql = "SELECT password FROM admin ";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $oldpass = $row["password"];
        if($currentpass != $oldpass ){
            echo '<script> alert("current password wrong");</script>';
        }
        else if($newpass != $cnfrmpass){
            echo '<script> alert("pasword not matched");</script>';
        }
        else{
            $sql ="UPDATE `admin` SET `password`='$newpass' WHERE `id`='1'";
            $res = mysqli_query($con,$sql);
            if($res)
            echo '<script> alert("password changed sucessfully!!");</script>';
            else
            echo '<script> alert("opss!!");</script>';
        
}}}
?>