<?php 
       session_start();
       require 'connect.php';  

       $First_Name01 = $_POST["First_Name"];
       $sqluser = "SELECT * FROM `Users` WHERE First_Name='$First_Name01'";
       $result = $mysqli->query($sqluser);
       $_SESSION['First_Name']="$First_Name01";

      // echo $_SESSION['First_Name'];
      
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
     .table{ 
        width: 65%;
        margin-top: 50px;
        margin-right: auto;
        margin-left: auto;
        color: #000000;        
      }
      .btn {
         margin-top: 15px;     
       }
      
   </style>
</head>
<body>
 
<!-- Selected User Table -->

<div class="container">
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
        $row3 = mysqli_fetch_assoc($result);
     ?>
     <td><?php echo $row3['Id']; ?></td>
     <td><?php echo $row3['First_Name']; ?></td>
     <td><?php echo $row3['Last_Name']; ?></td>
     <td><?php echo $row3['Email']; ?></td>
     <td><?php echo $row3['Credit']; ?></td>
   </tr>

</table>


   
     <div class="col col-sm align-self-center" style="text-align: center";>                   
            <a type="button" class="btn btn-primary" href="view.php">Click Here to Select User</a>
     </div>
     <div class="col col-sm align-self-center" style="text-align: center;">                   
            <a type="button" class="btn btn-primary" href="SelectedUsers.php">Back</a>
     </div>

</div>
</body>
</html>
