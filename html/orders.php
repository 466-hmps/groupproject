<?php 
require_once '../lib/session.php';
$title = "Checkout";
include '../partials/header.php';
include '../partials/nav.php'; 
include '../lib/library.php';

?>

<?php
    if(isset($_SESSION['userid'])){
            $total = 0;
            $rows = GetCart($_SESSION['userid']);
            foreach ($rows as $row) {
            $total += $row['Price'] * $row['Amt'];
            }
        if(isset($_POST['create'])){
            CreateOrder($_SESSION['userid'], $total);
        }
            draw_order(ShowOrder($_SESSION['userid']));

            echo "<form action=orders.php method='GET'>";
            echo "<input type='submit' name='cancel' value='Cancel Orders' />";
            if(isset($_GET['cancel'])){
                ClearOrders($_SESSION['userid']);
            }
            
            
            
        }


?>

<?php include '../partials/footer.php'; ?>
