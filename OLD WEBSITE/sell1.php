<?php include('header1.php'); ?>
<?php
include('dbcon.php');
?>
<html>
<head>
<title>web form</title>       
<style>

          
                 img{
                   
                    float : right ;
           }

               body{
        background-color: #87ceeb ;
    }
              </style>   
<script>

alert("Please fill the form carefully.  * are mandatory to be filled.");

function display()
{
document.write("All details are compulsary");
alert("fill it up please");
}

</script>
</head>

<body style="text-align: center;">
	<br>
  <div class="container">
    <b> <h3>Registered??? GO see your product in the list.<button style="float:center; font-size: 22px;  background-color:orange; color:white;"><a href="buy1.php">Product</a></button></h3></b>
<h2><b><u>SELLER'S FORM</u></b></h2>
<br>
<div class="container" style="text-align:center; margin-top:-450px;">
<form action="sellerdetail.php" method="post" name="user" onsubmit = "return validate()" enctype="multipart/form-data">
    <table align="center" style="align-content: center;">
<tr><td><h4><b>Name* :</b></h4></td><td><h5><b> <input id= "name" type="text" name="sname" value="" placeholder="Name"/></b></h5></td></tr><br><br>
<tr><td><h4><b>Contact No.* :</b></h4></td><td> <b><input id ="contact" type="text" name="contact" value="" placeholder = "Contact No."></b></td></tr><br>
<tr><td><h4><b>Email* :</b></h4></td><td><h5><b> <input  id= "email"  type="email" name="email" value="" placeholder="Email"/></b></h5></td></tr><br>
<tr><td><h4><b>Address*:</b></h4></td><td><h5><b><textarea  id= "address"  cols="22" rows="3" name="address" placeholder="Address"></textarea></b></h5></td></tr><br>
<tr><td><h4><b>Gender :</b></h4></td><td><input type="radio" name="choice" value="male" checked="checked"><b>MALE </b>
<input type="radio" name="choice" value="female"><b>FEMALE </b>
<input type="radio" name="choice" value="other"><b>OTHER </b><td></tr><br>
<tr><td><h4><b>Item's Name*:</b></h4></td><td><h5><b><input id= "itemname" type="text" name="itemname" value="" placeholder="Item's Name"/></b></h5></td></tr><br>


<tr><td><h4><b>Item Type* :</b></h4></td><td><h5><b><select  name="itemtype" id="itemtype" >
<option value="">Select a type</option>
<option value="Books">BOOKS</option>
<option value="Other Stationaries">STATIONARIES</option>
<option value="Furnitures">FURNITURES</option>
<option value="Electronics">ELECTRONICS</option>
<option value="TVs & Appliances">TVs & APPLIANCES</option>
<option value="Sports">SPORTS</option>
<option value="Automobiles">AUTOMOBILES</option>
<option value="Pets">PETS</option>
<option value="Toys">TOYS</option>
<option value="Other">OTHER</option>
</select></b></h5></td></tr><br>

<tr><td><h4><b>Item Type Number* :</b></h4></td><td><h5><b><select  name="itemtypenumber" id="itemtypenumber" >
<option value="">Select a type</option>
<option value="1">1.BOOKS</option>
<option value="2">2.STATIONARIES</option>
<option value="3">3.FURNITURES</option>
<option value="4">4.ELECTRONICS</option>
<option value="5">5.TVs & APPLIANCES</option>
<option value="6">6.SPORTS</option>
<option value="7">7.AUTOMOBILES</option>
<option value="8">8.PETS</option>
<option value="9">9.TOYS</option>
<option value="10">10.OTHER</option>
</select></b></h5></td></tr><br>

<tr><td><h4><b>Item's Price*:</b></h4></td><td><h5><b><input id= "price" type="text" name="price" value="" placeholder="Price"/></b></h5></td></tr><br>

<tr><td><h4><b>Pic Of Product :</b></h4></td>
<td><h5><b><input type="file" name="image" id="image" /></b></h5></td></tr>

<tr><td><h4><b>Description of the Item*:</b></h4></td><td><h5><b><textarea  id= "description"  cols="22" rows="3" name="description" placeholder="Description"></textarea></b></h5></td></tr><br>



<br>
<tr><td></td><h5><b><td><input type="submit" name="submit" value="submit" style="text-align:center;background-color:#1d5464; color:white; margin-top:20px; margin-right: 80px; margin-left: -200px;">
<input type="reset" name="Reset" value="Reset" style="text-align:center;background-color:#1d5464; color:white; margin-top:20px;"></td></b></h5></tr>
<br><br>
</table>
</form>
</div>
   
</div>
</body>

<script>
function validate()
{
var flag = 0;
var name = document.getElementById('name').value;
var email= document.getElementById('email').value;
var add = document.getElementById('address').value;
var contact = document.getElementById('contact').value;
var iname = document.getElementById('itemname').value;
var itpye = document.getElementById('itemtype').value;
var itypenumber = document.getElementById('itemtypenumber').value;
var dis = document.getElementById('description').value;

if(name=='')
{
alert("Enter the Name");
flag = 1;
}
else if(contact=='')
{
alert("Enter your Contact");
flag = 1;
}
else if(email=='')
{
alert("Enter your Email");
flag = 1;
}
else if(add=='')
{
alert("Enter your address");
flag = 1;
}
else if(iname=='')
{
alert("Enter Product's name ");
flag=1;
}
else if(itype=='')
{
alert("Enter Product's Type ");
flag=1;
}
else if(itypenumber=='')
{
alert("Enter Type number ");
flag=1;
}
else if((itypenumber=='1' && itpye!= 'Books')|| (itypenumber=='2' && itpye!= 'Other Stationaries' )|| (itypenumber=='3' && itpye!='Furnitures')|| (itypenumber=='4' && itpye!='Electronics')|| (itypenumber=='5' && itpye!= 'TVs & Appliances')|| (itypenumber=='6' && itpye!= 'Sports')|| (itypenumber=='7' && itpye!= 'Automobiles')|| (itypenumber=='8' && itpye!= 'Pets')|| (itypenumber=='9' && itpye!= 'Toys')||(itypenumber=='10' && itpye!= 'Other'))
{
alert("Match the Type number and Item Type");
flag=1;
}
else if(price=='')
{
alert("Enter Product's Price ");
flag=1;
}
else if(dis=='')
{
alert("Enter Product's Discription");
flag=1;
}
else
flag=0;

if(flag==0)
return true;
else
return false;
}


</script>

</html>

