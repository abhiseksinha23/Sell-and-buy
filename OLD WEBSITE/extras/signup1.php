<?php
session_start();
include('dbcon.php');
if(isset($_POST)&&!empty($_POST))
//echo "<pre>";print_r($_POST);echo "</pre>";

$name = addslashes(strip_tags($_POST['Name']));
$email = addslashes(strip_tags($_POST['Email']));
$uname = addslashes(strip_tags($_POST['Username']));
$pass =strip_tags($_POST['Password']);
$cnt = strip_tags($_POST['Contact']);
$add = addslashes(strip_tags($_POST['Address']));
$dob = strip_tags($_POST['DOB']);
$flag= 0;
$message="";

if(empty($name))
{
	$_SESSION['message'][0]="Name is Required";
	$flag=1;
}
else if(empty($email))
	{
	$_SESSION['message'][1]="Email is Required";
	$flag=1;
}
if(empty($uname))
{
	$_SESSION['message'][0]="Username is Required";
	$flag=1;
}
else if(empty($pass))
	{
	$_SESSION['message'][2]="Password is Required";
	$flag=1;
}
else if(empty($cnt))
	{
	$_SESSION['message'][3]="contact is Required";
	$flag=1;
}
if(empty($add))
{
	$_SESSION['message'][0]="Address is Required";
	$flag=1;
}
if ($flag!=0)
{
	
	header('Location: http://localhost/OLD%20WEBSITE/signup.php');
	
}
else
{
	$sql="INSERT INTO (name, email, username, password, contact, dob, address) VALUES(' ".$name." ',' ".$email." ', ' ".$uname." ',' ".$pass." ',' ".$cnt." ',' ".$dob." ',' ".$add." ')";
	//echo $sql;
	if($con->query($sql))
		{
			echo"sign up done, click here to go to login page";
	    header('Location: http://localhost/OLD%20WEBSITE/login.php');
        }

	else
		echo $con->error;
}

?>