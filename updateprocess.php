<?php
  include 'database.php'; 
?>

<?php

   if(isset($_POST["productname"])
    &&  isset($_POST["productdescription"])
    &&  isset($_POST["productstocks"]))
   {
      $id= $_POST["productid"];
      $name= $_POST["productname"];
      $description = $_POST["productdescription"];
      $stocks = $_POST["productstocks"]; 

      $conn = connectDB();
      $sql = "update products set
       product_name='".$name."',
       product_description='".$description."', 
       stocks=".$stocks." where product_id=".$id."";
   
   if ($conn->query($sql) === TRUE) {
     echo "Data has been updated";
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();
   
   }

  
?>

<a href="index.php">Go Back</a>