<?php 
       session_start();
       require 'connect.php';  
     //echo $_SESSION["First_Name"];
       $First_Name02=$_POST['transfer'];
       $query01 = "SELECT * fROM `Users` where First_Name='$First_Name02'";
       $result = $mysqli->query($query01);
       $_SESSION['to']=$_POST['transfer'];
       //echo $_SESSION['to']
          
?>  

<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Table</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- BOOTSTRAP CSS FRAME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       <!--ICON-->
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

       <!--BOOTSTRAP JAVASCIPT -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <style>
     body {
        background-color: #00bfff;
      }
    .table {
       margin-top: 20px;
     } 
     h3 {
       margin-top: 20px;
     }
   </style>
</head>
<body>
 

<form action ="creditcheck.php" method="post">
    <div class="container">
      <h3>Credit Tranfer to</h3>
      <table class="table table-bordered table-hover" action="view.php" method="post">
       <thead>
          <th>Id</th>
          <th>FirstName</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Credit</th>
      </thead>
      <tr>
         <?php
            $row3 = mysqli_fetch_assoc($result); ?>
     <td><?php echo $row3['Id']; ?></td>
     <td><?php echo $row3['First_Name']; ?></td>
     <td><?php echo $row3['Last_Name']; ?></td>
     <td><?php echo $row3['Email']; ?></td>
     <td><?php echo $row3['Credit']; ?></td>
     </tr>
    </table>
          <strong> Transfer Amount: </strong><br><br>
          <input type="text" name="transfer"><br>
          <input type="submit">
     </div>
</form>
</body>
</html>
