<!DOCTYPE HTML>
<html>
	<head>
		<title> Customer Reports </title>
	</head>
	<body>
		<div id = "Bar">
			<ul>
				<li> <a href = "./reports.php"> < Main Menu </a> </li>
                <li> User Name Here </li>
				<li> <a href = "./login.php"> Log Out </a></li>
		</div>
		<div id = "Title">
			<input type = "text" placeholder = "date">
			<h1> Reports </h1>
		</div>
		<div id = "Name">
			<h2> Customers </h2>
			<input type = "text" placeholder = "search">
		<div id = "Table">
			<?php
			 	include 'config.php';
				$sqlresult = $conn->query("SELECT customer.customer_id AS 'Customer Number', customer.name AS 'Name', agent.name AS 'Agent', orders.order_no as 'Order Number', orders.amount_due AS 'Total Amount' FROM customer, agent, orders WHERE customer.agent_id = agent.agent_id AND customer.customer_id = orders.customer_id;");
	            echo sql_to_html_table($sqlresult, $delim = "\n");
				$conn->close();
			 ?>

			<table>
				<tr>
					<th> Total Sales </th>
					<td> (x) </td>
				</tr>
			</table>
		</div>
	</body>
</html>
