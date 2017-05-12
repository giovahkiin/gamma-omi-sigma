<!DOCTYPE HTML>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Add_Order</title>
      <link rel="stylesheet" type="text/css" href="Add_Order.css"/>
      <?php
         include 'config.php';
         session_start();
         session_unset();
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
         <div id="Header">
            <div id= "AddOrder">
               <h1>Add Order</h1>
            </div>
         </div>
         <div class ="content">
            <div id = "left">
               <form method="POST" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
                  Customer ID:<br>
                  <input type="text" name="customerID" placeholder="Customer ID" required><br>
            </div>
            <div id= "right">
            <div id="rightforms">
            <!-- <form> -->
            Recipient Name:<br>
            <input type="text" name="recFName" placeholder="First Name" required>
            <input type="text" name="recLName" placeholder="Last Name" required><br>
            Delivery Address:<br>
            <input type="text" name="address" placeholder="Address" required><br>
            Delivery Schedule:<br>
            <input type="date" name="date" placeholder="MM/DD/YY"><br>
            Time:<br>
            <input type="time" name="deliv_time" placeholder="HH:MM:SS"><br>
            <!-- </form> -->
            </div>
            Will this be a gift?<br>
            <input type="radio" name="isGift" value="1">Yes<br>
            <input type="radio" name="isGift" value="0">No<br>
            </div>
         </div>
      </div>
      <div id="footer">
      <div id="submit">
      <input type="submit" value ="Proceed">
      </form>
      </div>
      </div>
      </div>
      <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $customerID = $_POST['customerID'];
             $recFName = $_POST['recFName'];
             $recLName = $_POST['recLName'];
             $address = $_POST['address'];
             $date = $_POST['date'];
             $deliv_time = $_POST['deliv_time'];
             $isGift = $_POST['isGift'];

             $sql1 ="INSERT INTO orders (customer_id, isGift, recipient_name, address, order_date, delivery_date, delivery_time)
             VALUES (" .$customerID.", ".$isGift.", CONCAT('".$recFName."', ' ', '".$recLName ."'), '".$address."', NOW(), '".$date."', '".$deliv_time."');";

             if ($conn->query($sql1) === TRUE) {
                 echo "<script type = 'text/javascript'>
                         alert ('DEBUGpart1 success');
                     </script>";
                 header("Location:Add_Order_2.php");
                 exit;
             } else {
                 echo "Error: " . $sql1 . "<br>" . $conn->error;
             }
         }
         ?>
   </body>
</html>
