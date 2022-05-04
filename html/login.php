<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>466 Group Project</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include '../partials/nav.php'; ?>
<form action="http://students.cs.niu.edu/~z1895440/466Final.php" method="POST">
<div class="login" style="">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Email" name="uemail" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pswrd" required>
        
      <button type="submit">Login</button>

    </div>

  </form>

</body>
