<?php 
require_once '../lib/session.php';
$title = "Products";
include '../partials/header.php';
include '../partials/nav.php'; 
include '../lib/library.php';
echo "This page shows your current cart";
if(isset($_SESSION['userid']))
{
    $stmt = ShowCart($_SESSION['userid']);
    draw_table($stmt);
}
else {
    echo "  <p>Your cart is empty. Please login to view your cart.</p>";
}
//customer not logged in. please login
include '../partials/footer.php'; 
?>
