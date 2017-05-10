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
                        <!-- Item ID:<br>
                        <input type="text" name="itemID" placeholder="Item ID"><br> -->

                        Product Line:<br>
                        <input type="text" name="productLine" placeholder="Name"><br>

                        Type:<br>
                        <input type="text" name="productType" placeholder="Type"><br>

                        Dimensions:<br>
                        <input type="text" name="length" placeholder="Length">
                        <input type="text" name="width" placeholder="Width">
                        <input type="text" name="height" placeholder="Height">
                        </div>

                        <!-- We might change the radio buttons to a drop down menu-->
                        </div>
                </div>

                <div id="right">
                        <div id="rightforms">
                        Personalization Limit:<br>
                        <input type = "number" name="pLimit" value ="0" min="0" max = "99"> <br>

                        Suggested Retail Price:<br>
                        <input type="text" name="srp" placeholder = SRP>
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
                    $length =  test_input($_POST["length"]);
                    $width =  test_input($_POST["width"]);
                    $height =  test_input($_POST["height"]);
                    $pLimit =  test_input($_POST["pLimit"]);
                    $srp =  test_input($_POST["srp"]);

                    $sql ="INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
                    VALUES('" . $productType . "', '" . $productLine . "', " . $pLimit . ", " . $length . ", " . $width . ", " . $height . ", NULL, " . $srp . ");"; //TODO: FIX NULL

                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
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
