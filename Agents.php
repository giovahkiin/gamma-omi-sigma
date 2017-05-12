<!DOCTYPE HTML>
<html>
	<head>
		<title> Agent Transactions </title>
	</head>
	<body>
		<div id = "Bar">
			<ul>
				<li> <a href = "./Main_Menu.php"> < Main Menu </a> </li>
                <li> User Name Here </li>
				<li> <a href = "./Login.php"> Log Out </a></li>
			</ul>
		</div>
		<div id = "Title">
			<input type = "text" placeholder = "search">
			<h1> Agent Transactions </h1>
		</div>
		<div id = "Table">
			<table>
				<tr>
					<th> Date </th>
				</tr>
				<tr>
					<td> Date </td>
					<td> Agent </td>
					<td> Customer Number </td>
					<td> Order Number </td>
					<td> Amount </td>
				</tr>
				<tr>
					<td> M - D - Y <td>
					<td> (name) </td>
					<td> (name) </td>
					<td> (xxxx) </td>
					<td> (x) </td>
				</tr>
			</table>

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
