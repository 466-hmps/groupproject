<?php 
require_once '../lib/session.php';
$title = "Products";
include '../partials/header.php';
include '../partials/nav.php'; 
include '../lib/library.php';
echo "  <h3 class='cartheader'>This page shows your current cart</h3>";
if(isset($_SESSION['userid']))
    draw_cart(GetCart($_SESSION['userid']));
else
    echo "  <p>Your cart is empty. Please login to view your cart.</p>";
include '../partials/footer.php'; 
?>
