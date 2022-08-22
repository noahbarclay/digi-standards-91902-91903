<?php include("../pages/header.php");?>

<head>
<link rel="stylesheet" href="../css/admin.css"/>
</head>

<div class="login">
			<h1>Login</h1>
			<form action="../admin/authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>