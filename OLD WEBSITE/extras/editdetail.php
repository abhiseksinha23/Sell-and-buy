<?php

include("dbcon.php");

if(isset($_POST['update']))
$choice = $_POST['choice'];
$id = $_GET['id'];
	$sql= "UPDATE seller SET sold='$choice' WHERE id='$id'";
	$sql1= "UPDATE seller1 
	        SET sold = '".$choice."' 
	        WHERE id= '".$id."' " ;
        $con->query($sql1);
	echo $sql1;
	if($con->query($sql))
		{
			echo"<br>";
			echo"<br>";
   
  echo"updated";
        }

	else
		echo $con->error;


?>
