<!DOCTYPE HTML>
<html>
	<head>
		<title> Order Reports </title>
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
			<h2> Orders </h2>
			<input type = "text" placeholder = "search">
		<div id = "Table">
			<table>
				<?php
				 	include 'config.php';
					$sqlresult = $conn->query("SELECT request.order_no AS 'Order Number', request.quantity AS 'Quantity Ordered', request.discount AS 'Discount', request.total_amount as 'Total Amount' FROM request, orders WHERE request.order_no = orders.order_no;");
		            echo sql_to_html_table($sqlresult, $delim = "\n");
					$conn->close();
			 	?>
				<tr>
					<th> Total Sales </th>
					<td> (x) </td>
				</tr>
			</table>
		</div>
	</body>
</html>
