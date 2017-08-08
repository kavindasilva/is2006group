<?php
/**
 * this file is to validate user credentials and login
 */
 
//check session
/*
if(isset($_SESSION['user'])){
	header('Location: home.php');
}
*/

require_once 'dbcon.php';

//login form eke JS valin validate karanna oni na
//php valinma balamu
//user type ekath balanna oni. type eke hatiyta redirect vena page eka venas venawa

//header eke session eka balala logout button eka display karanna

if(isset($_POST['log'])){
	//echo "form login";
	$name = $_POST['uname'];
	$password = $_POST['pass'];
	
	$checkName = "select * from users where Email='$name'";
	
	$result = mysqli_query($conn, $checkName);
	
	if (!($result)) 
		{echo "Error in query";}
	$rowcount = mysqli_num_rows($result);
	
	if($rowcount==0){
		echo "Invalid user";
	}
	elseif ($rowcount==1)
	{
		$r = mysqli_fetch_array($result);
		$rpass = $r['Password']; //password from DB
		$userType=$r['type'];
		
		if ($rpass==$password)
		{
			$_SESSION['user']=''; //user id
			
			switch ($userType) {
				case 'stud':
					$_SESSION['utype']='stud';
					header('Location: student/index.php');
					break;
				
				case 'tch':
					$_SESSION['utype']='tch';
					header('Location: teacher/index.php');
					break;
				
				case 'admin':
					$_SESSION['utype']='admin';
					header('Location: admin/index.php');
					break;
					
				default:
					//no need of default action
					break;
			}
			//header('Location: user.php'); //redirection
		} 
	}
	
}


?>