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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

input[type=text], select, textarea, input[type=email] {
  width: 115px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  transition: width .35s ease-in-out;
}

input[type=text]:focus,input[type=email]:focus,select:focus {
  width: 280px;
  box-shadow: 4px 3px 2px #555;
}

textarea{ height:200px;
}

textarea:focus{
width:400px;
}
input[type=submit] {
  background-color: #4CAF50;;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #FFCCCC;
  box-shadow: 2px 2px 2px gray;
}

.container {
  border-radius: 5px;
  background-color: #fb7b6b;
  padding: 20px;
}
</style>
<h1><center>Contact Form</center></h1>

<div class="container">
  <form action="response.php" target="_blank" method="post" autocomplete="on">
    <label for="fname">First Name</label></br>
    <input type="text" id="fname" name="firstname" placeholder="Your first name" required autofocus></br>

    <label for="lname">Last Name</label></br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name" required></br>

    <label for="email">Email</label></br>
    <input type="email" id="email" name="email" placeholder="Your Email" required></br>
	
    <label for="issue">Issues</label></br>
    <select id="issue" name="issue" required>
      <option value="Can't enroll">Can't enroll into new courses</option>
      <option value="Can't access">Can't access the courses you enrolled earlier</option>
      <option value="Bug problem">Report a bug while surfing website</option>
	  <option value="Other">Other</option>
    </select></br>

    <label for="subject">Description</label></br>
    <textarea id="subject" name="subject" placeholder="Write something.." required></textarea></br>

    <input type="submit" value="Submit"></br>
  </form>
</div></br>

    <div class="box4">
	
		<h2><center>We have collaborated with 190+ companies and institutions:</center></h2>
		
            <img src="nptel.jpg" class="last1" alt="NPTEL" title="Nptel">
            <img src="swayam.png" class="last1" alt="SWAYAM" title="Swayam">
            <img src="moodle.png" class="last1" alt="MOODLE" title="Moodle">
			<img src="coursera.png" class="last1" alt="COURSERA" title="Coursera">
            <img src="ministry.jpg" class="last1" alt="Ministry of Education" title="Ministry of Education"></br>
			<div class="trans4"></div>
			<center><strong><h2>Contact Us:</h2></strong></center>
			<h3> Give us a <img src="logocall.png" height="20px" width="20px" alt="call" title="Call"> on <em><strong>8000-123-456</strong></em>
			<a href="https://www.facebook.com/jeet.shah.3194" class="fa fa-facebook"></a>
			<a href="https://twitter.com/jeetshah162000" class="fa fa-twitter"></a>
			<a href="https://www.linkedin.com/in/jeet-shah-277400154/" class="fa fa-linkedin"></a>
			<a href="https://www.instagram.com/jeet_164/" class="fa fa-instagram"></a></h3>
		
    </div>

		<center>Copyright &copy; Shiksha Abhiyan 2020 | All rights reserved.A site made by Group10.</center>
		<marquee bgcolor="#EA814F" >
		Disclaimer:"Amidst COVID-19 restrictions we are working with minimum workers. Let us all stay safe and take the necessary precautions!"
        </marquee>
		
</body>

</html>