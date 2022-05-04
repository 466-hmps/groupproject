<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        h1 {
            font-family: Copperplate, Papyrus, fantasy;
            text-align: center;
            font-size: 4em;
        }
        h2 {}
        div {font-size: 25px;}
        p {font-size: 20px;}

        .grid-container {
          display: grid;
          grid-template-columns: auto auto auto;
          padding: 10px;
        }
        .grid-item {
          background-color: rgba(255, 255, 255, 0.8);
          padding: 20px;
          font-size: 30px;
          text-align: left;
        }
        body{background-color:#edd58a;}
    </style>
</head>

<?php
$username='z1689918';
include 'security.php';
try {
    $dsn = "mysql:host=courses;dbname=z1689918";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOexception $e) {
    echo "Connection to database failed: " . $e->getMessage();
    exit();
}
?>

    <a href = "http://students.cs.niu.edu/~z1689918/groupproject/html/storepage.php">
    <div style = "margin-left:1%;">Home</div></a>
    <a href = "http://students.cs.niu.edu/~z1689918/groupproject/html/storepage.php">
    <div style='position:relative; left:90%;'>View Cart</div></a>
    <a href = "http://students.cs.niu.edu/~z1689918/groupproject/html/storepage.php">
    <div style='position:relative; left:90%;'>Checkout</div></a>
    <h1>Products</h1>

    <h2>Produt Type</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="https://th.bing.com/th/id/OIP.icgRiypiusfGyTzJunCZQwHaE_?pid=ImgDet&rs=1" alt="Beef Products.">
      </div>
      <div class="grid-item"><p>Ground Beef. 85% Fat and 15% Lean.</p><p>Great for burgers or making burgers or meatballs.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>

    <h2>Produt Type</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="https://media.istockphoto.com/vectors/bacon-vector-id472319165?k=6&m=472319165&s=612x612&w=0&h=7jX5xgr1xpURA1VDmnEfoFEZA6-GPuIuQzHEun7FeAg=" alt="God's gift to burgers.">
      </div>
      <div class="grid-item"><p>Breaded Pork Chops</p><p>Great for a wholesome family dinners or gatherings.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>

    <h2>Produt Type</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="https://cdn.vox-cdn.com/thumbor/15Y6PNEliwJ9PK4lqsgQoMuJYPg=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/13465124/Fortnite___23_11_2018_13_40_07__2_.jpg" alt="BAWK BAWK">
      </div>
      <div class="grid-item"><p>Boneless/Skinless Chicken Breast</p><p>Wonderfull for all purpose meals. Can be used for your chicken tacos, fettucini alfredo, or even your protein sourcce for macro conscious lifters.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>

    <h2>Produt Type</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="https://res.cloudinary.com/teepublic/image/private/s--qLXoL8GA--/t_Preview/b_rgb:ffffff,c_limit,f_jpg,h_630,q_90,w_630/v1536751202/production/designs/3144110_0.jpg" alt="Gobble Gobble">
      </div>
      <div class="grid-item"><p>Ground Turkey</p><p>Great choice for a more healthy alternative for meatballs or burgers.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>

    <h2>Produt Type</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="https://th.bing.com/th/id/R.b3edc1fd663c9457a338d20e3d44f9fc?rik=%2b3tIeIHmia3Tww&pid=ImgRaw&r=0" alt="Fish are friends, not food">
      </div>
      <div class="grid-item"><p>Salmon Fillets. Wild Alaskan Salmon.</p><p>Healthy meat alternative for a reduction of red meat products.</p><p>Great for grilling or pan searing on a bed of rice.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>
</body>
</html>


