<?php
if (isset($_SESSION['usertype'])){
	header("Location: index.php");
}


require_once 'dbcon.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){

$user=$_POST['uname'];
$pass=$_POST['upass'];

//check user type
$usertype=strtolower(substr($user,0,2));
if($usertype=='std')
	$table="student";
elseif($usertype=='tch')
	$table="teacher";
elseif($usertype=="adm")
	$table="admin";
else{
	echo "<script type='text/javascript'>";
	echo "alert('Invalid user. Please check your username');";
	echo "window.location.href = 'index.php';";
	echo "</script>";
}

$sql="select * from ".$table." where uname='".$user."'";
$result = mysqli_query($con, $sql);
	
	if (!($result)) {
		echo "unexpected error";
	}
	$rowcount = mysqli_num_rows($result);
	
	if($rowcount==0){
		echo "User not found";
	}
	elseif ($rowcount==1)
	{
		$r = mysqli_fetch_array($result);
		$rpass = $r['password']; 
		if ($rpass==$pass)
		{
			session_start();
			$_SESSION['user']= $uname;
			$_SESSION['usertype']= $usertype; //user type session
			header('Location: admin/index.php'); 
		}
		else{
			//wrong password
			header('Location: index.php'); 
		}
	}
}

?>
