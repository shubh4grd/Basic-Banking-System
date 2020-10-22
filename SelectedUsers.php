<?php 
       session_start();
       require 'connect.php';  
       $sql = "SELECT * FROM `Users`";
       $result = $mysqli->query($sql);
      
?>   


<!DOCTYPE html>
<html lang="en">
<head>
   <title>Selected User Table</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- BOOTSTRAP CSS FRAME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


       <!--BOOTSTRAP JAVASCIPT -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <style>
      body {
         background-color: #00bfff;
      }
      h3 {
        margin-top: 15px;
        margin-bottom: 5px; 
        text-align: center;
      }
      .table{ 
        width: 65%;
        margin-right: auto;
        margin-left: auto;
        
      }
      th, td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
      }
    
     
   </style>
</head>
<body>

<div class="container">
<h3> User Table </h3>
 
<form action="userdetail.php" method="post">

<!-- User Information Table -->

<table class="table table-bordered table-hover">
   <thead>
      <th>Id</th>
      <th>FirstName</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Credit</th>
   </thead>
   <?php
       while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["Id"]. "</td><td> ". $row["First_Name"]. "</td><td>" . $row["Last_Name"]."</td><td>".$row["Email"]."</td><td>".$row["Credit"]."</td></tr>";
    }
   ?>
</table>

<!-- php code for options-->

<?php
  
   $query2 = "SELECT First_Name from Users";
   $result2 = $mysqli->query($query2);
   $options='';
   while($row2 = mysqli_fetch_assoc($result2))   
         {
              $options .='<option values="'. $row2['First_Name'].'">'.$row2['First_Name']. '</option>';
         }
?>

   <!-- Creating Options for selecting Users -->
    <div class="col col-sm align-self-center" style="text-align: center;">
     <select name="First_Name" onchange="this.form.submit()">
       <option value="">Select Any One User</option>
        <?php echo $options; ?> 
      </select>
    </div>
</div>

</form>
</body>
</html>

