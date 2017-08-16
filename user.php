<?php
if (isset($_SESSION['usertype'])) {
	header("Location: index.php");
}

require_once 'dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$user = $_POST['uname'];
	$pass = $_POST['pass'];

	//check user type
	$usertype = strtolower(substr($user, 0, 3)); //echo $usertype."--"; echo substr($user, 3);
	if ($usertype == 'std'){
		$table = "student";
		$sql = "select * from student where sid=".substr($user,3) . ";";
	}
	elseif ($usertype == 'tch'){
		$table = "teacher";
		$sql = "select * from teacher where tid=".substr($user,3) . ";";
	}
	elseif ($usertype == "adm"){
		$table = "admin";
		$sql = "select * from admins where id=".substr($user,3) . ";";
	}
	else {
		echo "<script type='text/javascript'>";
		echo "alert('Invalid user. Please check your username');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
	}

	//$sql = "select * from " . $table . " where uname='" . $user . "'";
	$result = mysqli_query($conn, $sql);

	if (!($result)) {
		echo "unexpected error";
	}
	$rowcount = mysqli_num_rows($result);

	if ($rowcount == 0) {
		echo "User not found";
	}
	elseif ($rowcount == 1) {
		$res = mysqli_fetch_array($result);
		$rpass = $res['passw'];
		if ($rpass == $pass) {
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['usertype'] = $usertype;
			
			header('Location: ./index.php');
		}
		else {
			//wrong password
			header('Location: index.php');
		}
	}
}
mysqli_close($conn);
?>
