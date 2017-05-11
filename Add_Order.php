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
                    <form method="POST" action="./Catalog.php">
                    Order ID:<br>
                    <input type="text" name="orderID" placeholder="Order ID"> <br>

                    Customer ID:<br>
                    <input type="text" name="customerID" placeholder="Customer ID"><br>

                    Assigned Agent ID:<br>
                    <input type="text" name="agentID" placeholder="Agent ID"><br>
                </div>

                <div id= "right">
                    <div id="rightforms">
                    Recipient Name:<br>
                    <input type="text" name="recFName" placeholder="First Name">
                    <input type="text" name="recLName" placeholder="Last Name"><br>

                    Delivery Address:<br>
                    <input type="text" name="address" placeholder="Address"><br>

                    Delivery Schedule:<br>
                        <input type="date" name="date" placeholder="DD/MM/YY"><br>

                    Time:<br>
                    </div>

                    Is it a Gift?<br>
                    <input type="checkbox" name="isGift" value="yes">Yes<br>

                    <div id="submit">
                        <input type="submit" value ="Proceed">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
