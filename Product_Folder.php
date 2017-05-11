<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Page: Folder</title>
        <?php include 'config.php';?>
    </head>

    <body>
        <div id="container">
            <div id = "Bar">
                <ul>
                    <li> <a href = "./Main_Menu.php"> Main Menu </a></li>
                    <li> User Name Here </li>
                    <li> <a href = "./Login.php"> Log Out </a></li>
                </ul>
            </div>
            <div id="header">
                <div id="Product X">
                <!-- Product X is just a placeholder for the name of the product-->
                    <h1>Product X</h1>
                </div>
            </div>

            <div id = "content">
                <div id = "left">
                    <div id = "leftInput">
                    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">

                    <!-- This input for type is a placeholder since drop down buttons require css-->
                    <!-- <input type = "text" name="Type" placeholder="Type"><br> -->

                    <?php
                        echo "Type:<br>";

                        $type_result = $conn->query("SELECT product_type FROM catalog WHERE product_line = 'Folder' ORDER BY product_type");
                        echo "<select name = 'Type'>";
                        while ($row = $type_result->fetch_assoc()) {
                            unset($product_type);
                            $product_type = $row['product_type'];
                            echo "<option value = " . $product_type . ">" . $product_type . "</option>";
                        }
                        echo "</select>";
                     ?>

                    <div id="buttons">
                        Colors<br>
                        <input type="radio" name="color" value="red"> Red<br>
                        <input type="radio" name="color" value="orange"> Orange <br>
                        <input type="radio" name="color" value="yellow"> Yellow<br>
                        <input type="radio" name="color" value="green"> Green<br>
                        <input type="radio" name="color" value="purple"> Purple<br>
                        <input type="radio" name="color" value="pink"> Pink<br>
                        <input type="radio" name="color" value="black"> Black<br>
                    </div>

                    Personalization Options:<br>
                    <!-- This too is a placeholder since drop down buttons require css-->
                    <input type = "text" name ="Options" placeholder ="Options"><br>

                    Dimensions:<br>
                    <input type="text" name="length" value="Length">
                    <input type="text" name="width" value="Width">
                    <input type="text" name="height" value="Height">

                    Number of Slots: <br>
                    <input type="number" name="slots" value="0" min="1" max="99">

                    Quantity:
                    <input type = "number" name="Quantity" value ="0" min="1" max = "99"> <br>

                    Price<br>
                    </div>

                    <div id = "rightSubmit">
                    <input  type= submit value ="Submit" >
                    </form>
                    </div>
                </div>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $Line =  test_input($_POST["Line"]);
                        $Type =  test_input($_POST["Type"]);
                        $color =  test_input($_POST["color"]);
                        $Options =  test_input($_POST["Options"]);
                        $length =  test_input($_POST["length"]);
                        $width =  test_input($_POST["width"]);
                        $height =  test_input($_POST["height"]);
                        $slots = test_input($_POST["slots"]);
                        $Quantity =  test_input($_POST["Quantity"]);

                        // $sql ="INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
                        // VALUES('" . $productType . "', '" . $productLine . "', " . $pLimit . ", " . $length . ", " . $width . ", " . $height . ", " . $slots . ", " . $srp . ");";
                        //
                        // if ($conn->query($sql) === TRUE) {
                        //     echo "New record created successfully";
                        // } else {
                        //     echo "Error: " . $sql . "<br>" . $conn->error;
                        // }
        				// $conn->close();
                    }
                ?>

                <div right>
                    <h5>20% off!</h5>
                    <h1>Insert Image</h1>
                </div>
            </div>
        </div>
    </body>
</html>
