<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height initial-scale=1.0">
    <title> SHIKSHA ABHIYAN</title>
    <link href="style1.css" rel="stylesheet" type="text/css">
	<link href="Shiksha.html" rel="chapter" type="text/css">
	<link href="Contact.html" rel="chapter" type="text/css">
    <link href="Courses.html" rel="chapter" type="text/css">
    <link href="News.html" rel="chapter" type="text/css">
	<script src="project.js" type="text/javascript">
    </script>
    <script src="project1.js" type="text/javascript">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>

<body>
	
    <div class="header" title="Shiksha Abhiyan">
        <img src="logo1.jpg" class="logo"><div class="headfont">SHIKSHA ABHIYAN</div>
        <br>
    </div>
	</br>
        <ul class="navi"><strong>
            <li><a href="Shiksha.php" title="Go to Homepage">HOME</a>
            </li>
            <li><a href="Courses.php" title="Find courses">COURSES</a>
            </li>
            <li><a href="News.php" title="Go to News section">NEWS</a>
            </li>
            <li><a href="Contact.php" title="Go to Contact page">CONTACT US</a>
            </li>
            <li><a href="About.php" title="Know more about us">ABOUT</a>
            </li>			
            <div class="me">
				<li><a href="http://localhost/Shiksha_Abhyan/login.php" title="Login as Student">Login As Student </a>
				</li>
				<li><a href="http://localhost/Shiksha_Abhyan/admin/login.php" title="Login as Faculty">Login As Faculty</a>
				</li>
            </div>
        </strong></ul>
	
	<style>
* {box-sizing: border-box;}

.container {
  border-radius: 5px;
  background-color: #fb7b6b;
  padding: 20px;
}
	</style>
	<div class="container">
		<h3>Hi <?php echo $_POST["firstname"]; ?>!</h3></br>
		Thank you for reaching out to the Shiksha Abhiyan Help Desk. We're reviewing your message and typically respond to non subscribers within 1-2
		business days. If you are a subscriber, please be sure to contact us using the email address associated with your account to receive priority support.

		For your reference, your support ticket number is  &#35;<?php $digits = 5; echo rand(pow(10, 0), pow(10, $digits)-1); ?>.
	</div>
	
    <div class="box4">
	
		<h2><center>We have collaborated with 190+ companies and institutions:</center></h2>
		
            <img src="nptel.jpg" class="last1" height="70%" width="18%" id="lastimg" alt="NPTEL">
            <img src="swayam.png" class="last1" height="70%" width="18%" alt="SWAYAM">
            <img src="moodle.png" class="last1" height="70%" width="18%" alt="MOODLE">
            <img src="ministry.jpg" class="last1" height="70%" width="18%" alt="Ministry of education">
            <img src="government.jpg" class="last1" height="70%" width="18%" alt="Government of India">
		
			<!--<img src="logo1.jpg" class="logo2">
			<font class="foot"><br/>
			Find Us On <br/> 1.Facebook 2.Instagram 3.Twitter<br/></font>-->
    </div>

		<center>Copyright &copy; Shiksha Abhiyan 2020 | All rights reserved.A site made by Group10.</center>
		<marquee bgcolor="#EA814F" >
		Disclaimer:"Amidst COVID-19 restrictions we are working with minimum workers. Let us all stay safe and take the necessary precautions!"
        </marquee>
		
</body>

</html>