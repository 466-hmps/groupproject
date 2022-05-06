<?php 
require_once '../lib/session.php';
$title = "Checkout";
include '../partials/header.php';
include '../partials/nav.php'; 
include '../lib/library.php';
include '../partials/printglobals.php';
if(isset($_SESSION['userid'])) {
    $total = checkout_cart(GetCart($_SESSION['userid']));
    echo <<<HTML
        <form method="POST">
            <span>
                <label for="checkout">
                <button type="submit" name="checkout" id="checkout" value="checkout">Checkout</button>
            </span>
        </form>
    HTML;
}
else
    echo "  <p>Your cart is empty. Please login to checkout.</p>";
if(isset($_POST['checkout']))
{
    CreateOrder($_SESSION['userid'], $total);
    ClearCart($_SESSION['custid']);
}
?>


<?php include '../partials/footer.php'; ?>
