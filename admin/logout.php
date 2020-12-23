<?php 
require_once '../include/initialize.php';
@session_start();

unset( $_SESSION['USERID'] );
unset( $_SESSION['NAME'] );
unset( $_SESSION['UEMAIL'] );
unset( $_SESSION['PASS'] );
unset( $_SESSION['TYPE'] );

redirect(web_root."admin/login.php?logout=1");
?>