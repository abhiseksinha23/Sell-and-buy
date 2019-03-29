<?php
include('header1.php');
?>
<?php
include('dbcon.php');
?>

<html>
<head> 
	<style>
                 img{
                   
                    float : right ;
           }

               body{
        background-color: #d3d3d3 ;
    }
              </style>
</head>

<body style="text-align: center;">
	<br><br>
      <b> <h3 style="text-align: center;">New to this page??? Let us know about you. <button style="float:center; font-size: 22px;  background-color: black; color:white;"><a href="userform.php">Register</a></button></h3></b>
    <h3><u><b>USERS DETAILS</b></u></h3>
   <b> <table width='100%' style="padding-left: 50px; padding-right: 50px; text-align: center;">
        <tr bgcolor='lightblue'>
              <td><b>Id</b></td>
          <td><b>Name</b></td>
            <td><b>Email</b></td>
         <td><b>Contact No.</b></td>
         <td><b>Address</b></td>
            <td><b>Date of Birth</b></td>
               <td><b>Gender</b></td>

               
        </tr>

        <?php 

         $sql =  "SELECT id, name, email, address, contact, dob , gender FROM users  ORDER BY id ASC";
          $result = $con->query($sql);

         if($result->num_rows > 0)
{
        while($row = $result->fetch_assoc()) {         
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>"; 
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['contact']."</td>";
             echo "<td>".$row['address']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['gender']."</td>";
echo "</tr>";    
        }
}
        ?>
    </table></b>
    <style>
            table,th,td{
                border: 1.3px solid black;
            }

    </style>

 
</body>
</html>


