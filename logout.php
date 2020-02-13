<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form class="login-form" action="index.php" method="post">
		<h2 class="form-title">Welcome</h2>
		<!-- form validation messages -->
		
		<?php include('messages.php'); ?>
		
		<div class="form-group">
			<button type="submit" name="logout_user" class="login-btn">Logout</button>
		</div>
		
	</form>
</body>
</html>