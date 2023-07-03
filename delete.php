<?php
    include 'database.php';
    connectDB();

    if(isset($_GET['id'])) {

    // sql to delete a record
    $conn = connectDB();
    $sql = "DELETE FROM products WHERE product_id=".$_GET['id'];

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
        
    }
?>

<a href="index.php">GO BACK!</a>

