<!DOCTYPE html>
<html lang="en">
<head>
   <title>User Table</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
   select {
     margin-left: 680px;
     margin-top:-5px;
   }
   table, th, td {
       border: 1px solid #ddd;
   }
      body {
         background-color: #00bfff;
      }
      h3 {
        text-align: center;
      }
      table{
        border-collapse: collapse;
        width: 70%;
        margin-right: auto;
        margin-left: auto;
        position: center;
      }
      th, td {
        padding: 8px;
        text-align: center;
        border-bottom: 1px solid #ddd;
      }
      tr:hover {
         background-color:#f5f5f5;
      }
      caption {
        text-align: center;
        border: 1px solid #ddd;
      }
      .position {
       margin-top: 50px;
       margin-left: 100px;
      }
      
   </style>
</head>
<body>
   <h3> User Table </h3>

<form="userdetail.php" method="post">

<?php
  require 'connect.php';  
  $sql = "SELECT * FROM `Users`";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
     echo "<table><tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Credit</th></tr>" ;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["Id"]. "</td><td> ". $row["First_Name"]. "</td><td>" . $row["Last_Name"]."</td><td>".$row["Email"]."</td><td>".$row["Credit"]."</td></tr>";
    }
   echo "</table>";
   } 
   else {
    echo "0 results";
   }
$mysqli -> close();
?>

 <div class="container">
       <div class="col col-sm align-self-center" style="text-align: center;">
       <br><a href="index.php"><input type="button" class="btn btn-info" Value="Back"></a><br><br></div>
 </div>


</body>
</html>

  
