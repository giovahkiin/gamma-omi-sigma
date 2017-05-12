<!DOCTYPE HTML>
<html>
    <head>
        <title>Update Stock </title>
        <link rel ="stylesheet" type= "text/css" href="UpdStockStyle.css">
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
                    <h1>Update Stock</h1>
                </div>
            </div>
            
            <div class = "content">
                <div id = "left">
                        <div id="leftforms">
                        <form>
                    
                        Product Line:<br>
                        <input type="text" name="productLine" value="Name"><br>
                    
                        Type:<br>
                        <input type="text" name="productType" value="Type"><br>

                        </form>
                        </div>
                        
                        <!-- Might replace to drop down buttons-->
                        <div id="buttons">
                        <forms>
                        Colors<br>
                        <input type="radio" name="color" value="red"> Red<br>
                        <input type="radio" name="color" value="orange"> Orange <br>
                        <input type="radio" name="color" value="yellow"> Yellow<br>
                        <input type="radio" name="color" value="green"> Green<br>
                        <input type="radio" name="color" value="purple"> Purple<br>
                        <input type="radio" name="color" value="pink"> Pink<br>
                        <input type="radio" name="color" value="black"> Black<br>
                        </forms>
                        </div>
                    
                </div>
                
                <div id="right">
                    
                        <div id="rightforms">
                        <form>
                            
                        Current Stock: <br> <br>
                        <input type="number" name="stock" value = "0" min ="0" max="99"> <br>
                        </form> 
                        </div>
                
                        <div id="submit">

                        </div>
                       
                        
                </div>
            </div>
            <div id = "footer">
                <form action = "./Main_Menu.php">
                <input type="submit" value ="Delete">
                <input type= "submit" value="Update">
                </form> 
            </div>
        </div>
    </body>
</html>
