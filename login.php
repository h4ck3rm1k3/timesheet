<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="Login_form">
	<form action = "Login.php" method = "POST" >
		<label id="username_lbl"> Username:</label>
		<input type="text" id="username" name = "user" placeholder="Username">
		<br>
		<br>
		<label id="password_lbl">Password:</label>
		<input type="password" id="password" name = "pass" placeholder="Password">
		<br>
		<br>
		<input type="submit" value="Login">
	</form>
</div>
</body>
</html>