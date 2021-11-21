
<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handlers.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name){
		if(isset($_POST[$name])){
			echo $_POST[$name];
		}
	}

	//Force user loggin! <--(optional)
	//if(isset($_SESSION['userLoggedIn'])){
		//$userLoggedIn = $_SESSION['userLoggedIn'];
	//}
	//else{
		//header("Location: Register.php");
	//}
?>

<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="">

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>-->
</head>

<body>
	<div id="">
		<div id="">
			<div id="">
				<form id= "" action="Register.php" method="POST">
					<h2>Login to your account</h2>
					<p>
						<?php echo  ?>
						<label for="loginUsername">Username </label>
						<input id="loginUsername" type="text" name="loginUsername" placeholder="e.g. bartSimpson" value="<?php ?>" required>
					</p>

					<p>
						<label for="loginPassword">Password </label>
						<input id="loginPassword" type="password" name="loginPassword" placeholder="Your Password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<!--Change to Register Form-->
					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Sign up here. </span>		
					</div>

				</form>



				<form id= "registerForm" action="Register.php" method="POST">
					<h2>Create a free account</h2>

					<p>
						<?php echo  ?>
						<?php echo  ?>
						<label for="username">User name</label>
						<input id="username" type="text" name="username" placeholder="e.g. bartSimpson" value="<?php ?>" required>
					</p>

					<p>
						<?php echo ?>
						<label for="firstname">First name</label>
						<input id="firstname" type="text" name="firstname" placeholder="First Name" value="<?php  ?>" required>
					</p>

					<p>
						<?php echo ?>
						<label for="lastname">Last name</label>
						<input id="lastname" type="text" name="lastname" placeholder="Last Name" value="<?php  ?>"  required>
					</p>

					<p>
						<?php echo ?>
						<?php echo ?>
						<?php echo ?>
						<label for="email">Email</label>
						<input id="email" type="email" name="email" placeholder="bartSimpson@gmail.com" value="<?php  ?>"  required>
					</p>

					<p>
						<label for="email2">Confirm Email</label>
						<input id="email2" type="email" name="email2" placeholder="bartSimpson@gmail.com" value="<?php  ?>" required>
					</p>

					<p>
						<?php echo ?>
						<?php echo ?>
						<?php echo ?>
						<label for="password">Password</label>
						<input id="password" type="password" name="password" placeholder="Your Password" required>
					</p>

					<p>
						<label for="password2">Confirm Password</label>
						<input id="password2" type="password" name="password2" placeholder="Confirm your Password" required>
					</p>

					<button type="submit" name="registerButton">SIGN UP</button>
					<!--Change to Login Form-->
					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Login here</span>		
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>
