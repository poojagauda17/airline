<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Flight Booking</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body><body>
	<h1>Welcome To Online Flight Booking System</h1>
	
  <div class="header">
	<small><b>-Pooja Gauda & Sejal Gite</b></small>
  
  	
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
	  <h2>Log In</h2>
  		<label>Username</label>
  		<input type="text" name="username">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
	  Create A New Account? <a href="register.php"> Sign up</a>
  	</p>
  </form>
</body>
</html>
