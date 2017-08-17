<?php

 if(isset($_FILES['upload'])){
  $filename=$_FILES["upload"]['name'];
  $tempname=$_FILES['upload']['tmp_name'];
  
  
if(move_uploaded_file($tempname,"Notes/".$filename)){
	echo "<center>";
	echo "The file ".  basename( $_FILES['upload']['name']). 
    " has been uploaded";
	
	echo "<a href='../../index.php'><br><input type='button' value='GO TO HOME'></a>";
	echo "</center>";
} else{
    echo "There was an error uploading the file, please try again!";
}



    //header('Location: index.php?filename='.$filename );

    exit();

  
 }

?>


<html>
    <head> 
    <style type="text/css">
        form{

        font-size:20px;
        }
        input[type=submit],[type=file]{
        font-size:20px;
}   
    </style>
    
    </head>

    <body>
        <body background="../img/bg1.jpg">
        <h4 style="color: #00004d;font-size: 34px;">Lecture Notes</h3>
        <h3 style="color: #00004d;font-size: 30px;">GRADE 1</h3>
        <form action="" method="POST"  enctype="multipart/form-data">
    
            <input type="file" name="upload">
            <input type="submit" value="Upload File" />

        </form>
    </body>
</html>
