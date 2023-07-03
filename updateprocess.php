<?php 
    include 'database.php';
?>

<?php

if(isset($_POST['productname']) && isset($_POST['productdescription']) && isset($_POST['stocks'])) {
    $conn = connectDB();
    $pid = $_POST["productid"];
    $pname = $_POST["productname"];
    $pdescription = $_POST["productdescription"];
    $stocks = $_POST["stocks"];
    $sql = "update products set product_name='".$pname."',
    product_description='".$pdescription."',
    stocks=".$stocks." where product_id=".$pid."";
  
    if ($conn->query($sql) === TRUE) {
    echo "Data has been updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<a href="index.php">GO BACK!</a>