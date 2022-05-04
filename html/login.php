<?php 
$title = "Home";
include '../partials/header.php';
include '../partials/nav.php'; 
?>
	<div class="login">
		<form action="http://students.cs.niu.edu/~z1895440/466Final.php" method="POST">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Email" name="uemail" required>
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="pswrd" required>
			<button type="submit">Login</button>
		</form>
    </div>
<?php include '../partials/footer.php'; ?>
