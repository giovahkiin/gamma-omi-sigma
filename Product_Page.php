<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prodct Page</title>
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

                    Dimensions:<br>
                    <input type="text" name="length" value="Length">
                    <input type="text" name="width" value="Width">
                    <input type="text" name="height" value="Height">

                    Number of Slots: <br>
                    <input type="number" name="slots" value="0" min="1" max="99">

                    Quantity:
                    <input type = "number" name="Quantity" value ="0" min="1" max = "99"> <br>

                    Price<br>
                    </form>
                    </div>
                    
                    <div id = "rightSubmit">
                    <form>
                    <input  type= submit value ="Submit" >
                    </form>
                    </div>    
                </div>
                
                <div right>
                    <h5>20% off!</h5>
                    <h1>Insert Image</h1>
                </div>
            </div>
        </div>
    </body>
</html>