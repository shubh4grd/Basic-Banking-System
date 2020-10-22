<?php 
       session_start();
       require 'connect.php'; 
       $First_Name01 = $_SESSION["First_Name"];
       $sqluser = "SELECT First_Name FROM `Users` WHERE NOT First_Name='$First_Name01'";  
       $result = $mysqli->query($sqluser);     
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


       <!--BOOTSTRAP JAVASCIPT -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <style>
     body {
        background-color: #00bfff;
      }
     .btn {
         margin: 15px 600px auto auto;  
      }
      .container {
         margin-right: -100px;
      } 
      h2 {
        margin-top: 10px;
      }
   </style>
</head>
<body>

<div class="container">
       <h2>Select User for Credit Transfer</h2>
       <form action="transfer.php" method="post">

         <table>
          <th><h3 class="u-info-head">Name</h3></th>
          <?php  
             while($row = $result->fetch_assoc()) { ?>
             <tr>
               <td> 
                <div class="name_select">
                <input type="radio" name="transfer" value="<?php echo $row["First_Name"]; ?>">
                      <?php echo $row["First_Name"]; ?>
                </div>
               </td>
            </tr>
            <?php } ?>     
            <tr>
              <td><input type="submit" value="credit"></td>
            </tr>
         </table>

       </form>

    
</div>

</body>
</html>
