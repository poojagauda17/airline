<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Flight Booking</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="header">
  	
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
	  <h2>Sign Up</h2>
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
	  Already Have An Account? <a href="login.php"> Log in</a>
  	</p>
  </form>
</body>
</html>