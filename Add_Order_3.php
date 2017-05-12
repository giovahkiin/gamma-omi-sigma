<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="UTF-8">
      <title> Add Order </title>
      <link rel ="stylesheet" type= "text/css" href="Product_Page.css">
      <?php
         include 'config.php';
         session_start();
         ?>
   </head>
   <body>
      <div id="container">
      <div class = "Bar">
         <ul id = "BarList">
            <li id = "Name"> User Name Here </li>
            <li> <a href = "./Main_Menu.php"> Main Menu </a> </li>
            <li> <a href = "./Login.php"> Log Out </a> </li>
         </ul>
      </div>
      <div id="header">
         <div id="Product X">
            <?php
               if ($_GET["line"] == "PenOrg") {
                   $line = "Pen Organizer";
               } else {
                   $line = $_GET["line"];
               }

               echo "<h1>" . $line . "s</h1>";
               ?>
         </div>
      </div>
      <div id = "content">
         <div id = "left">
            <div id = "leftInput">
               <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
                  <?php
                     echo "Type:<br>";

                     $type_result = $conn->query("SELECT product_type FROM catalog WHERE product_line = '". $line ."' ORDER BY product_type");
                     echo "<select name = 'Type'>";
                     while ($row = $type_result->fetch_assoc()) {
                         unset($product_type);
                         $product_type = $row['product_type'];
                         echo "<option value = " . $product_type . ">" . $product_type . "</option>";
                     }
                     echo "</select>";
                     ?>
                  <div id="buttons">
                     Colors<br>
                     <input type="radio" name="color" value="red"> Red<br>
                     <input type="radio" name="color" value="orange"> Orange <br>
                     <input type="radio" name="color" value="yellow"> Yellow<br>
                     <input type="radio" name="color" value="green"> Green<br>
                     <input type="radio" name="color" value="purple"> Purple<br>
                     <input type="radio" name="color" value="pink"> Pink<br>
                     <input type="radio" name="color" value="black"> Black<br>
                  </div>
                  Personalization:<br>
                  <input type = "text" name ="Options" placeholder ="Personalization"><br>
                  Quantity:
                  <input type = "number" name="Quantity" value ="0" min="1" max = "99"> <br>
                  <div id = "rightSubmit">
                     <input  type= submit value ="Submit" >
               </form>
               </div>
            </div>
            <?php
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   $Type =  test_input($_POST["Type"]);
                   $color =  test_input($_POST["color"]);
                   $Options =  test_input($_POST["Options"]);
                   $Quantity =  test_input($_POST["Quantity"]);

                   $sql ="INSERT INTO request (order_no, product_type, color, personalization, quantity, total_amount)
                        VALUES ((SELECT order_no FROM orders ORDER BY order_no DESC LIMIT 1), '".$Type."', '".$color."', '".$Options."', $Quantity, (SELECT((SELECT(SELECT price FROM catalog WHERE product_type = '".$Type."')* $Quantity) -(SELECT((SELECT discount FROM catalog WHERE product_type ='".$Type."')*( SELECT(SELECT price FROM catalog WHERE product_type = '".$Type."') * $Quantity))))));";

                   //does not subtract from stock yet

                   if ($conn->query($sql) === TRUE) {
                       echo "Order successful!";
                       header("Location:Add_Order_2.php");
                       exit; // <- don't forget this!
                   } else {
                       echo "Error: " . $sql . "<br>" . $conn->error;
                   }
               $conn->close();
               }
               ?>
            <div right>
               <h5>20% off!</h5>
               <h1>Insert Image</h1>
            </div>
         </div>
      </div>
   </body>
</html>
