 
<?php


function connectDB(){ 
  
// Create connection
$conn = new mysqli("localhost", "jp_admin","AO[2P-jY[yg/ooPA","inventory");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

return $conn;
}

?>