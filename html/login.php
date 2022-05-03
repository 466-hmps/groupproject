<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {text-align: center;}
        h2 {text-align: center;}
        div {text-allign: center; font-size: 25px;}
        p {font-size: 20px;}
        .login {
            margin:auto;
            width: 60%;
            border: 3px solid #73AD21;
            padding: 10px;
        }
        body{font-family: Copperplate, Papyrus, fantasy;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>466 Group Project</title>
</head>
<body>
<a href = "http://students.cs.niu.edu/~z1689918/groupproject/html/storepage.php">
	<div style = "margin-left:1%;">Home</div>
	</a>
<form action="" method="post">
<div class="login" style="">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <div style="background-color:#f1f1f1">
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</body>