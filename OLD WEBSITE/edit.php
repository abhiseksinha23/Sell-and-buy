
<?php include('dbcon.php'); ?>
<html>
<head>    
    <title>Sell and Buy</title><meta charset="utf-8" />
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
                   
                    float : right ;
           }

               body{
        background-color: #e6be8a ;
    }
              </style>   

</head>
 
<body style="text-align: center;">
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
                  <a href="buy1.php" style="color:#fff;">Go Back</a>  
            </div>
        </div>
    </div>
    <br/>
    <h2><b><u>EDIT STATUS</u> :)</b></h2>
    
    <form name="form1" method="post" action="">
      <h3><b> PLEASE SELECT ONE OF THEM : </b></h3>
                <h3><b>SOLD status :</b></h3>
               <h4><b> <input type="radio" name="choice" value="SOLD">SOLD<br><br>
                <input type="radio" name="choice" value="UNSOLD">UNSOLD</b></h4>

              
            <input type="hidden" name="id" value='<?php  echo$_GET['id'];?>'><br>
           <b> <input type="submit" name="update" value="Update" style="text-align:center;background-color:#1d5464; color:white; "></b><br><br>
           <h3><b><u>NOTICE</u> :- After updating you will remain to this page, go back to see the changes.</b></h3>
           
    </form>

</body>
</html>

<?php

include("dbcon.php");
$choice = 'UNSOLD';
if(isset($_POST['update']))
$choice = $_POST['choice'];
$id = $_GET['id'];
    $sql= "UPDATE seller SET sold='".$choice."' WHERE id='".$id."'";
    $sql1= "UPDATE seller1 
            SET sold = '".$choice."' 
            WHERE id= '".$id."' " ;
        $con->query($sql1);
    
    if($con->query($sql))
        {
            echo"<br>";
          }

    else
        echo $con->error;


?>
