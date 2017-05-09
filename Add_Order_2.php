<!DOCTYPE HTML>
<html>
    <head>
        <title>Add Order</title>
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
                        <form>
                        Product ID<br>
                        <input type="text" name="ProductID" placeholder="Product ID"><br>
                        
                        
                        Is it a Gift?<br>
                        <input type="checkbox" name="isGift" value="yes">Yes<br>
                        </form>
                    </div>
                    
                    <!-- May replace to a drop down menu later on -->
                    <div id="buttons">
                        <form>
                        Colors<br>
                        <input type="radio" name="color" value="red"> Red<br>
                        <input type="radio" name="color" value="orange"> Orange <br>
                        <input type="radio" name="color" value="yellow"> Yellow<br>
                        <input type="radio" name="color" value="green"> Green<br>
                        <input type="radio" name="color" value="purple"> Purple<br>
                        <input type="radio" name="color" value="pink"> Pink<br>
                        <input type="radio" name="color" value="black"> Black<br>  
                        </form>
                    </div>
                </div>
                    
                <div id ="right">
                    <div id ="rightforms">
                        <form>
                        Personalization Limit:<br>
                        <input type = "number" name="pLimit" value ="0" min="0" max = "99"> <br>

                        Quantity:<br>
                        <input type = "number" name="Quantity" value ="0" min="0" max = "99"> <br>
                        
                        Discounted Percentage:<br>
                        <input type="text" name="quantity" placeholder="Quantity"><br>
                        
                        Total Price:<br>
                        <input type="text" name="quantity" placeholder="Quantity"><br>
                        </form>
                    </div>
                    
                    <div id ="submit">
                        <form action = Add_Order.php>
                        <input type= "submit" value="Back">
                        </form>
                        <input type= "submit" value="Add">
                    
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>