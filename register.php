<?php  
require_once ("include/initialize.php"); 
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?>

 
<!DOCTYPE html>
<html lang="en">

<head>
   
    
    <title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		var check = function() 
		{

  			if (document.getElementById('password').value == document.getElementById('cpassword').value) 
  			{
    			document.getElementById('message').style.color = 'green';
    			document.getElementById('message').innerHTML = '"Password Matched"';
  			}
  			else 
  			{
    			document.getElementById('message').style.color = 'red';
    			document.getElementById('message').innerHTML = '"Password Not matched Please Enter Same Passwords"';
  			}
		}

		function previewimg()
		{
			var oFReader = new FileReader();
			oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

			oFReader.onload = function(oFREvent)
			{
				document.getElementById("uploadPreview").src = oFREvent.target.result;
			};
		};
	</script>
</head>

<body>
    <body style="background-color:#7f8c8d">
	<form action="Register.php" method="post" class="form" enctype="multipart/form-data">
	<div id="main-wrapper">
		<center>
			<h2>Student Registration Form</h2>
			<img src="img.jpeg" class="image" id="uploadPreview" /><br>
			<input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="previewimg();"/>
		</center>

			<label><b>First Name</label><br>
			<input name="FNAME" type="text" class="input" placeholder="Type First Name" required><br>

            <label><b>Last Name</label><br>
			<input name="LNAME" type="text" class="input" placeholder="Type Last Name" required><br>
			
			<label><b>Address</label><br>
			<input name="ADDRESS" type="text" class="input" placeholder="Type Address" required><br>
                        
            <label><b>Phone No.</label><br>
			<input name="PHONE" type="text" class="input" placeholder="Type Phone Number" required><br>            
                        
			<label><b>Enrollment Number</label><br>
			<input name="USERNAME" type="text" class="input" placeholder="Type Enrollment Number" required pattern="[0-9]{11}" title="Enter 11 Digit Enrollment Number"><br>
            
			<label><b>Password</label><br>
			<input name="PASS" type="Password" class="input" id="password" placeholder="Type Password" required><br>
			<label><b>Confirm Password</label><br>

			<input name="cpassword" type="Password" class="input" id="cpassword" placeholder="Confirm Password" required onkeyup="check();"><br>
			<center><span id='message'></span><br></center>	
                      
          <input name="sub_btn" type="submit" id="S_btn" value="SignUp"><br>
			<a href="login.php"><input name="back_btn" type="button" id="B_btn" value="Back"></a>		
		</form>

 


<?php 
if (isset($_POST['sub_btn'])) {
    # code...  

    $student = New Student(); 
    $student->Fname         = $_POST['FNAME']; 
    $student->Lname         = $_POST['LNAME'];
    $student->Address       = $_POST['ADDRESS']; 
    $student->MobileNo         = $_POST['PHONE'];  
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']); 
    $student->create();  

    message("Your now succefully registered. You can login now!","success");
    redirect("login.php");

}

?> 