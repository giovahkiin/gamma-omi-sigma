<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
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
            <div id =  "header">
                <div id ="Customer Details">
                    <h1>Customer Details</h1>
                </div>
            </div>
            
            <div id ="content">
                <div id = left>
                    <form>
                        Customer Name: <br>
                        <input type ="text" name="fName"
                        placeholder="First Name">
                        <input type ="text" name="fName" placeholder="Last Name"><br>
                    
                        Recipient Name:<br>
                        <input type= "text" name ="fName" placeholder = "First Name">
                        <input type="text" name ="lName" placeholder = "Last Name"><br>
                        
                        Deliver Address:
                        <input type= "text" name ="address" placeholder = "Address">
                    </form>
                </div>
                
                <div id = right>
                    <div id="leftforms">
                    <form>
                        Delivery Schedule:
                        <input type="date" name="delivDate" placeholder="DD/MM/YY"><br>
                        
                        Time:
                        <input type = "time" name ="delivTime" placeholder="24:00">
                        <br>
                        
                        <input type="checkbox" name="isGift">
                        It a Gift?<br>
                    </form>
                    </div>
                    <div id ="Check Out">
                        <form>
                        <input type ="submit" value ="Check Out"> Yes<br>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </body>
</html>