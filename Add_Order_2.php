<!DOCTYPE HTML>
<html>
	<head>
		<title> Product Catalog </title>
		<?php
            include 'config.php';
			session_start();

        ?>
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
			<h1> Product Catalog </h1>
		</div>
		<div id = "Menu">
			<ul>
				<li> <a href = "./Product_Page.php?line=Folder"> Folders </a> </li>
				<li> <a href = "./Product_Page.php?line=PenOrg"> Pen Organizers </a> </li>
				<li> <a href = "./Product_Page.php?line=Planner"> Planners </a> </li>
			</ul>
		</div>

		<form action="Main_Menu.php">
		    <input type="submit" value="Checkout" />
		</form>

	</body>
</html>
