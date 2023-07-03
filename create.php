<?php
    include 'database.php';
    connectDB();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE!</title>
</head>
<body>
    <h1>Inventory System</h1>
    <p style="color: blue;">CREATE PAGE</p>
    <a href="index.php">HOME</a><br><br>


    <form action="create.php" method='POST'>

        <label>Product Name:</label>
        <input name="productname" type='text'><br><br>

        <label>Product Description:</label>
        <input name="productdescription" type='text'><br><br>

        <label>Stocks:</label>
        <input name="stocks" type='number'><br><br>

        <button type='submit' >SUBMIT</button>

    </form>

<?php

if(isset($_POST['productname']) && isset($_POST['productdescription']) && isset($_POST['stocks'])) {
    $pname = $_POST['productname'];
    $pdescription = $_POST['productdescription'];
    $stocks = $_POST['stocks'];

    $conn = connectDB();
    $sql = "INSERT INTO products (product_name, product_description, stocks)
    VALUES ( '".$pname."', '".$pdescription."', '".$stocks."')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

    
</body>
</html>