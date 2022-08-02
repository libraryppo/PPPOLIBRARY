<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>PPO Dharan Library Management System </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;0,900;1,400&display=swap" rel="stylesheet"> 
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body style="font color:black">

	<h1 style="color: red;">PPO DHARAN LIBRARY MANAGEMENT SYSTEM</h1>

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="index.php" method="post">
				<input type="text" Name="Id" placeholder="Id" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
			
			
			<div class="send-button">
				<!--<form>-->
					<input type="submit" name="signin"; value="Sign In">
				</form>
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="register">
			<h2>Sign Up</h2>
			<form action="index.php" method="post">
				<input type="text" Name="Name" placeholder="Name" required>
				<input type="text" Name="Email" placeholder="Email" required>
				<input type="password" Name="Password" placeholder="Password" required>
				<input type="text" Name="Phone Number" placeholder="Phone Number" required>
				<input type="text" Name="Address" placeholder="Address" required>
				<input type="text" Name="Id" placeholder="Id" required="">
				<input type="text" Name="Unit" placeholder="Unit" required="">
				
				<select name="Category" id="Category">
					<option value="Offr">Offr</option>
					<option value="IB Staff">IB Staff</option>
					<option value="Class III">Class III</option>
					<option value="Class IV">Class IV</option>
					<option value="Others">Others</option>
				</select>
				<br>
			
			
			<br>
			<div class="send-button">
			    <input type="submit" name="signup" value="Sign Up">
			    </form>
			</div>
			<p>By creating an account, you agree to our <a class="underline" href="terms.html">Terms</a></p>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		<p> &copy; 2022 Library Member Login. All Rights Reserved to PPO Dharan</a></p>
		
	</div>

<?php

if(isset($_POST['signin']))
{
	$u=$_POST['Id'];
	$p=$_POST['Password'];
	$sql="select * from LMS.user where Id='$u'";
	$x=$row['Password'];
	$y=$row['Type'];
		if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
			echo "Login Successful";
			$_SESSION['Id']=$u;
			if($u=='admin')
			header('location:admin/index.php');
		else
			header('location:student/index.php');
		}
else 
	{ 
		echo "<script type='text/css'>alert('Failed to Login! Incorrect Id or Password')</script>";
	}
if(isset($_POST['signup']))
{
	$name=$_POST['Name'];
	$email=$_POST['EmailId'];
	$password=$_POST['Password'];
	$mobno=$_POST['Phone Number'];
	$add=$_POST['Address'];
	$id=$_POST['Id'];
	$unit=$_POST['Unit'];
	$category=$_POST['Category'];
	$type=$_POST['Type'];	

	$sql="insert into LMS.user (Name,Category,Id,EmailId,PhoneNumber,Password,Unit,Address,Type) values ('$name','$category','$id','$email','$mobno','$password','$unit','$add','$type')";
}
	  // if ($conn->$query($sql1) === TRUE) 
	  // {
		  // echo "<script type='text/javascript'>alert('Registration Successful')</script>";
	  // } 
	  // else  
	  // {
    
		 // echo "<script type='text/javascript'>alert('User Exists')</script>";
	  // }


?>

</body>
<!-- //Body -->

</html>
