    <hr>
    <div class="nav fancytext">
        <ul class="navlist">
            <li>
                <a href = "index.php">Home</a>
            </li>
            <li>
                <a href = "products.php">Products</a>
            </li>
            <li>
                <a href = "cart.php">View Cart</a>
            </li>
            <li>
                <a href = "inventory.php">Inventory</a>
            </li>
            <li>
                <a href = "orders.php">Orders</a>
            </li>
            <li>
                <a href = "checkout.php">Checkout</a>
            </li>
            <li>
                <?php if(isset($_SESSION['userid'])) echo '<a href = "logout.php">Logout</a>'; else echo '<a href = "login.php">Login</a>'; ?>
            </li>
        </ul>
    </div>
    <hr>
