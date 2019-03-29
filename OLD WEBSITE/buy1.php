
<?php
include('dbcon.php');
?>
<?php include('header1.php'); ?>
<html>
<head>
	<html>
<head>
  <style type="text/css">
body{
   
      background-color: #adff2f ;
    }</style>
          </head>
          <body>
</head>

<body>
  <br>
  <b> <h3 style="text-align: center;">Want to sell something??? Register as Seller. <button style="float:center; font-size: 22px;  background-color: orange; color:white;"><a href="sell1.php">Seller</a></button></h3></b>
    <h2><b>  <u>ITEMS</u></b></h2>

<img src="images/images(34).jpg" width="200" height="200" alt="Shopping"><b>
	<h4><b><u>NOTICE</u> :  If the item has been sold please EDIT the STATUS to SOLD from UNSOLD.</b></h4>
	<h4><b><u>NOTICE</u> :  If you have made any mistake in filling the SELLER'S FORM please FILL it AGAIN. and please DELETE the PREVIOUS ONE.</b></h4>
	<h3><b><u>THANK YOU</u> for our SUPPORT   :)</b></h3>
    <table width='100%' style="text-align: center;">
        <tr bgcolor='lightblue'>
              
           
              <td><b>Pic </b></td>
               <td><b>Description</b></td>
             <td><b>ID</b></td>

              <td><b>Item Type</b></td>
              <td><b>Item No.</b></td>
            <td><b>item Name</b></td>
             
            <td><b>Price</b></td>
          <td><b>Seller</b></td>
            <td><b>Email</b></td>
            <td><b>Contact</b></td>
         <td><b>Address</b></td>
            
               <td><b>Status</b></td>
               <td><b>Update</b></td>

        </tr>

        <?php 

         $sql =  "SELECT  id, name, email, address, contact, itemtype, itemtypenumber , itemname , price , pic1 , description ,  sold FROM seller ORDER BY itemtypenumber ASC";
          $result = $con->query($sql);

         if($result->num_rows > 0)
{
        while($row = $result->fetch_assoc()) {         
            echo "<tr>";
           $image_src = $row['pic1'];
             echo  "<td>"."<img  src= '$image_src' height='200' width='350'>"."</td>";
             //echo  "<td>".'<img height="200" width="350" src="data:seller/jpeg;base64,'.base64_encode($row['pic1']).' ">'."</td>";
            // echo  "<td>".'<img height="200" width="350" src="data:seller;base64,'.base64_encode($row['pic1']).' ">'."</td>";
               echo "<td>".$row['description']."</td>";
             echo "<td>".$row['id']."</td>";

            echo "<td>".$row['itemtype']."</td>";
             echo "<td>".$row['itemtypenumber']."</td>";
            echo "<td>".$row['itemname']."</td>";
           
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['name']."</td>"; 
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['contact']."</td>";
            echo "<td>".$row['address']."</td>";
             echo "<td>".$row['sold']."</td>";

            echo  "<td>"."<a href=\"edit.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to Edit?')\">Edit</a> |  <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>  "."</td>";    
echo "</tr>";    
        }

}
        ?>
    </table>
    <style>
            table,th{
                border: 1px solid black;
               
               
            }
             td{
                border: 1px solid black;
                column-width: 3000px;
               
            }

    </style>
<!-- /. PAGE INNER  -->
</body><!-- /. PAGE WRAPPER  -->

</html>

