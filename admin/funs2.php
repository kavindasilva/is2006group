<?php
/**this file contains functions only
insert student
insert teacher
*/
require_once '../dbcon.php';

if (isset($_POST['studentadd'])) {
	$fname=$_POST['st_fname'];
	$lname=$_POST['st_lname'];
	$parent=$_POST['st_par'];
	$cls=$_POST['cls'];
	$dob=$_POST['st_BD'];
	$addr=$_POST['address'];
	$t1=$_POST['st_tel'];
	//$t2=$_POST['tp2'];
	$gend=$_POST['gender'];
	//$pht= 10;//$_POST['stphoto'];
	//$sqlq="insert into student values(null,'".$_POST['fname']."','".$_POST['lname']."', '".$ttt."' );";
	
	$sqlq = "insert into student values(null, '$fname', '$lname', '$parent', '$dob', '$gend', '$cls', '$addr', '$t1', 'student');";
	echo $sqlq;

	if (mysqli_query($GLOBALS['conn'], $sqlq)) { //after suxxesful execution of query
		$sql2 = "select max(sid) as mxx from student";
		//get the new student id
		$res = mysqli_query($GLOBALS['conn'], $sql2);
		$row = mysqli_fetch_array($res);
		$newID = $row['mxx'];

		//diplay new student's id and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Student added succesfully. New student ID is $newID');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
		
		//echo "<script>alert('Student added succesfully. New student ID is ".$newID."')</script>";
		//header('Location:./'); //index.php
		//echo "<script>alert('Student added succesfully')</script>"; //working
	} else {
		echo "error inserting the student";
	}

}

if (isset($_POST['teacheradd'])) {
	$fullname=$_POST['tch_name'];
	$gend=$_POST['gender'];
	$dob=$_POST['tch_BD'];
	$qulif=$_POST['qual'];
	$eml=$_POST['tch_email'];
	$addr=$_POST['addr'];
	$tel=$_POST['tch_tel'];
	$sub=$_POST['classes'];
	//$nic=$_POST['nic'];
	
	$sqlq = "insert into teacher values(null, '$fullname', '$gend', '$dob', '$qulif', '$eml', '$addr', '$tel', 'ucsc', '$sub');";
	//echo $sqlq;

	if (mysqli_query($GLOBALS['conn'], $sqlq)) {
		$sql2 = "select max(tid) as mxx from teacher";
		//get the new student id
		$res = mysqli_query($GLOBALS['conn'], $sql2);
		$row = mysqli_fetch_array($res);
		$newID = $row['mxx'];

		//diplay new teacher's id and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Teacher added succesfully. New teacher ID is $newID');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
		
		//echo "<script>alert('Student added succesfully. New student ID is ".$newID."')</script>";
		//header('Location:./'); //index.php
		//echo "<script>alert('Student added succesfully')</script>"; //working
	} else {
		echo "error inserting the teacher ".mysqli_error($GLOBALS['conn']);
	}

}
?>