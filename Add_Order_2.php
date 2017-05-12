<!DOCTYPE HTML>
<html>
	<head>
		<title> Add Order </title>
		<link rel = "stylesheet" type = "text/css" href = "Catalog.css"/>
		<?php
            include 'config.php';
			session_start();
        ?>
	</head>
	<body>
		<div class = "Bar">
			<ul id = "BarList">
				<li id = "Name"> User Name Here </li>
				<li>
					<a href = "./Main_Menu.php"> Main Menu </a>
				</li>
				<li>
					<a href = "./Login.php"> Log Out </a>
				</li>
			</ul>
		</div>
		<div id = "Title">
			<h1> Select a line. </h1>
		</div>
		<div id = "MenuItems">
			<ul>
				<li>
					<a href = "./Add_Order_3.php?line=Folder"> Folders </a>
				</li>
				<li>
					<a href = "./Add_Order_3.php?line=PenOrg"> Pen Organizers </a>
				</li>
				<li>
					<a href = "./Add_Order_3.php?line=Planner"> Planners </a>
				</li>
			</ul>
		</div>
		<div id=footer>
			<form action="Main_Menu.php">
				<input type="submit" value="Checkout" />
			</form>
		</div>
	</body>
</html>
