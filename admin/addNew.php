<?php
//session maintainence // kavindasilva
/*
 if(!isset($_SESSION['user'])){
 echo "user not set";
 header('Location:../login.html');
 }*/

//include '.php'; //header
?>

<form method="post" action="funs2.php" onsubmit="return confirm('Confirm new entry?');">
	<table>
		<tr><td>First Name: </td> <td><input type="text" name="fname"></td> </tr>
		<tr><td>Last Name: </td> <td><input type="text" name="lname"></td> </tr>
		<tr><td>Address: </td> <td><textarea name="addr"></textarea></td> </tr>
		<tr><td>Birthday: </td> <td><input type="date" name="dob"></td> </tr>
		
		<tr><td>tp </td> <td><input type="tel" name="tp"></td> </tr>
		
		<tr><td></td> <td></td> </tr>
		<?php
		if($_GET['actor']=="std") 
			formStd(); 
		elseif($_GET['actor']=="tch")
			formTch();
		?>
	</table>
	
</form>	

<?php

echo $_GET['actor'];

function formStd(){
	echo "<tr><td>Parent phone:</td> <td><input type='tel' ></td> </tr>";
	echo "<tr><td><input type='submit' value='Add Student' name='studentadd'></td> <td></td> </tr>";
	
}

function formTch(){
	echo "<tr><td>Phone No.:</td> <td><input type='tel' ></td> </tr>";
	echo "<tr><td><input type='submit' value='Add Teacher' name='teacheradd'></td> <td></td> </tr>";
}

?>