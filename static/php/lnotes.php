<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/lnotes.css">
	
	<title> Lecture Notes </title>
    <style>
    	.bordered {
    
    height: 1300px;
    padding: 20px;
    border: 10px groove #00b38f;
  }
  		.row1{
  			color: #00004d;
  			font-size: 20px;
  			font-style: verdana;
  			background: #4bb8dd;
  		}
  		.row2{
  			color: #00004d;
  			font-size: 20px;
  			font-style: verdana;
  			background: #4bb8dd;
  		}


    </style>;


</head>

<body>
<?php include 'head1.php';?>
<div class="bordered">
<table border="2px" width="50%" align="center">
<thead>
	<tr>
	<th colspan="2"> <img src="../img/studying.png" alt="image of notes" height="300px" width="1000px"> </th>
	</tr>

	
	<tr>
		<td colspan="2"> <div class="row1"> <h1 align="center"> Students' Lecture Notes </h1> </div>
		<div id="1">
		</td>
	</tr>
	</div>
</thead>

<tbody>
	<tr>
		<th> <h3> Grade 1 </h3> </th>
		<td>  <p id="demo1"> Subjects </p>
			  <button type="button" onclick='document.getElementById("demo1").innerHTML ="<a href=../php/upload1,1> Sinhala for Grade 1 </a></br> <a href=../php/upload1,2> Religion for Grade 1 </a></br> <a href=../php/upload1,3> Mathematics for Grade 1 </a></br> <a href=../php/upload1,4>Science for Grade 1 <a></br> <a href=../php/upload1,5> History for Grade 1 </a></br> <a href=../php/upload1,6>English for Grade 1 </a></br>"'> View subject </button> </td>
	</tr>

	<tr>
		<th> <h3> Grade 2 </h3> </th>
		<td>  <p id="demo2"> Subjects </p>
			  <button type="button" onclick='document.getElementById("demo2").innerHTML = "<a href=../php/upload2,1>Sinhala for Grade 2</a> </br> <a href=../php/upload2,2>Religion for Grade 2 </a></br> <a href=../php/upload2,3>Mathematics for Grade 2 </a></br> <a href=../php/upload2,4>Science for Grade 2 </a></br> <a href=../php/upload2,5>History for Grade 2 </a></br> <a href=../php/upload2,6> English for Grade 2 </a></br>"'> View subject </button> </td>
	</tr>

	<tr>
		<th> <h3> Grade 3 </h3> </th>
		<td> <p id="demo3"> Subjects </p>
			 <button type="button" onclick='document.getElementById("demo3").innerHTML= "<a href=../php/upload3,1>Sinhala for Grade 3 </a> </br> <a href=../php/upload3,2> Religion for grade 3 </a></br> <a href=../php/upload3,3> Mathematics for Grade 3 </a></br> <a href=../php/upload3,4>Science for Grade 3 </a></br> <a href=../php/upload3,5>History for Grade 3 </a></br> <a href=../php/upload3,6>English for Grade 3 </a></br>"'> View subjects </button> </td>
	</tr>		 

	<tr>
		<th> <h3> Grade 4 </h3> </th>
		<td> <p id="demo4"> Subjects </p>
			 <button type="button" onclick='document.getElementById("demo4").innerHTML= "<a href=../php/upload4,1>Sinhala for Grade 4 </a></br> <a href=../php/upload4,2> Religion for grade 4 </a></br><a href=../php/upload4,3>Mathematics for Grade 4 </a></br> <a href=../php/upload4,4> Science for Grade 4 </a></br> <a href=../php/upload4,5>History for Grade 4 </a></br> <a href=../php/upload4,6>English for Grade 4 </a></br>"'> View subjects </button> </td>
	</tr>	

	<tr>
		<th> <h3> Grade 5 </h3> </th>
		<td> <p id="demo5"> Subjects </p>
			 <button type="button" onclick='document.getElementById("demo5").innerHTML= "<a href=../php/upload5,1> Sinhala for Grade 5 </a></br> <a href=../php/upload5,2>Religion for grade 5 </a></br> <a href=../php/upload5,3> Mathematics for Grade 5 </a></br> <a href=../php/upload5,4>Science for Grade 5 </a></br> <a href=../php/upload5,5>History for Grade 5 </a></br> <a href=../php/upload5,6>English for Grade 5 </a></br>"'> View subjects </button> </td>
	</tr>	
</tbody>

<tfoot>
	<tr>
	<td colspan=2 align="center"> <div class="row2"> <b>Special Notifications </b> </div> </td>
	</tr>
	<tr>
	<td colspan=2> <textarea name="qualifications" rows="6" cols="140"> add  special notices here </textarea> </td> 
	</tr>

</tfoot>
</table>

</div>
</body>
</html>