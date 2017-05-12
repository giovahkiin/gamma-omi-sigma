<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Order</title>
        <?php
            include 'config.php';
            session_start();
            session_unset();
        ?>
    </head>

    <body>
        <div id="container">
        <div id = "Bar">
            <ul>
                <li> <a href = "./Main_Menu.php"> < Main Menu </a> </li>
                <li> User Name Here </li>
                <li> <a href = "./Login.php"> Log Out </a></li>
            </ul>
        </div>
            <div id="header">
                <div id= "AddOrder">
                    <h1>Add Order</h1>
                </div>
            </div>

            <div id ="content">
                <div id = "left">
                    <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
                    <!-- Order ID:<br>
                    <input type="text" name="orderID" placeholder="Order ID"> <br> -->

                    Customer ID:<br>
                    <input type="text" name="customerID" placeholder="ID" required><br>

                    <!-- Assigned Agent ID:<br>
                    <input type="text" name="agentID" placeholder="Agent ID"><br> -->
                </div>

                <div id= "right">
                    <div id="rightforms">
                    Recipient Name:<br>
                    <input type="text" name="recFName" placeholder="First Name" required>
                    <input type="text" name="recLName" placeholder="Last Name" required><br>

                    Delivery Address:<br>
                    <input type="text" name="address" placeholder="Address" required><br>

                    Delivery Schedule:<br>
                        <input type="date" name="date" placeholder="MM/DD/YY"><br>

                    Time:<br>
                        <input type="time" name="deliv_time" placeholder="HH:MM:SS"><br>
                    </div>

                    Will this be a gift?<br>
                    <input type="radio" name="isGift" value="1">Yes<br>
                    <input type="radio" name="isGift" value="0">No<br>

                    <div id="submit">
                        <input type="submit" value ="Proceed">
                        </form>
                    </div>

                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $customerID = $_POST['customerID'];
                            $recFName = $_POST['recFName'];
                            $recLName = $_POST['recLName'];
                            $address = $_POST['address'];
                            $date = $_POST['date'];
                            $deliv_time = $_POST['deliv_time'];
                            $isGift = $_POST['isGift'];

                            $sql1 ="INSERT INTO orders (customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
                            VALUES (" .$customerID.", ".$isGift.", CONCAT('".$recFName."', ' ', '".$recLName ."'), '".$address."', NOW(), '".$date."', '".$deliv_time."');";

                            if ($conn->query($sql1) === TRUE) {
                                echo "<script type = 'text/javascript'>
                                        alert ('DEBUGpart1 success');
                                    </script>";
                                header("Location:Catalog.php");
                                exit;
                            } else {
                                echo "Error: " . $sql1 . "<br>" . $conn->error;
                            }
                        }
                     ?>

                </div>
            </div>
        </div>
    </body>
</html>
