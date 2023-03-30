<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Online Flight Booking System</title>
 	

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>

<style>
	body{
		width: 100%;
	    height: 100%;
	    /*background: #007bff;*/
	}
	
	#login-form{

	position: absolute;

		width:100%;
		height: calc(100%);
		display: flex;
		align-items: center;
		justify-content: center;
		background: url(../assets/img/1615490820_banner.jpg);
	    background-repeat: no-repeat;
	    background-size: cover;		


	}


.form-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(55px);
    display: flex;
    justify-content: center;
    align-items: center;

}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}

.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
	
}
.inputbox label{

    color: #fff;
  
}


input:focus ~ label,
input:valid ~ label{
top: -5px;
}


</style>

<body>

  					<form id="login-form" >
  						<div class="form-group">
						  <div class="form-box">
            <div class="form-value">
                <form action="">
				<h2><b>Administrator Login</b></h2>
				<div class="inputbox">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>
  						<div class="inputbox">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control"><br>
  						</div>
 <button class="btn-sm btn-block btn-wave col-md-15 btn-primary">Login</button><br>

  					</form>
  				</div>
  			</div>
  		</div>
  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>

