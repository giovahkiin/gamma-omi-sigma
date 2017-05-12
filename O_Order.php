<!DOCTYPE HTML>
<html>
	<head>
		<title> Order Reports </title>
		<link rel = "stylesheet" type = "text/css" href = "O_Order.css"/>
	</head>
	<body>

		<div class = "Bar">
            <ul id = "BarList">
                <li id = "Name"> User Name Here </li>
                <li> <a href = "./Main_Menu.php"> Main Menu </a> </li>
                <li> <a href = "./Login.php"> Log Out </a> </li>
            </ul>
        </div>

		<div id = "Title">
			<input type = "date" name = "date" placeholder = "Date">
			<h1> Reports </h1>
		</div>

		<div id = "Name">
			<h2> Orders </h2>
			<input type = "text" placeholder = "search">
		</div>

		<div id = "Table">
			<?php
				include 'config.php';
				$sqlresult = $conn->query("SELECT order_no AS 'Order Number', product_type as 'Item Name', quantity AS 'Quantity Ordered', total_amount as 'Total Amount' FROM request");
				echo sql_to_html_table($sqlresult, $delim = "\n");
				$conn->close();
			?>
			<table>
				<tfoot>
					<td> </td>
					<td> </td>
					<td> Total Sales </td>
					<td> (x) </td>
				</tfoot>
			</table>
		</div>
	</body>
</html>
