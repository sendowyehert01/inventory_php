<?php
    include 'database.php';
    connectDB();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Inventory System</h1>
    <p style="color: blue;">HOMEPAGE</p>
    <a href="create.php">ADD PRODUCT</a>
    
    <ul>
        <?php
            $sql = "SELECT * FROM products";
            $conn = connectDB();
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo
                '<li>'.$row["product_name"].'</li>'."<a href='update.php?id=".$row["product_id"]."'>UPDATE</a>"."<a href='delete.php?id=".$row["product_id"]."'>DELETE</a>";
            }
            } else {
            echo "0 results";
            }
            $conn->close();
        ?>
    </ul>

</body>
</html>