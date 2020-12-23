<?php 
require_once ("include/initialize.php");   
if (isset($_SESSION['StudentID'])) {
  redirect('index.php');
}
?> 
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#7f8c8d">
		<div id="main-wrapper">
		<center>
			<h2>Student Login Form</h2>
			<img src="img.jpeg" class="image" />
		</center>
  
         <form method="post" class="form">
			<label><b>Enrollment Number</label><br>
			<input name="user_email" type="text" class="input" placeholder="Type Enrollment" required title="Enter 11 digit Enrollment Number"><br>
			<label><b>Password</label><br>
			<input name="user_pass" type="Password" class="input" placeholder="Type Password" required><br>
			<input name="login" type="submit" id="l_btn" value="Login"><br>
			<a href="Register.php"><input type="button" id="R_btn" value="Register"></a>		
		</form>

    

  <?php 

if(isset($_POST['login'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {
	 echo'<script type="text/javascript"> alert("Empty Enrollment or Password")</script>';
      redirect (web_root."login.php");
         
    } else {  
        $student = new Student();
        $res = $student::studentAuthentication($email, $h_upass);
        if ($res==true) {  
            redirect(web_root."index.php"); 
			echo $_SESSION['StudentID'];
        }else{
		  echo'<script type="text/javascript"> alert("Invalid Username or Password")</script>';
          redirect (web_root."login.php");
        }
   }
 } 
 ?> 

</body>
</html>