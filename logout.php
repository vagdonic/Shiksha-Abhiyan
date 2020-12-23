<?php 
require_once 'include/initialize.php';
@session_start();

unset( $_SESSION['StudentID'] );
unset( $_SESSION['Fname'] );
unset( $_SESSION['Lname'] ); 
unset( $_SESSION['STUDUSERNAME'] );  
unset( $_SESSION['STUDPASS'] );  
 
 	
redirect("index.php?logout=1");
?>