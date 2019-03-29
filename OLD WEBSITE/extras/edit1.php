<?php

include("dbcon.php");


$id = $_GET['id'];
$x = $_GET['sold'];

if($x == 'UNSOLD' || $x = 'Unsold')
$x = 'SOLD';

else if($x == '')
	$x = 'UNSOLD';
else
$x = 'UNSOLD';
     $sql = "UPDATE seller SET sold= $x WHERE id=$id ";
	$sql1= "UPDATE seller1 SET sold= $x WHERE id=$id ";
	//echo $sql;
	if($con->query($sql))
		{
header("Location:buy1.php");  
	    
        }

	else
		echo $con->error;


?>