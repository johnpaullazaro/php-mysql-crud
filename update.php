<?php
  include 'database.php'; 
?>
 

<?Php 
 if(isset($_GET["id"])) {
  $getid = $_GET["id"];
  $sql = "SELECT * FROM products where product_id=".$getid;
  $conn = connectDB();
  $result = $conn->query($sql);
  $name_="";$description_=""; $stocks_=0;
  $id_=0;
  if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
         $name_= $row["product_name"];
         $description_ = $row["product_description"];
         $stocks_ = $row["stocks"]; 
         $id_=$row["product_id"];
     }
  } else {
    echo "0 results";
  }
  $conn->close();
  
 }
 
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body> 
<div class="container">
  <h1>Update</h1>
  <a href="index.php">Home</a>
  
  <form action="updateProcess.php" method="post">
 
    <input type="hidden" name="productid" 
    value="<?php echo $id_ ?>">

    <label>Product Name</label><br>
    <input type="text" name="productname" 
    value="<?php echo $name_ ?>"  ><br><br>

    <label>Description</label><br>
    <input type="text" name="productdescription"  
    value="<?php echo $description_ ?>" ><br><br>

    <label>Stocks</label><br>
    <input type="number" name="productstocks"
    value="<?php echo $stocks_ ?>"  ><br><br>

    <input type="submit" class="btn btn-primary" 
    value="submit">
  </form>

</div>



</body>
</html>