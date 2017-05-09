<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Item </title>
	    <link rel="stylesheet" type="text/css" href="Add_Product.css"/>
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
                        <form>
                        Item ID:<br>
                        <input type="text" name="itemID" placeholder="Item ID"><br>
                    
                        Product Line:<br>
                        <input type="text" name="productLine" placeholder="Name"><br>
                    
                        Type:<br>
                        <input type="text" name="productType" placeholder="Type"><br>
                    
                        Dimensions:<br>
                        <input type="text" name="length" placeholder="Length">
                        <input type="text" name="width" placeholder="Width">
                        <input type="text" name="height" placeholder="Height">
                        </form>    
                        </div>
                        
                        <!-- We might change the radio buttons to a drop down menu-->
                        </div>
                </div>
                
                <div id="right">
                        <div id="rightforms">
                        <form>
                        Personalization Limit:<br>
                        <input type = "number" name="pLimit" value ="0" min="0" max = "99"> <br>
                    
                        Suggested Retail Price:<br>
                        <input type="text" name="srp" placeholder = SRP>
                        </form>
                        </div>
                
                        <div id="submit">
                        <form>
                        <input type= "reset" value = "Reset">
                        <input type= "submit" value="Submit">
                        </form>
                        </div>
                </div>
            </div>
            <div id = "footer">
                
            </div>
        </div>
    </body>


</html>
