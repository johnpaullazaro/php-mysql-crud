 
<?php

function connectDB(){ 
$servername = "localhost";
$username = "jp_admin";
$password = "AO[2P-jY[yg/ooPA";
$db = "inventory";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

return $conn;
//echo "Connected successfully";

}

?>