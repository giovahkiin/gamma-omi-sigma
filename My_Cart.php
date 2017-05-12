<!DOCTYPE HTML>
<html>
	<head>
		<title> Inventory </title>
	    <link rel="stylesheet" type="text/css" href="My_Cart.css"/>
	</head>
	<body>
			<div class = "Bar">
                <ul id = "BarList">
                    <li id = "Name"> User Name Here </li>
                    <li> <a href = "./Main_Menu.php"> Main Menu </a> </li>
                    <li> <a href = "./Login.php"> Log Out </a> </li>
                </ul>
            </div>
		<div class = "header">
		<div id = "Title">
			<input type = "text" placeholder = "search">
			<h1> Inventory </h1>
		</div>
		</div>
		<div id = "Table">
            
			<table class = "center">
				<tr> 
					<th> Product </th>
					<th> Type </th>
					<th> Color </th>
					<th> Personalization</th>
					<th> Quantity </th>
					<th> Discount </th>
					<th> Total Amount </th>
				</tr>
				<tr>
					<td>Product1</td>
					<td> x </td>
					<td> x </td>
					<td> x </td>
					<td> x </td>
                    <td> x </td>
                    <td> x </td>
				</tr>
                <tfoot>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Amount Due:</td>
                    <td>Insert Price</td>
                </tfoot>
			</table>
		</div>
	</body>
</html>