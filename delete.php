<?php
  include 'database.php'; 
?>
 

<?Php 
 if(isset($_GET["id"])) {
  $id = $_GET["id"];
  
  $conn = connectDB();
  $sql = " delete from products where product_id='".$id."'"; 
        if ($conn->query($sql) === TRUE) {
        echo "deleted data successfully"; 
        
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
 }
 
?>
<a href="index.php">Home</a>

 