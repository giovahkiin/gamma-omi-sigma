<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Order</title>
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
                    <form>
                    Order ID:<br>
                    <input type="text" name="orderID" placeholder="Order ID"> <br>
                    
                    Customer ID:<br>
                    <input type="text" name="customerID" placeholder="Customer ID"><br>
                    
                    Assigned Agent ID:<br>
                    <input type="text" name="agentID" placeholder="Agent ID"><br>
                    </form>
                </div>
                
                <div id= "right">
                    <div id="rightforms">
                    <form>
                    Recipient Name:<br>
                    <input type="text" name="recFName" placeholder="First Name">
                    <input type="text" name="recLName" placeholder="Last Name"><br>
                    
                    Delivery Address:<br>
                    <input type="text" name="address" placeholder="Address"><br>
                    
                    Delivery Schedule:<br>
                        <input type="date" name="date" placeholder="DD/MM/YY"><br>
                    
                    Time:<br>
                    </form>
                    </div>
                        
                    Is it a Gift?<br>
                    <input type="checkbox" name="isGift" value="yes">Yes<br>
                    
                    <div id="submit">
                        <form action=Add_Order_2.php>
                        <input type="submit" value ="Proceed">
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </body>
</html>