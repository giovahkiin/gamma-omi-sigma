<!DOCTYPE HTML>
<html>
	<head>
		<title> Main Menu </title>
		<link rel = "stylesheet" type = "text/css" href = "Main_Menu.css">
	</head>
	<body>
		<div id = "Body>">
			<div class = "Bar">
				<ul id = "BarList">
	                <li id = "Name"> User Name Here </li>
					<li> <a href = "./Login.php"> Log Out </a></li>
				</ul>
			</div>
			<div id = "Title">
				<img src = "logo.png" width = 891 height = 222>
			</div>
			<div class = "Menu">
				<ul id = "MenuItems">
					<!-- <div id = "Catalog">
						<li> <a href = "./Catalog.php"> Catalog </a> </li>
					</div> -->
					<li> <a href = "./My_Cart.php"> My Cart </a> </li>

							<ul class = "StatList">
								<li> <a href = "./Inventory.php"> Inventory </a> </li>
								<li> <a href = "./Transactions.php"> Agent Transactions </a> </li>
								<li> <a href = "./Reports.php"> Reports </a> </li>
							</ul>


							<ul class = "FormsList">
								<li> <a href = "./Add_Product.php"> Add Product </a> </li>
								<li> <a href = "./Add_Order.php"> Add Order </a> </li>
								<li> <a href = "./Update_Product.php"> Update Product </a> </li>
								<li> <a href = "./Update_Stock.php"> Update Stock </a> </li>
							</ul>

				</ul>
			</div>
		</div>
	</body>
</html>
