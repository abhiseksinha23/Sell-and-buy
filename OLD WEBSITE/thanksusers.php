<?php

session_start();
$server = "localhost";
$user = "root";
$password = "";
$database = "old website";
$con = new mysqli($server, $user, $password,$database);  

if( $con->connect_error) 
die($con->connect_error);

if(isset($_POST) &&! empty($_POST))

$name = addslashes( $_POST['user_name']);
$pass =  md5(addslashes($_POST['password']));
$address = addslashes($_POST['address']);
$gender = $_POST['choice'];
$v1 = $_POST['vehicle1'];
$v2 = $_POST['vehicle2'];
$v3 = $_POST['vehicle3'];
$v4 = $_POST['vehicle4'];
$country = $_POST['country'];
$sports = $_POST['sports'];
$file = $_POST['fileupload']['name'];

$message = "";
$flag = 0;


if(empty($name)){
$message = $message .  "Name is required"." <br>";
$flag = 1;
}

 else if(empty($pass)){
$message = $message .  "Password is required"." <br>";
$flag = 1;
}

else if(empty($address)){
$message = $message .  "Address is required"."<br>";
$flag = 1;
}

else if(empty($gender)){
$message = $message .  "gender is required". "<br>";
$flag = 1;
}

else if(empty($v1) &&empty($v2) &&empty($v3) &&empty($v4) )
{
$message = $message .  "Vehicle is required". "<br>";
$flag = 1;
echo"<br>";
}

else if(empty($country)){
$message = $message . " Country is required". "<br>";
$flag = 1;
}

else if(empty($sports)){
$message = $message .  "Sports is required". "<br>";
$flag = 1;
}


else if(empty($file)){
$message = $message . "File is required"." <br>";
$flag = 1;
}


 if($flag==0)
  {
   $_SESSION['message'] =  $message;
    header("Location: /htdocs/newform.php");
  }
else
{
$sql = "INSERT INTO users( username, password, address, gender, country, files) VALUES('".$name."', '".$pass."' , '".$address."', '".$gender."', '".country."', '".$file."')";
if($con->query($sql)){
echo"<br>";
echo "Sign Up Done";
}
else
echo $con->error;
}
echo "<br>";
?>

<html>
<body>
<br>
<a href="newform.php">Go back to form page</a><br>
<a href="starter.php">Go back to main page</a>
</body>
</html>