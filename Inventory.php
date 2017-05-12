<!DOCTYPE HTML>
<html>
	<head>
		<title> Inventory </title>
		<link rel = "stylesheet" type = "text/css" href = "Inventory.css"/>
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
			<input type = "text" placeholder = "search">
			<h1> Inventory </h1>
		</div>
		<div id = "Table">
			<?php
				include 'config.php';
				$sqlresult = $conn->query("SELECT product_type AS 'Item', color AS 'Color', quantity AS 'Quantity', last_update AS 'Last Update' FROM stock;");
				echo sql_to_html_table($sqlresult, $delim = "\n");
				$conn->close();
			 ?>
		</div>
	</body>
</html>
