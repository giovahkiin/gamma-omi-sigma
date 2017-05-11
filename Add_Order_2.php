<!DOCTYPE HTML>
<html>
    <head>
        <title>Add Order</title>
        <?php
            include 'config.php';
            $_SESSION['orderID'] = $_POST['orderID'];
            $_SESSION['customerID'] = $_POST['customerID'];
            $_SESSION['agentID'] = $_POST['agentID'];
            $_SESSION['recFName'] = $_POST['recFName'];
            $_SESSION['recLName'] = $_POST['recLName'];
            $_SESSION['address'] = $_POST['address'];
            $_SESSION['date'] = $_POST['date'];
            $_SESSION['isGift'] = $_POST['isGift'];
        ?>
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
                <div id= "AddOrder">
                    <h1>Add Order</h1>
                </div>
            </div>

            <div id="content">
                <div id ="left">
                    <div id="leftforms">
                        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
                        Product ID<br>
                        <input type="text" name="ProductID" placeholder="Product ID"><br>
                    </div>

                    <!-- May replace to a drop down menu later on -->
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
                </div>

                <div id ="right">
                    <div id ="rightforms">
                        Personalization Limit:<br>
                        <input type = "text" name="pLimit" placeholder="Personalization Limit"> <br>

                        Quantity:<br>
                        <input type = "number" name="Quantity" value ="0" min="0" max = "99"> <br>

                        Discounted Percentage:<br>
                        <input type="text" name="discountPercent" placeholder="Quantity"><br>

                        Total Price:<br>
                        <input type="text" name="totalPrice" placeholder="Quantity"><br>
                    </div>

                    <div id ="submit">
                        <input type= "submit" value="Add">
                        </form>

                    </div>
                </div>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $orderID = test_input($_SESSION['orderID']);
                        $customerID = test_input($_SESSION['customerID']);
                        $agentID = test_input($_SESSION['agentID']);
                        $recFName = test_input($_SESSION['recFName']);
                        $recLName = test_input($_SESSION['recLName']);
                        $address = test_input($_SESSION['address']);
                        $date = test_input($_SESSION['date']);
                        $isGift = test_input($_SESSION['isGift']);


                        $productID = test_input($_POST["productID"]);
                        $color = test_input($_POST["color"]);
                        $pLimit = test_input($_POST["pLimit"]);
                        $Quantity = test_input($_POST["Quantity"]);
                        $discountPercent = test_input($_POST["discountPercent"]);
                        $totalPrice = test_input($_POST["totalPrice"]);

                        // $sql ="INSERT INTO catalog(product_type, product_line, personalization_limit, length, width, height, number_of_slots, price)
                        // VALUES('" . $productType . "', '" . $productLine . "', " . $pLimit . ", " . $length . ", " . $width . ", " . $height . ", " . $slots . ", " . $srp . ");";

                        if ($conn->query($sql) === TRUE) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
        				$conn->close();
                    }
                ?>

            </div>
        </div>
    </body>
</html>
