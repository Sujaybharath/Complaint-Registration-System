<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<style>
h1{
	text-align:center;
        color:#4500D9;
  }
</style>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<br></br><h1>PEOPLE WELFARE ENHANCEMENT SYSTEM</h1>

	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>user ID</label>
			<input type="text" name="EmpId" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>