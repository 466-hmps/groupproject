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
<a href = "http://students.cs.niu.edu/~z1895440/466Final.php">Home</a>
<form action="http://students.cs.niu.edu/~z1895440/466Final.php" method="POST">
<div class="login" style="">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Email" name="uemail" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pswrd" required>
        
      <button type="submit">Login</button>

    </div>

  </form>

  <?php
        if(isset($_POST['submit'])){
            try {
                session_start();	
                $dsn = "mysql:host=courses;dbname=z1895440";
                $username = "z1895440";
                $password = "2002Jan29";
                $pdo = new PDO($dsn, $username, $password);
    
                //if(isset($_POST['uemail'] == NULL && !isset($_POST['pswrd']))){
                 //   exit('Error. Enter Username and Password.');
               // }
                $useremail = $_POST['uemail'];
                $passwrd = $_POST['pswrd'];
                $sql = "SELECT * FROM USER WHERE Email='$useremail' AND Password='$passwrd'";
                $result = $pdo->prepare($sql);
                  /*  $result->bind_param('string', $_POST['uemail']);
                    $result->execute();
                    $result->store_result();
                    $result->close();*/
                
                $row = $result->fetchAll(PDO::FETCH_ASSOC);

                if($row['Email'] != ""){
                   // $row = $result->fetchAll(PDO::FETCH_ASSOC);
                    if($row['Email'] == $uemail && $row['Password'] == $pswrd){
                        echo "Logged in!";
                        $_SESSION['Email'] = $row['Email'];
                        $_SESSION['Name'] = $row['Name'];
                        $_SESSION['ID'] = $row['ID'];
						header('location: 466final.php');
                    }else{
                        echo "LOGIN ERROR";
                    }
                }
                
            }
    
            catch (PDOException $e) {
                echo "<p>Connection to database failed: " . $e->getMessage(). "<p>";
            }
        }

    ?>
</body>