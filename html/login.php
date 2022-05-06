<?php 
require_once '../lib/session.php';
if(isset($_SESSION['userid']))
{
	//redirect to homepage
	header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/');
	exit;
}
else {
	if(isset($_POST['login']))
	{
		require_once '../Model/dbstarter.php';
		require_once '../Model/dbhandler.php';
		$user = GetUser($_POST['uemail'], "email");
		if (password_verify($_POST['pswrd'], $user['Password'])) {
			$_SESSION['userid'] = $user['ID'];
			$Checkers = verifyUser($_POST['uemail'], $user['Password']);
			$_SESSION['Checkmate'] = $Checkers;
			//redirect to homepage
			header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/');
			exit;
		}
		else {
			$errormessage = "Invalid Password. Please enter your password.";
		}
	}
}
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
if(isset($errormessage))
{
	echo "	<p>$errormessage</p>\n";
}
include '../partials/footer.php'; 
?>
