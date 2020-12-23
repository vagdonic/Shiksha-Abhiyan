<?php
	session_start();
	require 'DBconfig/config.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#7f8c8d">
	<div id="main-wrapper">
		<center>
			<h2>Student Login Form</h2>
			<img src="img.jpeg" class="image" />
		</center>
	
		<form action="Stu_login.php" method="post" class="form">
			<label><b>Enrollment Number</label><br>
			<input name="enrollment" type="text" class="input" placeholder="Type Enrollment" required title="Enter 11 digit Enrollment Number"><br>
			<label><b>Password</label><br>
			<input name="password" type="Password" class="input" placeholder="Type Password" required><br>
			<input name="login" type="submit" id="l_btn" value="Login"><br>
			<a href="Stu_Register.php"><input type="button" id="R_btn" value="Register"></a>		
		</form>
		<?php 
			if(isset($_POST['login']))
			{
				$enrollment=$_POST['enrollment'];
				$password=$_POST['password'];

				$query="select * from student where enrollmentno='$enrollment' and password='$password'";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
					$row=mysqli_fetch_assoc($query_run); 
					$_SESSION['enrollment']=$row['enrollment'];
					$_SESSION['imglink']=$row['imglink'];
					header('location:Stu_profile.php');
				}
				else
				{
					echo'<script type="text/javascript"> alert("Invalid Enrollment or Password")</script>';
				}
			}

		?>
	</div>
</body>
</html>