<?php
//session maintainence // kavindasilva
/*
 if(!isset($_SESSION['user'])){
 echo "user not set";
 header('Location:../login.html');
 }*/

//include '.php'; //header
?>

<form method="post" action="">
	<table>
		<tr><td>First Name: </td> <td><input type="text" name="fname"></td> </tr>
		<tr><td>Last Name: </td> <td><input type="text" name="lname"></td> </tr>
		<tr><td>Address: </td> <td><textarea name="addr"></textarea></td> </tr>
		<tr><td>Birthday: </td> <td><input type="date" name="dob"></td> </tr>
		
		<tr><td>tp </td> <td><input type="tel" name="tp"></td> </tr>
		
		<tr><td></td> <td></td> </tr>
	</table>
	
</form>	

<?php

echo $_GET['actor'];

function formStd(){
	echo "<tr><td>Parent phone:</td> <td><input type='tel' ></td> </tr>";
	
}

function formTch(){
	
}

?>