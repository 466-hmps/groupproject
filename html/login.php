<?php 
$title = "Login";
include '../partials/header.php';
include '../partials/nav.php'; 

?>

	<div class="login">
		<form method="POST">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Email" name="uemail" id="uname" required>
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="pswrd" id="psw" required>
			<input type="checkbox" checked="checked" name="remember" id="remember">
			<span>
				<label for="remember">Remember Me</label>
			</span>
			<span>
				<label for="login">
				<button type="submit" name="login" id="login" value="login">Login</button>
			</span>
		</form>
		<span class="psw"><a href="#">Forgot Password?</a></span>
    </div>
<?php 
if(isset($_POST['login']))
{
	$enterPass = GetPass($_POST['uemail']);
	if ($_POST['pswrd'] == $enterPass) {
		$custID = GetID($_POST['uemail']);
		$_SESSION['email'] = $_POST['uemail'];
		$_SESSION['password'] = $_POST['pswrd'];
		$_SESSION['custid'] = $custID;
	}
}

include '../partials/footer.php'; 
?>
