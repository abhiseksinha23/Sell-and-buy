
<?php
include('dbcon.php');
if(isset($_POST)&&!empty($_POST))

$name = addslashes(strip_tags($_POST['name']));
$contact = addslashes(strip_tags($_POST['contact']));

$r = $_POST['choice'];

$sgg = addslashes(strip_tags($_POST['suggestion']));
$flag= 0;
$message="";

if(empty($sgg))
{
	$_SESSION['message'][0]="suggestion is Required";
	$flag=1;
}
else if(empty($name))
{
	$_SESSION['message'][0]="Name is Required";
	$flag=1;
}
else if(empty($contact))
{
	$_SESSION['message'][0]="contact is Required";
	$flag=1;
}
else if(empty($r))
{
	$_SESSION['message'][0]="rating is Required";
	$flag=1;
}
if ($flag!=0)
{
	
	header('Location: http://localhost/OLD%20WEBSITE/suggestion.php');
	
}
else
{
	$sql= "INSERT INTO suggestion(suggestion , name , contact , rating)  VALUES(' ".$sgg." ' , ' ".$name." ' ,' ".$contact." ' , ' ".$r." ')";
	//echo $sql;
	if($con->query($sql))
		{
			echo"<br>";
			echo"<br>";
			echo"<br>";echo"<br>";

			
              echo"<h3>Thank you for your valuable feedbacks and suggestions.</h3>";

			echo"<br>";echo"<br>";
			
                   
	    
        }

	else
		echo $con->error;
}
?>


<html>
<head> 
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

	 <style>
                 img{
                 	float : left ;
           }
    body{
    	background-color: #FFB6C1 ;
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
                  <a href="dashboard.php" style="color:#fff;">Main Menu</a>  
            </div>
        </div>
    </div>
  </div>
    
              <img src="images/images(38).jpg" height="370" width="1365" alt="suggestion">
			</body>
			</html>