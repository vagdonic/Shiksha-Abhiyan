<?php
session_start(); 
	

	function logged_in() {
		return isset($_SESSION['USERID']);
        
	}

	function confirm_logged_in() {
		if (!logged_in()) {?>

			<script type="text/javascript">
				window.location = "login.php";
			</script>

		<?php
		}
	}
function admin_confirm_logged_in() {
		if (@!$_SESSION['USERID']) {?>
			<script type="text/javascript">
				window.location ="login.php";
			</script>

		<?php
		}
	}

	function studlogged_in() {
		return isset($_SESSION['IDNO']);
        
	}
	function studconfirm_logged_in() {
		if (!studlogged_in()) {?>
			<script type="text/javascript">
				window.location = "index.php";
			</script>

		<?php
		}
	}

	function message($msg="", $msgtype="") {
	  if(!empty($msg)) {

	    $_SESSION['message'] = $msg;
	    $_SESSION['msgtype'] = $msgtype;
	  } else {

			return $message;
	  }
	}
	function check_message(){
	
		if(isset($_SESSION['message'])){
			if(isset($_SESSION['msgtype'])){
				if ($_SESSION['msgtype']=="info"){
	 				echo  '<div class="alert alert-info">'. $_SESSION['message'] . '</div>';
	 				 
				}elseif($_SESSION['msgtype']=="error"){
					echo  '<div class="alert alert-danger">' . $_SESSION['message'] . '</div>';
									
				}elseif($_SESSION['msgtype']=="success"){
					echo  '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
				}	
				unset($_SESSION['message']);
	 			unset($_SESSION['msgtype']);
	   		}
  
		}	

	}
 function keyactive($key=""){
 	 if(!empty($key)) {

	    $_SESSION['active'] = $key; 
	  } else {
			return $keyactive;
	  }
  
 }

 function check_active(){
 	 if(isset($_SESSION['active'])){
         switch ($_SESSION['active']) {

        case 'basicInfo' :
        $_SESSION['basicInfo']   = "active";
        break;
        case 'otherInfo' :
        $_SESSION['otherInfo']= 'active';
        break;
        
        case 'work' :
        $_SESSION['work'] = 'active' ;
        break;
      }
      }else{

      	  $active = (isset($_GET['active']) && $_GET['active'] != '') ? $_GET['active'] : '';
                 switch ($active) {

                  case 'otherInfo' :
                   $_SESSION['otherInfo']= 'active';
        			break;

                  case 'work' :
                   $_SESSION['work'] = 'active' ;
       				 break;

                  default :

                    $_SESSION['basicInfo']   = "active";
       			 break;
        
      }
 }
}
 
?>
