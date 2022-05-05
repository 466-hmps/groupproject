<?php 
require_once '../lib/session.php';
$title = "Checkout";
include '../partials/header.php';
include '../partials/nav.php'; 
include '../lib/library.php';

draw_inv(AllProducts());
?>



<?php include '../partials/footer.php'; ?>
