<?php include("path.php");?>


<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>



<!DOCTYPE html>
<html>
<head>
	<title>Rgister</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://kit.fontawesome.com/2f19188006.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnm0CqbT1WIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKKMHpvLbHG9Sr" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
	<?php include(ROOT_PATH. "/app/includes/header.php"); ?>

	<div class="auth-content">
		<form action="register.php" method="post">
			<h2 class="form-title"> Register</h2>

			<?php include(ROOT_PATH . "/app/helpers/formErrors.php");  ?>

			



			<div>
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
			</div>

			<div>
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
			</div>

			<div>
				<label>Password</label>
				<input type="Password" name="Password" value="<?php echo $Password; ?>" class="text-input">
			</div>

			<div>
				<label>Confirm Password</label>
				<input type="Password" name="PasswordConf" value="<?php echo $PasswordConf; ?>" class="text-input">
			</div>
			<div>
				<button type="submit" name="register-btn" class="btn btn-big">Register</button>
			</div>
			<p> Or <a href="<?php echo BASE_URL. '/login.php'?>">Sign In</a></p>
		</form>
	</div>


	<!--JQUERY -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/js/scripts.js"></script>

</body>
</html>