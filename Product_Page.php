<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Page</title>
        <?php
            include 'config.php';
            session_start();
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
                <div id="Product X">
                <?php
                    if ($_GET["line"] == "PenOrg") {
                        $line = "Pen Organizer";
                    } else {
                        $line = $_GET["line"];
                    }

                    echo "<h1>" . $line . "s</h1>";
                 ?>
                </div>
            </div>

            <div id = "content">
                <div id = "left">
                    <div id = "leftInput">
                    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">

                    <?php
                        echo "Type:<br>";

                        $type_result = $conn->query("SELECT product_type FROM catalog WHERE product_line = '". $line ."' ORDER BY product_type");
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
                        $orderID = test_input($_SESSION['orderID']);
                        $customerID = test_input($_SESSION['customerID']);
                        $agentID = test_input($_SESSION['agentID']);
                        $recFName = test_input($_SESSION['recFName']);
                        $recLName = test_input($_SESSION['recLName']);
                        $address = test_input($_SESSION['address']);
                        $date = test_input($_SESSION['date']);
                        $isGift = test_input($_SESSION['isGift']);

                        $Type =  test_input($_POST["Type"]);
                        $color =  test_input($_POST["color"]);
                        $Options =  test_input($_POST["Options"]);
                        $Quantity =  test_input($_POST["Quantity"]);

                        $sql1 ="INSERT INTO orders (customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
                        VALUES (" .$orderid.", ".$isGift.", CONCAT('".$recFName."', ' ', '".$recLName ."'), ".$address.", NOW(), ".$date.", ".$deliv_time.");";

                        if ($conn->query($sql1) === TRUE) {
                            echo "sql1 successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $sql2 ="INSERT INTO request (order_no, product_type, color, personalization, quantity, discount, total_amount)
                        VALUES (".$orderID.", ''".$Type."'', ''".$color."', '".$Options."', ".$Quantity.", 0.00, (SELECT price from catalog where product_type = '".$Type."') * quantity);";

                        if ($conn->query($sql2) === TRUE) {
                            echo "sql2 successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

        				$conn->close();
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
