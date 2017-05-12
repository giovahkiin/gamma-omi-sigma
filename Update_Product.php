<!DOCTYPE HTML>
<html>
    <head>
        <title>Update Product </title>
        <link rel ="stylesheet" type= "text/css" href="Update_Product.css">
    </head>

    <body>
        <div id = "container">
            <div class = "Bar">
                <ul id = "BarList">
                    <li id = "Name"> User Name Here </li>
                    <li> <a href = "./Main_Menu.php"> Main Menu </a> </li>
                    <li> <a href = "./Login.php"> Log Out </a> </li>
                </ul>
            </div>
            <div id = "Header">
                <div id = "UpdateProduct">
                    <h1>Update Product</h1>
                </div>
            </div>
            
            <div class = "content">
                <div id = "left">
                        <div id="leftforms">
                        <form>

                        Product Line:<br>
                        <input type="text" name="productLine" value="Name"><br>
                    
                        Type:<br>
                        <input type="text" name="productType" value="Type"><br> <br>

                        </form>
                        </div>
                </div>
                
                <div id="right">
                    
                        <div id="rightforms">
                        <form>

                        Discount:<br> <br> 
                        <input type = "number" name="discount" value ="0" min="0" max = "100"> <br> <br>

                        Suggested Retail Price: <br> <br>
                        <input type="text" name="srp" value = SRP> <br> <br>
                        </form> 
                        </div>
                
                        <div id="submit">

                        </div>
                       
                        
                </div>
            </div>
            <div id = "footer">
                <form>
                <input type="submit" value ="Delete">
                <input type= "submit" value="Update">
                </form> 
            </div>
        </div>
    </body>
</html>
