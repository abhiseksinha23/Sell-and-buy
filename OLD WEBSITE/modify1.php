<?php

include('dbcon.php');
?>
<html>
<head>
   <style>
                 img{
                  float : left ;
           }
    body{
      background-color: #d3d3d3 ;
    }
              </style>
  </head>
      <body>
            <div class="header" >
      <img src="download.jpg" style="float:left; width:80px ; height: 78px; padding-left: 5px;">
      <h1 style="color: white;text-align: center;padding-top: 20px; padding-bottom: 18px;padding-left: 10px;padding-right: 10px;">CSE DEPARTMENT
  <button style="float: right; font-size: 22px;  background-color: orange; color:black;"><a href="adminpanel.php">GO BACK</a></button></h1>
</div>
<?php

include('dbcon.php');


if(isset($_POST) &&! empty($_POST))

$sname = addslashes( $_POST['name']);
$desig = addslashes($_POST['desig']);
$address = addslashes($_POST['address']);
$contact = addslashes( $_POST['mob']);
$email = addslashes( $_POST['email']);
$gender = addslashes($_POST['gender']);
$dob = addslashes($_POST['dob']);
$btech = addslashes($_POST['btech']);
$mtech = addslashes($_POST['mtech']);
$phd = addslashes($_POST['phd']);
$special = addslashes($_POST['special']);
//$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
//$image_name = addslashes($_FILES['image']['name']);

//$target_file = "uploaded pics/".$_FILES['fileupload' ]['name'];
//move_uploaded_file($temp_file1 , $target_file1);

$name = $_FILES['image']['name'];
$target = "uploadstaff/";
$target_file = $target . basename($_FILES["image"]["name"]);
$imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$extension_arr = array("jpg", "jpeg", "png", "gif");
if(in_array($imagefiletype, $extension_arr)){

$image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
$image = 'data:seller/'.$imagefiletype.';base64,'.$image_base64;

move_uploaded_file($_FILES['image']['tmp_name'], $target.$name);
}
$message = "";
$flag = 0;


if(empty($sname)){
$message = $message .  "Name is required"." <br>";
$flag = 1;
}




 if($flag!=0)
  {
   $_SESSION['message'] =  $message;
    header("Location: http://localhost/website/adminpanel.php#section2");
  }
else
{

//$sql1 = "INSERT INTO seller (pic1) VALUES('$file')";
	$sql = "UPDATE staff SET  name = $sname WHERE email='".$email."' ";
	
if($con->query($sql)){
echo"<br>";
			echo"<br>";
			
              echo"<h3><b>UPDATED.</b></h3>";
           echo"<h3><b>Go back to modify more Details.</b></h3>";
}
else
echo $con->error;

echo "<br>";
//if($con->query($sql1)){
//echo"<br>";
    //  echo"<br>";
      
          //    echo"<h3><b>Pic uploaded </b></h3>";
   
//}
//else
//echo $con->error;
}
?>

			</body>
			</html>