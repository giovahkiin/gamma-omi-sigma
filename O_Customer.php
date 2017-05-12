<!DOCTYPE HTML>
<html>
	<head>
		<title> Customer Reports </title>
		<link rel = "stylesheet" type = "text/css" href = "O_Customer.css"/>
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
			<h2> Customers </h2>
			<input type = "text" placeholder = "search">
		</div>

		<div id = "Table">
			<?php
			 	include 'config.php';
				$sqlresult = $conn->query("SELECT customer.customer_id AS 'Customer Number', customer.customer_name AS 'Name', agent.name AS 'Agent', orders.order_no as 'Order Number', request.total_amount AS 'Total Amount' FROM customer, agent, orders, request WHERE customer.agent_id = agent.agent_id AND customer.customer_id = orders.customer_id AND orders.order_no = request.order_no;");
	            echo sql_to_html_table($sqlresult, $delim = "\n");
				$conn->close();
			 ?>

			<table>
				<tfoot>
						<td> </td>
						<td> </td>
						<td> </td>
						<th> Total Sales </th>
						<td> (x) </td>
				</tfoot>
			</table>
		</div>
	</body>
</html>
