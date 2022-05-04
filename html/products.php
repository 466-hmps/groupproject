<?php 
$title = "Products";
include '../partials/header.php';
include '../partials/nav.php'; 
?>
    <h1>Products</h1>

    <h2>Beef</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="img/beef.jpg" alt="Beef Products.">
      </div>
      <div class="grid-item"><p>Ground Beef. 85% Fat and 15% Lean.</p><p>Great for burgers or making burgers or meatballs.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>

    <h2>Pork</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="img/pork.jpg" alt="God's gift to burgers.">
      </div>
      <div class="grid-item"><p>Breaded Pork Chops</p><p>Great for a wholesome family dinners or gatherings.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>

    <h2>Chicken</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="img/chicken.jpg" alt="BAWK BAWK">
      </div>
      <div class="grid-item"><p>Boneless/Skinless Chicken Breast</p><p>Wonderfull for all purpose meals. Can be used for your chicken tacos, fettucini alfredo, or even your protein sourcce for macro conscious lifters.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>

    <h2>Turkey</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="img/turkey.jpg" alt="Gobble Gobble">
      </div>
      <div class="grid-item"><p>Ground Turkey</p><p>Great choice for a more healthy alternative for meatballs or burgers.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>

    <h2>Fish</h2>
    <div class="grid-container">
      <div class="grid-item">
      <img width="150" height="150" src="img/fish.jpg" alt="Fish are friends, not food">
      </div>
      <div class="grid-item"><p>Salmon Fillets. Wild Alaskan Salmon.</p><p>Healthy meat alternative for a reduction of red meat products.</p><p>Great for grilling or pan searing on a bed of rice.</p></div>
      <div class="grid-item">
            <label for="amount">QTY</label>
            <input type='number' name='amount' value='QTY of item' />
            <input type='submit' name='add' value='Add to cart' />
      </div>
    </div>
<?php include '../partials/footer.php'; ?>


