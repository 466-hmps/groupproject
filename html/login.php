<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {text-align: center;}
        h2 {text-align: center;}
        div {text-allign: center; font-size: 25px;}
        p {font-size: 20px;}
		a {font-size: 30px;}
		input[type=text], input[type=password] {
  			width: 100%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			box-sizing: border-box;
		}
		button{
			padding: 14px 20px;
  			margin: 8px 0;
			width: 75%;
			background-color: #73AD21;
			border: none;
			color: white;
		}
        .login {
			display: flex;
			flex-wrap: wrap;
            margin:auto;
            width: 60%;
            border: 3px solid black;
			padding: 12px 20px;
			justify-content: center;
			align-items: center;
			margin-bottom: 20px;
        }

        body{font-family: Copperplate, Papyrus, fantasy;}

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<body style="background-color:#edd58a;"></body>

    <title>466 Group Project</title>
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
