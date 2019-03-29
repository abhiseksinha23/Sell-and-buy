<?php

include("dbcon.php");


$id = $_GET['id'];


	$sql1= "INSERT INTO reason ( idDeleted )  VALUES(' ".$id." ' )";
	//echo $sql;
	if($con->query($sql1))
		{
			echo"<br>";
			echo"<br>";

		        $sql = "DELETE FROM seller  WHERE id=$id";
$result = $con->query($sql);

 
header("Location:buy1.php");  
	    
        }

	else
		echo $con->error;


?>