<html>
<head>
	<link rel="stylesheet" type="text/css" href="Styles.css">
	
	<title> Students Registration Form </title>
</head>

<body>
	
	<form action="" method="post">
	
	<table border="0" width="50%" align="center">
	<thead>
	<tr>
		<th colspan="3"> <img src="../data/img/students.jpg" alt="image of students" height="300px" width="800px"> </th>
		<!--th> <img src="books.jpg" alt="set of books"  height="100px" width="100px"> </th-->
	</tr>
	</thead>
	
	<tbody>
	<tr>
		<th colspan="3"><h1>Students Registration Form<h1></th>
	</tr>
	<tr>
		<th colspan="3"> <h2>Basic Information</h2> </th>
	</tr>
	<tr>
		<td>Registration Date </td>
		<td><input type="date" name="st_date"></td>
	</tr>

	<tr>
		<td>Class</td>
		<td><select name="classes" >
		<option value="1">Grade 1</option>
		<option value="2">Grade 2</option>
		<option value="3">Grade 3</option>
		<option value="4">Grade 4</option>
		<option value="5">Grade 5</option>
		
		</select> </td>
	</tr>
	
	<tr>
		<td>Registration number</td>
		<td><input type="number" name="st_no"</td>
	</tr>
	
	<tr>
		<th colspan="3"> <h2>Student Information</h2> </th>
	</tr>
	<tr>
		<td> Student's Name </td>
		<td><input type="text" name="st_name" </td>
		<td rowspan="6"><input type="image" src="submit_image.png" alt="st_photo"> </td>
	</tr>
	<tr>
		<td> Father's Name </td>
		<td><input type="text" name="st_fa"> </td>
	</tr>
	<tr>	
		<td> Mother's Name </td>
		<td><input type="text" name="st_Mo"> </td>
	</tr>
	<tr>
		<td>Gneder </td>
		<td><input type="radio" name="gender" value="male"> Male 
			<input type="radio" name="gender" value="female"> Female </td>
	</tr>	
	<tr>
		<td>Date of Birth </td>
		<td><input type="date" name="st_BD"> </td>
	</tr>
	<tr>
		<td>Bus Service </td>
		<td> <input type="radio" name="service" value="yes">Yes
			<input type="radio" name="service" value="no"> No 
			<input type="radio" name="service" value="rarely"> Rarely </td>
	</tr>
	<tr>
		<th colspan="3"> <h2>Contact Information</h2> </th>
	</tr>
	<tr>
		<td> Contact Number </td>
		<td><input type="tel" name="st_tel" > </td>
	</tr>
	<tr>
		<td> Email ID </td>
		<td><input type="email" name="st_email" > </td>
	</tr>
	<tr>
		<td> Address </td>
		<td><input type="address" name="st_ad" > </td>
	</tr>
	
	</tbody>
	
	<tfoot>
	</br>
	</br>
	<tr>
		<td colspan="3"> <img src="../data/img/giphy.gif" alt="students" height="200px" width="800px">
	</tr>
	</tfoot>
</table>

</body>
</html>