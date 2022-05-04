<?php 
$title = "Home";
include '../partials/header.php';
include '../partials/nav.php'; 
?>
	<div class="login">
		<form action="http://students.cs.niu.edu/~z1895440/466Final.php" method="POST">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Email" name="uemail" id="uname" required>
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="pswrd" id="psw" required>
			<input type="checkbox" checked="checked" name="remember" id="remember">
			<span>
				<label for="remember">Remember Me</label>
			</span>
			<span>
				<button type="submit">Login</button>
			</span>
		</form>
		<span class="psw"><a href="#">Forgot Password?</a></span>
    </div>
<?php include '../partials/footer.php'; ?>
