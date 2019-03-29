<?php include('header1.php'); ?>
<?php
include('dbcon.php');
?>
<html>
<head>
<title>Sell and Buy</title>
<style>
                 img{
                   
                    float : right ;
           }

               body{
        background-color: #ffff33 ;
    }
              </style>
</head>
<body style="text-align: center;">
	<br>
  <b> <h3>Registered??? See the list of users.<button style="float:center; font-size: 22px;  background-color:brown; color:white;"><a href="users.php">USERS</a></button></h3></b>
<h2><b><u>USER'S FORM</u></b></h2> 
<table align="center" style="text-align: center;">
<form name="user" action="register.php"  method="post" onsubmit ="return validate()" enctype="multipart/form-data">
 <tr><td><h4><b>Name :</b></h4></td><td><h4><b> <input id ="name" type="text" name="name" value="" placeholder = "Name"></b></h4></td></tr> 

<tr><td><h4><b>Email :</b></h4></td><td><h4><b>  <input id ="email" type="email" name="email" value="" placeholder = "Email"></b></h4></td></tr>
<tr><td><h4><b>Contact No. :</b></h4></td><td><h4><b> <input id ="contact" type="text" name="contact" value="" placeholder = "Contact No."></b></h4></td></tr>
<tr><td><h4><b>Address :</b></h4></td><td><h4><b> <textarea id="address" cols="22" rows="3" name="address" placeholder="Address"></textarea></b></h4></td></tr>
<tr><td><h4><b>Date of Birth:</b></h4></td><td><h4><b> <input id ="date" type="date" name="date" value="" placeholder = "Contact No."></b></h4></td></tr>
<tr><td><h4><b>Gender :</b></h4> </td><td><b><input id="gender1" type="radio" name="choice" value="male" checked="checked" ><b>Male </b><br>
 <input id="gender2" type="radio" name="choice"  value="female"  ><b>Female</b></b></td><br></tr>


<tr>
  <td></td>
  <td>
<b>
<input type ="submit" value="submit" name="submit" style="text-align:center;background-color:#1d5464; color:white; margin-top:20px; margin-right: 80px; margin-left: -200px;">
<input type ="reset" value="clear" name="reset" style="text-align:center;background-color:#1d5464; color:white;"></b></td></tr>
</form>
</table>
<script>
function validate()
{
var flag = 0;
var name = document.getElementById('name').value;

var email = document.getElementById('email').value;
var contact = document.getElementById('contact').value;
var address = document.getElementById('address').value;
var date =  document.getElementById('date').value;

var gender1 = document.getElementById('gender1').value;
var gender2= document.getElementById('gender2').value;


if(name=='')
{
alert("Enter your Name");
flag = 1;
}

else if(email=='')
{
alert("Enter your Email address");
flag = 1;
}

else if(contact=='')
{
alert("Enter your Contact No.");
flag =1;
}

else if(address=='')
{
alert("Enter your Address");
flag =1;
}

else if(date=='')
{
alert("Enter your Date of Birth");
flag =1;
}


else if((gender1=='' ) &&  (gender2==''))
{
alert("Enter your gender");
flag =1;
}



else
flag =0;

if(flag==0)
return true;
else
return false;

}
</script>


</body>
</html>
