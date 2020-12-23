<?php
require_once("../include/initialize.php");

 ?>
  <?php
  if(isset($_SESSION['USERID'])){
    redirect(web_root."admin/index.php");
  }
  ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Shiksha Abhyan</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo web_root;?>plugins/adminlogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root;?>plugins/adminlogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <form class="login100-form validate-form flex-sb flex-w" method="POST" action="login.php">
          <span class="login100-form-title p-b-32">
            Faculty Login
          </span>

          <span class="txt1 p-b-11">
            Username
          </span>
          <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
            <input class="input100" type="text" name="user_email" >
            <span class="focus-input100"></span>
          </div>
          
          <span class="txt1 p-b-11">
            Password
          </span>
          <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
            <span class="btn-show-pass">
              <i class="fa fa-eye"></i>
            </span>
            <input class="input100" type="password" name="user_pass" >
            <span class="focus-input100"></span>
          </div>
          
          <div class="flex-sb-m w-full p-b-48">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Remember me
              </label>
            </div>

            
          </div>

          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" name="btnLogin">
              Login
            </button>
          </div>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root;?>plugins/adminlogin/js/main.js"></script>

</body>
</html>
 
<?php

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);

   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      redirect("login.php");

    } else {
    $user = new User();
    $res = $user::userAuthentication($email, $h_upass);
    if ($res==true) {
       message("You login as ".$_SESSION['TYPE'].".","success");
      if ($_SESSION['TYPE']=='Administrator'){
         redirect(web_root."admin/index.php");
      }else{
           redirect(web_root."admin/login.php");
      }
    }else{
      message("Account does not exist! Please contact Administrator.", "error");
       redirect(web_root."admin/login.php");
    }
 }
 }
 ?> 