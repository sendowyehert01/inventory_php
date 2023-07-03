<?php
    include 'database.php';
    connectDB();
?>

<?php
                $productname_ = "";
                $productdescription_ = "";
                $productstocks_ = "";

            if (isset($_GET["id"])){

                $conn = connectDB();
                $result = $conn->query("SELECT * FROM products where product_id=".$_GET["id"]);
    
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $productname_ = $row["product_name"];
                    $productdescription_ = $row["product_description"];
                    $productstocks_ = $row["stocks"];
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT!</title>
</head>
<body>
    <h1>Inventory System</h1>
    <p style="color: blue;">EDIT PAGE</p>
    <a href="index.php">HOME</a><br><br>


    <form action="updateprocess.php" method='POST'>

        <input name="productid" type='hidden' value="<?php echo $_GET["id"]; ?>"><br><br>

        <label>Product Name:</label>
        <input name="productname" type='text' value="<?php echo $productname_; ?>"><br><br>

        <label>Product Description:</label>
        <input name="productdescription" type='text' value="<?php echo $productdescription_; ?>"><br><br>

        <label>Stocks:</label>
        <input name="stocks" type='number' value="<?php echo $productstocks_; ?>"><br><br>

        <button type='submit' >SUBMIT</button>

    </form>
    
</body>
</html>