<!DOCTYPE HTML>
<html>
    <head>
        <title>Update Product </title>
        <link rel ="stylesheet" type= "text/css" href="Update_Product.css">
        <?php include 'config.php'; ?>
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
                        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">

                        Product Line:<br>
                        <input type="text" name="productLine" placeholder="Line" required><br>
                    
                        Type:<br>
                        <input type="text" name="productType" placeholder="Type" required><br> <br>

                        <!-- </form> -->
                        </div>
                </div>
                
                <div id="right">
                    
                        <div id="rightforms">
                        <!-- <form> -->

                        Discount:<br> <br> 
                        <input type = "text" name="discount" placeholder="Discount"> <br> <br>

                        Suggested Retail Price: <br> <br>
                        <input type="text" name="srp" placeholder="SRP"> <br> <br>
                        <!-- </form>  -->
                        </div>
                
                        <div id="submit">
                        </div>
                       
                        
                </div>
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $productLine =  test_input($_POST["productLine"]);
                    $productType =  test_input($_POST["productType"]);
                    $discount =  test_input($_POST["discount"]);
                    $srp =  test_input($_POST["srp"]);

                $sql ="UPDATE catalog SET discount = " . $discount . ", price = " . $srp . " WHERE product_line = '".$productLine."' AND product_type = '".$productType."';";

                 if ($conn->query($sql) === TRUE) {
                        echo $productType . " has been updated successfully.<br>";
                    }
                 else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
            }
            ?>

            <div id = "footer">
                <!-- <form> -->
                <input type="submit" value ="Delete">
                <input type= "submit" value="Update">
                </form> 
            </div>
        </div>
    </body>
</html>
