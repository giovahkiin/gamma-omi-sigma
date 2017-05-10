<!DOCTYPE HTML>
<html>
    <head>
        <title>Add Item </title>
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
            <div id = "Header">
                <div id = "UpdateProduct">
                    <h1>Update Product</h1>
                </div>
            </div>
            
            <div id = "content">
                <div id = "left">
                        <div id="leftforms">
                        <form>
                    
                        Product Line:<br>
                        <input type="text" name="productLine" value="Name"><br>
                    
                        Type:<br>
                        <input type="text" name="productType" value="Type"><br>
                    
                        Dimensions:<br>
                        <input type="text" name="length" value="Length">
                        <input type="text" name="width" value="Width">
                        <input type="text" name="height" value="Height">

                        Number of Slots:<br>
                        <input type="number" name="slots" value="0" min="1" max="99">
                        </form>
                        </div>
                        
                        <!-- Might replace to drop down buttons-->
                        <div id="buttons">
                        <forms>
                        Colors<br>
                        <input type="radio" name="color" value="red"> Red<br>
                        <input type="radio" name="color" value="Orange"> Orange <br>
                        <input type="radio" name="color" value="yellow"> Yellow<br>
                        <input type="radio" name="color" value="green"> Green<br>
                        <input type="radio" name="color" value="purpe"> Purple<br>
                        <input type="radio" name="color" value="pink"> Pink<br>
                        <input type="radio" name="color" value="black"> Black<br>
                        </forms>
                        </div>
                    
                </div>
                
                <div id="right">
                    
                        <div id="rightforms">
                        <form>
                        Personalization Limit:<br>
                        <input type = "number" name="pLimit" value ="0" min="0" max = "99"> <br>
                    
                        Suggested Retail Price:<br>
                        <input type="text" name="srp" value = SRP>
                            
                        Current Stock: <br>
                        <input type="number" name="stock" min ="0" max="99">
                        </form> 
                        </div>
                
                        <div id="submit">
                        <form>
                        <input type="submit" value ="Delete">
                        <input type= "submit" value="Update">
                        </form> 
                        </div>
                       
                        
                </div>
            </div>
            <div id = "footer">
            </div>
        </div>
    </body>
</html>
