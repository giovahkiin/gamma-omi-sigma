<!DOCTYPE html>
<html>
	<head>
		<title> Login Page </title>
		<link rel = "stylesheet" type = "text/css" href = "Login.css">
		<link href = "PrintClearly.otf" rel = "stylesheet">
	</head>
	<body>
		<div class = "Body">
			<div id = "Logo">
				<img width = "1188" height = "297" src = "logo.png">
			</div>
			<form action="Main_Menu.php">
				<div class = "Input">
					<div id = "Username">
						<input class = "text" id = "user" type = "text" name = "username" placeholder = "Username">
						<br>
					</div>
					<div id = "Password">
						<input class = "text" id = "pass" type ="password" name = "password" placeholder = "Password">
						<br>
					</div>
				</div>
				<div id = "Submit">
					<input class = "button" id = "button" type = "submit" name = "submit" value = "Log In">
				</div>
			</form>
		</div>
	</body>
</html>
