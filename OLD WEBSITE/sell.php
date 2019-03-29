<?php include('header1.php'); ?>
<?php
include('dbcon.php');

?>
<html>
<head>
<title>web form</title>       
<style>

           .column {
           	float :right;
           }
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
<body style="align-content: center;">
	<br>
<img src="images/im1.jpg" width="200" height="200" alt="Sellers">
<h2><b><u>SELLER'S FORM</u></b></h2>
<br>
<form action="sellerdetail.php" method="post" name="user" onsubmit = "return validate()" enctype="multipart/form-data">
<h4><b>Name* : <input id= "name" type="text" name="sname" value="" placeholder="Name"/></b></h4><br>
<h4><b>Contact No.* :</b> <input id ="contact" type="text" name="contact" value="" placeholder = "Contact No."></h4><br>
<h4><b>Email* :</b> <input  id= "email"  type="email" name="email" value="" placeholder="Email"/></h4><br>
<h4><b>Address*:</b> </h4><textarea  id= "address"  cols="35" rows="5" name="address" placeholder="Address"></textarea><br>
<h4><b>Gender :</b></h4><input type="radio" name="choice" value="male" checked="checked"><b>MALE</b><br>
<input type="radio" name="choice" value="female"><b>FEMALE</b><br>
<input type="radio" name="choice" value="other"><b>OTHER</b><br>
<h4><b>Item's Name*:</b> <input id= "itemname" type="text" name="itemname" value="" placeholder="Item's Name"/></h4><br>


<h4><b>Item Type*</b> : <br><select  name="itemtype" id="itemtype" >
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
</select><br></h4><br>

<h4><b>Item Type Number*</b> : <br><select  name="itemtypenumber" id="itemtypenumber" >
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
</select></h4><br>

<h4><b>Item's Price*:</b> <input id= "price" type="text" name="price" value="" placeholder="Price"/></h4><br>

<h4><b>Upload the Pic Of Product</b></h4>
 <h4><b>Pic Of the Item*:</b><input type="file" name="image" id="image" /><br></h4>

<h4><b>Description of the Item*:</b> </h4><textarea  id= "description"  cols="35" rows="5" name="description" placeholder="Description"></textarea><br>



<br>
<h5><b><input type="submit" name="submit" value="submit">
<input type="reset" name="Reset" value="Reset"></b></h5>
<br><br>

</form>

<h4><a href="buy1.php">Go back to buyer's page.</a></h4>
<br><br>

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

