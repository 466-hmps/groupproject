<?php 
require_once '../lib/session.php';
$title = "Checkout";
include '../partials/header.php';
include '../partials/nav.php'; 
include '../lib/library.php';
if(isset($_SESSION['userid'])) {
    $total = checkout_cart(GetCart($_SESSION['userid']));
    if ($total == 0) {
        echo "  <h2>Your Cart Is Empty</h2>";
    }
    else
    {
        echo <<<HTML
            <form method="POST">
                <span>
                    <label for="checkout">
                    <button type="submit" name="checkout" id="checkout" value="checkout">Checkout</button>
                </span>
            </form>
        HTML;
    }
}
else
    echo "  <p>Your cart is empty. Please login to checkout.</p>";
if(isset($_POST['checkout']))
{
    CreateOrder($_SESSION['userid'], $total);
    ClearCart($_SESSION['userid']);
    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/');
    exit;
}
?>


<?php include '../partials/footer.php'; ?>
