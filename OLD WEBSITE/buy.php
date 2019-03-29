
<?php
include('dbcon.php');
?>
<html>
<head>
</head>

<body>
    <h2>ITEMS</h2>

    <table width='80%'>
        <tr bgcolor='lightblue'>
              <td>Sno.</td>
              <td>Item Type</td>
              <td>Item Type Number</td>
            <td>item Name</td>
            <td>Item's Price</td>
          <td>Seller's Name</td>
            <td>Seller's Email</td>
            <td>Seller's Address</td>
         <td>Seller's contact</td>
            
            

        </tr>

        <?php 

         $sql =  "SELECT id, name, email, address, contact, itemtype, itemtypenumber , itemname , price FROM users ORDER BY itemtypenumber ASC";
          $result = $con->query($sql);

         if($result->num_rows > 0)
{
        while($row = $result->fetch_assoc()) {         
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['itemtypenumber']."</td>";
             echo "<td>".$row['itemtype']."</td>";
            echo "<td>".$row['itemname']."</td>";
            echo "<td>".$row['price']."</td>";
            
            echo "<td>".$row['name']."</td>"; 
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['contact']."</td>";
            echo "<td>".$row['address']."</td>";
           
echo "</tr>";    
        }
}
        ?>
    </table>
    <style>
            table,th,td{
                border: 0.3px solid black;
            }

    </style>
 <a href="dashboard.php"><h4>Back to main menu.</h4></a><br/><br/>
</body>
</html>


