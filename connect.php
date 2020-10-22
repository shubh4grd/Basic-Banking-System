  <?php
$mysqli = new mysqli("localhost","root","","Dummy_Data");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else
{
   //echo "Successfully Connected To DataBase";
}

?> 
