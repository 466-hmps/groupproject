<?php 
require_once '../lib/session.php';
$title = "Products";
include '../partials/header.php';
include '../partials/nav.php'; 
include '../lib/library.php';
echo "  <h3 class='cartheader'>This page shows your current cart</h3>";
if(isset($_SESSION['userid'])){
    if(isset($_POST['RemoveItem'])) {
        RMFromCart($CustID, $_POST['RemoveItem']);
    }
    draw_cart(GetCart($_SESSION['userid']));
    $rows = GetCart($_SESSION['userid']);
    $total = 0;
    foreach ($rows as $row) {
    $total += $row['Price'] * $row['Amt'];
    echo "<div class=\"subtotal\">";
    }
    echo "Order Subtotal: $total";
    echo "    </div>";
    echo "<form action = orders.php method='POST'>
    <input type='submit' name='create' value='Create Order' />
    </form>";

    echo "<form action = cart.php method='GET'>
    <input type='submit' name='clear' value='Clear Cart' />
    </form>";
    if(isset($_GET['clear'])){
        ClearCart($_SESSION['userid']);
    }
    
}else{
    echo "  <p>Your cart is empty. Please login to view your cart.</p>";
}
include '../partials/footer.php'; 
?>
