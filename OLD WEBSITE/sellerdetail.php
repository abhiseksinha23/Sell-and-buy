
<?php

include('dbcon.php');


if(isset($_POST) &&! empty($_POST))

$sname = addslashes( $_POST['sname']);
$contact = addslashes( $_POST['contact']);
$email = addslashes( $_POST['email']);
$address = addslashes($_POST['address']);
$gender = $_POST['choice'];
$itemname = addslashes( $_POST['itemname']);
$itemtype = $_POST['itemtype'];
$itemtypenumber = $_POST['itemtypenumber'];
$price = addslashes($_POST['price']);
$dis = addslashes($_POST['description']);
//$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
//$image_name = addslashes($_FILES['image']['name']);

//$target_file = "uploaded pics/".$_FILES['fileupload' ]['name'];
//move_uploaded_file($temp_file1 , $target_file1);

$name = $_FILES['image']['name'];
$target = "uploadedpics/";
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

 else if(empty($contact)){
$message = $message .  "Contact is required"." <br>";
$flag = 1;
}

 else if(empty($email)){
$message = $message .  "Email is required"." <br>";
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

 else if(empty($itemname)){
$message = $message .  "Item Name is required"." <br>";
$flag = 1;
}


else if(empty($itemtype)){
$message = $message . " Item type is required". "<br>";
$flag = 1;
}

else if(empty($itemtypenumber)){
$message = $message .  "Item Type Number is required". "<br>";
$flag = 1;
}

else if(empty($price)){
$message = $message .  "Price is required". "<br>";
$flag = 1;
}

 else if(empty($dis)){
$message = $message .  "Item Name is required"." <br>";
$flag = 1;
}


 if($flag!=0)
  {
   $_SESSION['message'] =  $message;
    header("Location: http://localhost/OLD%20WEBSITE/sell1.php");
  }
else
{

//$sql1 = "INSERT INTO seller (pic1) VALUES('$file')";
	$sql = "INSERT INTO seller ( name, contact, email , address, gender, itemname , itemtype, itemtypenumber, price , description ,  pic1 ,sold) VALUES('".$sname."', '".$contact."' , '".$email."', '".$address."', '".$gender."', '".$itemname."', '".$itemtype."', '".$itemtypenumber."', '".$price."',  '".$dis."' , '".$image."' , ' Unsold')";
	$sql1 = "INSERT INTO seller1 ( name, contact, email , address, gender, itemname , itemtype, itemtypenumber, price , description ,  pic1 ,sold) VALUES('".$sname."', '".$contact."' , '".$email."', '".$address."', '".$gender."', '".$itemname."', '".$itemtype."', '".$itemtypenumber."', '".$price."',  '".$dis."' , '".$image."' , ' UNSOLD')";
	$con->query($sql1);
if($con->query($sql)){
echo"<br>";
			echo"<br>";
			echo"<br>";echo"<br>";
              echo"<h3><b>Your product has been registered to our website.</b></h3>";
           echo"<h3><b>Thank you for choosing us.</b></h3>";
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
<html>
 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sell and Buy</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="bootstrap.css" type="text/css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="font-awesome.css" type="text/css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="custom.css" type="text/css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />

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
     <div class="header">     
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                   
                    <a class="navbar-brand" href="#">
                        <img src="images/image.jpg" width="80" height="60">
                    </a>
                     <h3 style="color:#fff;"> S&B 
                            (SELL AND BUY)</h3>
                        
                </div>
               <span class="logout-spn" >
                  <a href="sell1.php" style="color:#fff;">GO BACK</a>  
            </div>
        </div>
    </div>
  </div>
   <b> <h3>Registered. Go to the to the buyer's page.<button style="float:center; font-size: 22px;  background-color:orange; color:white;"><a href="buy1.php">Product</a></button></h3></b><br>
    <b> <h3>Go to the main page.<button style="float:center; font-size: 22px;  background-color:orange; color:white;"><a href="dashboard.php">Main Menu</a></button></h3></b>

              <img src="images/images(38).jpg" height="225" width="1365" alt="suggestion">
			</body>
			</html>