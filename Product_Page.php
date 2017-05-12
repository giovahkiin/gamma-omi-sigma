<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Page</title>
        <link rel ="stylesheet" type= "text/css" href="Product_Page.css">
    </head>

    <body>
        <div class="container">
            <div class = "Bar">
                <ul id = "BarList">
                    <li id = "Name"> User Name Here </li>
                    <li> <a href = "./Main_Menu.php"> Main Menu </a> </li>
                    <li> <a href = "./Login.php"> Log Out </a> </li>
                </ul>
        </div>

        <div id="header">
            <div id="Product X">
            <!-- Product X is just a placeholder for the name of the product-->
                <h1>Product X</h1>
            </div>
            
            
            </div>
            <div id = "content">
                <div id = "left">
                    <div id = "leftInput">
                    <form>
                    Type:<br>
                    <!-- This input for type is a placeholder since drop down buttons require css-->
                    <input type = "text" name="Type" placeholder="Type"><br>

                    Color:<br>

                    Personalization Options:<br>
                    <!-- This too is a placeholder since drop down buttons require css-->    
                    <input type = "text" name ="Options" placeholder ="Options"><br>
                        <!-- Autofill-->
                    Dimensions:<br>
                    <input type="text" name="length" placeholder="Length">
                    <input type="text" name="width" placeholder="Width">
                    <input type="text" name="height" placeholder="Height"><br>

                    Number of Slots:
                    <input type="number" name="slots" value="0" min="1" max="99"><br>

                    Quantity:
                    <input type = "number" name="Quantity" value ="0" min="1" max = "99"> <br>
                    <!-- Autofill-->
                    Price:
                    <input type = "text" name = "Price" placeholder = "Price"> <br>
                    </form>
                    </div>
                    <div id = "rightSubmit">
                    <form>
                    <input type= "submit" value ="Submit">
                    </form>
                    </div>    
                
                </div>
                <div right>
                    <!-- Displays discount if there is any 20% off is just a placeholder-->
                    <div id ="productPicture">
                    <h5>Discount</h5>
                    <h1>Insert Image</h1>
                        <div id= "Description">
                            <TEXTAREA Name="description" placeholder = "Description" ROWS=8 COLS=20></TEXTAREA>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>