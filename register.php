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
<br></br><br ></br><h1>PEOPLE WELFARE ENHANCEMENT SYSTEM</h1>
	<div class="header">
	<h2>Register</h2>
	</div>
	
	<form name ="myForm" method="post" action="register.php" onsubmit="return Validate()" >
	

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>User ID</label>
			<input type="text" name="EmpId" value="<?php echo $EmpId; ?>">
		</div>
	
		<div class="input-group">
			<label>User Name</label>
			<input type="text" name="UserId">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="Email">
		</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" >
		</div>
		
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_1" >
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign In</a>
		</p>
	</form>
	
	
	
	</body>
</html>