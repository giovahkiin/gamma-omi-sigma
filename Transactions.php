<!DOCTYPE HTML>
<html>
	<head>
		<title> Agent Transactions </title>
		<link rel = "stylesheet" type = "text/css" href = "Transactions.css"/>
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
			<h1> Agent Transactions </h1>
		</div>

		<div id = "Table">
			<?php
			 	include 'config.php';
				$sqlresult = $conn->query("SELECT orders.order_date AS 'Date', agent.name AS 'Agent', customer.customer_name AS 'Customer Name', orders.order_no AS 'Order Number', SUM(request.total_amount) AS  'Total Amount' FROM orders, agent, customer, request WHERE orders.customer_id = customer.customer_id AND customer.agent_id = agent.agent_id AND orders.order_no = request.order_no GROUP BY orders.order_no;");
				// Amount stuff still missing
	            echo sql_to_html_table($sqlresult, $delim = "\n");
				$conn->close();
			 ?>
		</div>

	</body>
</html>
