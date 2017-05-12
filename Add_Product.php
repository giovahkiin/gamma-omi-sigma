<!-- edited -->
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Item </title>
	    <link rel="stylesheet" type="text/css" href="Add_Product.css"/>
        <?php include 'config.php';?>
    </head>

    <body>
        <div id = "container">
            <div id = "Bar">
                <ul>
                    <li> <a href = "./Main_Menu.php"> Main Menu </a></li>
                    <li> User Name Here </li>
                    <li> <a href = "./Login.php"> Log Out </a></li>
                </ul>
            </div>
            <div id = "productHeader">
                <div id = "AddProduct">
                    <h1>Add Product</h1>
                </div>
            </div>

            <div id = "content">
                <div id = "left">

                        <div id="leftforms">
                        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
                        Product Line:<br>
                        <input type="text" name="productLine" placeholder="Line" required><br>

                        Type:<br>
                        <input type="text" name="productType" placeholder="Type" required><br>

                        Features:<br>
                        <input type="text" name="features" placeholder="Features" size ="100" required><br>

                        Dimensions:<br>
                        <input type="text" name="length" placeholder="Length">
                        <input type="text" name="width" placeholder="Width">
                        <input type="text" name="height" placeholder="Height">

                        <br>Number of Slots:<br>
                        <input type="number" name="slots" value="0" min="0" max="15" >

                        </div>

                        <!-- We might change the radio buttons to a drop down menu-->
                        </div>
                </div>

                <div id="right">
                        <div id="rightforms">
                        Personalization Limit:<br>
                        <input type = "number" name="pLimit" value="0" min="1" max="10"> <br>

                        Suggested Retail Price:<br>
                        <input type="text" name="srp" placeholder = SRP required>
                        </div>

                        <div id="submit">

                        <input type= "reset" value = "Reset">
                        <input type= "submit" value="Submit">
                        </form>
                        </div>
                </div>
            </div>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $productLine =  test_input($_POST["productLine"]);
                    $productType =  test_input($_POST["productType"]);
                    $features = test_input($_POST["features"]);
                    $length =  test_input($_POST["length"]);
                    $width =  test_input($_POST["width"]);
                    $height =  test_input($_POST["height"]);
                    $slots = test_input($_POST["slots"]);
                    $pLimit =  test_input($_POST["pLimit"]);
                    $srp =  test_input($_POST["srp"]);

                    if ($slots==0) {
                        $sql ="INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, features, price)
                        VALUES('" . $productType . "', '" . $productLine . "', $pLimit, " . $length . ", " . $width . ", " . $height . ", NULL, '" . $features . "', " . $srp . ");";
                    }
                    if ($length=="" AND $width=="" AND $height=="") {
                        $sql ="INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, features, price)
                        VALUES('" . $productType . "', '" . $productLine . "', $pLimit, NULL, NULL, NULL, $slots , '" . $features . "', " . $srp . ");";
                    }
                        $sql1 ="INSERT INTO stock(product_type, color, quantity, last_update)
                        VALUES('" . $productType . "', 'Red', 1, NOW());";
                        $sql2 ="INSERT INTO stock(product_type, color, quantity, last_update)
                        VALUES('" . $productType . "', 'Orange', 1, NOW());";
                        $sql3 ="INSERT INTO stock(product_type, color, quantity, last_update)
                        VALUES('" . $productType . "', 'Yellow', 1, NOW());";
                        $sql4 ="INSERT INTO stock(product_type, color, quantity, last_update)
                        VALUES('" . $productType . "', 'Green', 1, NOW());";
                        $sql5 ="INSERT INTO stock(product_type, color, quantity, last_update)
                        VALUES('" . $productType . "', 'Blue', 1, NOW());";
                        $sql6 ="INSERT INTO stock(product_type, color, quantity, last_update)
                        VALUES('" . $productType . "', 'Purple', 1, NOW());";
                        $sql7 ="INSERT INTO stock(product_type, color, quantity, last_update)
                        VALUES('" . $productType . "', 'Pink', 1, NOW());";
                        $sql8 ="INSERT INTO stock(product_type, color, quantity, last_update)
                        VALUES('" . $productType . "', 'Black', 1, NOW());";

                    if ($conn->query($sql) === TRUE) {
                        echo $productType . " added to the catalog.<br>";
                            if ($conn->query($sql1) === TRUE) {
                        } else {
                            echo "Error: " . $sql1 . "<br>" . $conn->error;
                        }
                        if ($conn->query($sql2) === TRUE) {
                        } else {
                            echo "Error: " . $sql2 . "<br>" . $conn->error;
                        }
                        if ($conn->query($sql3) === TRUE) {
                        } else {
                            echo "Error: " . $sql3 . "<br>" . $conn->error;
                        }
                        if ($conn->query($sql4) === TRUE) {
                        } else {
                            echo "Error: " . $sql4 . "<br>" . $conn->error;
                        }
                        if ($conn->query($sql5) === TRUE) {
                        } else {
                            echo "Error: " . $sql5 . "<br>" . $conn->error;
                        }
                        if ($conn->query($sql6) === TRUE) {
                        } else {
                            echo "Error: " . $sql6 . "<br>" . $conn->error;
                        }
                        if ($conn->query($sql7) === TRUE) {
                        } else {
                            echo "Error: " . $sql7 . "<br>" . $conn->error;
                        }
                        if ($conn->query($sql8) === TRUE) {
                            echo "One stock in each color has been added for " . $productType . ".";
                        } else {
                            echo "Error: " . $sql8 . "<br>" . $conn->error;
                        }
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    
    				$conn->close();
                }
            ?>

            <div id = "footer">

            </div>
        </div>
    </body>


</html>
