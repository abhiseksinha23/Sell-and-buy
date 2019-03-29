<?php include('header1.php'); ?>
<?php

include('dbcon.php');

if(isset($_POST) &&! empty($_POST))

$name = addslashes(strip_tags( $_POST['name']));
$email = addslashes( strip_tags($_POST['email']));
$contact = addslashes(strip_tags( $_POST['contact']));
$address = addslashes($_POST['address']);
$date =  $_POST['date'];
$gender = $_POST['choice'];



$message = "";
$flag = 0;


if(empty($name)){
$message = $message .  "Name is required"." <br>";
$flag = 1;
}

 else if(empty($email)){
$message = $message .  "Email is required"." <br>";
$flag = 1;
}

else if(empty($contact)){
$message = $message . " Contact No. is required". "<br>";
$flag = 1;
}

else if(empty($address)){
$message = $message .  "Address is required"."<br>";
$flag = 1;
}

else if(empty($date)){
$message = $message . " Date of Birth is required". "<br>";
$flag = 1;
}

else if(empty($gender)){
$message = $message .  "gender is required". "<br>";
$flag = 1;
}




 if($flag==1)
  {
   $_SESSION['message'] =  $message;
    header("Location:http://localhost/OLD%20WEBSITE/userform.php");
  }
else
{
$sql = "INSERT INTO users( name, email, contact, address, dob, gender) VALUES('".$name."', '".$email."' , '".$contact."' , '".$address."','".$date."' ,'".$gender."')";
if($con->query($sql)){
echo"<br>";
			echo"<br>";
			echo"<br>";
              echo"<h3><b>     Thank you for being a part of our website.</b></h3>";
echo"<br>";echo"<br>";
			
}
else
echo $con->error;
}

?>

<html>
<head>
	 <style>
                 img{
                 	float : right ;
           }
    body{
    	 background-color: #c0c0c0 ;
    }
              </style>
	</head>
			<body>


              <img src="images/image4.jpg" height="400" width="1365" alt="thanks"><br>


			</body>
			</html>