
<?php
include('header1.php');

include('dbcon.php');
?>

<html>
<head>
    
     <style>
                 img{
                   
                    float : right ;
           }

               body{
              background-image: url("images/bg3.jpg");
              color:white;
        background-color: #ADFF2F ;

    }
              </style>
</head>
<body>
	<br>
    
    
<div class="container" style="text-align: center;">
	<h3><b><u>Please help us to improve.</u></b></h3>
<br>
<form name= "sugggestion" action = "thanks.php" method= "post" onsubmit ="return validate()" enctype="multipart/form-data" >
	<b>Your Name </b>    :      <input id ="1" type= "text" name="name" placeholder="Name" style="color:black;"><br><br>
	<b>Contact No.</b> :  <input id ="2" type= "text" name="contact" placeholder="Contact" style="color:black;"><br><br>
	
	<b>Rate us please (Out of 5):</b><br>
                                        1 <input id="r1" type= "radio"  name= "choice" value="1">
                                        2 <input id="r2" type= "radio"  name= "choice" value="2">
                                        3 <input id="r3" type= "radio"  name= "choice" value="3">
                                        4 <input id="r4"type= "radio"  name= "choice" value="4">
                                        5 <input id="r5" type= "radio"  name= "choice" value="5" checked="checked">
	                                  
<h4><b>Please give your valuable suggestion here :</b> </h4><textarea id ="3" cols="40" rows="5" name= "suggestion" style="color:black;"></textarea>
	<br><br>
<input type = "submit"  name = "submit" value= "Submit" style="color:black;">
</form>
</div>
   <script>
        function validate()
    {
        flag = 0;
        
        if(document.getElementById("1").value=='')
        {
            alert("Enter Your Name");
            flag = 1;
        }
        
       else  if(document.getElementById("2").value=='')
        {
            alert("Enter Your contact ");
            flag = 1;
        }
       else if(document.getElementById("3").value=='')
        {
            alert("Please Enter your feedback");
            flag = 1;
        }
      else if((r1=='' ) &&  (r2=='') && (r3=='' ) &&  (r4=='') && (r5== ''))
        {
            alert("Please Enter your rating");
            flag = 1;
        }

        if (flag==0) 
         return true;
        
        else
            return false;
    }
    </script>
</body>
</html>

 